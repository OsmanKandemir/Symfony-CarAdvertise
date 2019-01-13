<?php

namespace App\Controller;


use App\Entity\AdminMessages;
use App\Form\AdminMessagesType;
use App\Form\AdminCarsType;
use App\Entity\AdminCars;
use App\Entity\AdminImage;
use App\Form\AdminImageType;
use App\Repository\AdminCarsRepository;
use App\Repository\AdminImageRepository;
use App\Repository\AdminSettingsRepository;
use App\Repository\AdminCategoryRepository;
use App\Entity\User;
use App\Form\UsersType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(AdminSettingsRepository $settingsRepository, AdminCategoryRepository $categoryRepository)
    {


        $cats = $this->categorytree();
        //print_r($cats);
        //die();
        $cats[0] = '<ul id="menu-v">';
        $data = $settingsRepository->findAll();
        $em = $this->getDoctrine()->getManager();
        $sql = "SELECT * FROM admin_cars where status='True'";
        $statement = $em->getConnection()->prepare($sql);
        $statement->execute();
        $slider = $statement->fetchAll();


        return $this->render('default/index.html.twig', [
            'data' => $data,
            'cats' => $cats,
            'slider' => $slider,
        ]);
    }




    /**
     * @Route("/hakkimizda", name="hakkimizda")
     */
    public function hakkimizda(AdminSettingsRepository $settingsRepository)
    {

        $data = $settingsRepository->findAll();
        return $this->render('hakkimizda.html.twig', [
            'data' => $data,

        ]);

    }


    /**
     * @Route("/iletisim", name="iletisim",methods="GET|POST")
     */
    public function iletisim(AdminSettingsRepository $settingsRepository, Request $request)
    {


        $adminMessage = new AdminMessages();
        $form = $this->createForm(AdminMessagesType::class, $adminMessage);
        $form->handleRequest($request);

        $submittedToken = $request->request->get('token');

        if ($form->isSubmitted()) {
            if ($this->isCsrfTokenValid('form-message', $submittedToken)) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($adminMessage);
                $em->flush();
                $this->addFlash("Success", "Mesaj Gönderildi.");
                return $this->redirectToRoute('iletisim');

            }
        }

        $data = $settingsRepository->findAll();
        return $this->render('iletisim.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'adminMessage' => $adminMessage,


        ]);

    }





    public function categorytree($parent = 0, $user_tree_array = '')
    {

        if (!is_array($user_tree_array))
            $user_tree_array = array();

        $em = $this->getDoctrine()->getManager();
        $sql = "SELECT * FROM admin_category where status='True' AND parent_id =" . $parent;
        $statement = $em->getConnection()->prepare($sql);
        //$statement->bindValue('parent_id',$parent);
        $statement->execute();
        $result = $statement->fetchAll();

        if (count($result) > 0) {
            $user_tree_array[] = "<ul>";
            foreach ($result as $row) {
                $user_tree_array[] = "<li> <a href='category/" . $row['id'] . "'>" . $row['title'] . "</a>";
                $user_tree_array = $this->categorytree($row['id'], $user_tree_array);


            }
            $user_tree_array[] = "</li></ul>";


        }

        return $user_tree_array;


    }

    /**
     * @Route("/category/{catid}/", name="category_products", methods="GET|POST")
     */
    public function categories(AdminCategoryRepository $categoryRepository, $catid): Response
    {
        $cats = $this->categorytree();
        $data = $categoryRepository->findBy(
            ['id' => $catid]
        );
        $em = $this->getDoctrine()->getManager();
        $sql = 'SELECT * FROM admin_cars WHERE status="True" AND category_id = :catid';
        $statement = $em->getConnection()->prepare($sql);
        $statement->bindValue('catid', $catid);
        $statement->execute();
        $products = $statement->fetchAll();
        //dump($result);
        //die();

        return $this->render('cars.html.twig', [
            'data' => $data,
            'products' => $products,
            'cats' => $cats,
        ]);


    }


    /**
     * @Route("/detail2/{id}", name="car_detail",methods="GET")
     */
    public function cardetail(AdminCategoryRepository $adminCategoryRepository, AdminCarsRepository $adminCarsRepository, AdminImageRepository $adminImageRepository, $id)
    {
        $data = $adminCarsRepository->findBy([
            'id' => $id

        ]);
        $images = $adminImageRepository->findBy([

            'car_id' => $id

        ]);


        return $this->render('car-detail.html.twig', [
            'data' => $data,
            'images' => $images,

        ]);

    }

    /**
     * @Route("/newuser", name="new_user",methods="GET|POST")
     */
    public function newuser(UserRepository $userRepository, Request $request): \Symfony\Component\HttpFoundation\Response
    {
        $user = new User();
        $form = $this->createForm(UsersType::class, $user);

        $form->handleRequest($request);

        $submittedToken = $request->request->get('token');
        if ($this->isCsrfTokenValid('user-form', $submittedToken)) {
            if ($form->isSubmitted()) {
                $emaildata = $userRepository->findBy(['email' => $user->getEmail()]);


                 if($emaildata==null) {
                     $onay = $this->getDoctrine()->getManager();
                     $user->setRoles("ROLE_USER");
                     $onay->persist($user);
                     $onay->flush();
                     $data = $userRepository->findAll();
                     $this->addFlash("Success", "Üye Kaydı Basarılı Bir Sekilde Tamamlandı.");


                     return $this->redirectToRoute('new_user');
                 }
                 else
                 {
                     $this->addFlash("Success", $user->getEmail()." Mail Adresi Zaten Mevcut");
                     echo $user->getEmail()."mail var";
                     return $this->redirectToRoute('new_user');

                 }
            }

            // 2) handle the submit (will only happen on POST)
        }
            return $this->render('newuser.html.twig', [
                'user' => $user,
                'form' => $form->createView(),

            ]);


        }

    /**
     * @Route("/ilanver", name="ilan", methods="GET|POST")
     */
    public function new(Request $request,UserRepository $userRepository,AdminCarsRepository $adminCarsRepository,AdminCategoryRepository $categoryRepository): Response
    {   $catlist = $categoryRepository->findAll();
        $catname = $categoryRepository->findBy(['id' => 0]);
        $us = $this->getUser()->getId();

        $adminCar = new AdminCars();
        $form = $this->createForm(AdminCarsType::class, $adminCar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adminCar);
            $em->flush();
            $productid = $adminCar->getId();
            $sql = 'UPDATE admin_cars set user_id = :us WHERE id=:productid';
            $statement = $em->getConnection()->prepare($sql);
            $statement->bindParam(':us',$us);
            $statement->bindParam(':productid',$productid);
            $statement->execute();


            $this->addFlash("Success", "İlan Başarıyla Gönderildi.Admin Onayından Sonra Yayinlanacaktır.Resim İşlemleri ve İlan Durumu için İLANLARİM KISMINI TAKİP EDEBİLİRSİNİZ.");
            return $this->redirectToRoute('ilan');
        }

        return $this->render('users_cars/new.html.twig', [
            'admin_car' => $adminCar,
            'catlist' => $catlist,
            'catname' => $catname,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/ilanlarim", name="ilanlarim", methods="GET")
     */
    public function ilanlarim(AdminCarsRepository $adminCarsRepository,UserRepository $userRepository): Response
    {
        $us = $this->getUser()->getId();
        return $this->render('users_cars/index.html.twig', ['admin_cars' => $adminCarsRepository->findBy(['user_id' => $us])]);


    }





    /**
     * @Route("/ilanlarim/55123{id}3311/edit", name="admin_cars_edit1", methods="GET|POST")
     */
    public function edit(Request $request, $id,AdminCars $adminCar,AdminCategoryRepository $categoryRepository): Response
    {
        $productid = $adminCar->getId();
        $us = $this->getUser()->getId();
        $user_id1 = $adminCar->getUserId();
        if ($user_id1 != $us){
           echo "Oops !! Wrong Page";
            return $this->redirectToRoute('ilanlarim');

        }
        $catlist = $categoryRepository->findAll();
        $catname = $categoryRepository->findBy(['id'=> $adminCar->getCategoryId()]);
        $form = $this->createForm(AdminCarsType::class, $adminCar);
        $em = $this->getDoctrine()->getManager();

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $this->getDoctrine()->getManager()->flush();

            $sql = 'UPDATE admin_cars set user_id = :us WHERE id=:productid';
            $statement = $em->getConnection()->prepare($sql);
            $statement->bindParam(':us',$us);
            $statement->bindParam(':productid',$productid);
            $statement->execute();
            $this->addFlash("Success","Güncelleme Basarılı Bir Sekilde Tamamlandı.");
            return $this->redirectToRoute('ilanlarim');

        }

        return $this->render('users_cars/edit.html.twig', [
            'admin_car' => $adminCar,
            'catlist' => $catlist,
            'catname' => $catname,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/ilanlarim/2342{id}3434", name="admin_cars_delete1", methods="DELETE")
     */
    public function delete(Request $request, AdminCars $adminCar): Response
    {
        $productid = $adminCar->getId();
        $us = $this->getUser()->getId();
        $user_id1 = $adminCar->getUserId();
        if ($user_id1 != $us){
            echo "Oops !! Wrong Page";
            return $this->redirectToRoute('ilanlarim');

        }
        if ($this->isCsrfTokenValid('delete'.$adminCar->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($adminCar);
            $em->flush();
        }

        return $this->redirectToRoute('ilanlarim');
    }
    /**
     * @Route("/ilanlarim/43322{id}34123/iedit", name="admin_cars_iedit1", methods="GET|POST")
     */
    public function iedit(Request $request,$id, AdminCars $adminCar): Response
    {
        $form = $this->createForm(AdminCarsType::class, $adminCar);
        $form->handleRequest($request);
        $productid = $adminCar->getId();
        $us = $this->getUser()->getId();
        $user_id1 = $adminCar->getUserId();
        if ($user_id1 != $us){
            echo "Oops !! Wrong Page";
            return $this->redirectToRoute('ilanlarim');

        }

        if ($form->isSubmitted()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_cars_index1', ['id' => $adminCar->getId()]);
        }

        return $this->render('admin_cars/image_edit.html.twig', [
            'admin_car' => $adminCar,
            'id' => $id,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/ilanlarim/{id}/iupdate", name="admin_cars_iupdate1", methods="POST")
     */

    public function iupdate(Request $request,$id, AdminCars $adminCar): Response
    {
        $form = $this->createForm(AdminCarsType::class, $adminCar);
        $form->handleRequest($request);
        $file = $request->files->get('imagename');
        $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
        try {
            $file->move(
                $this->getParameter('images_directory'),
                $fileName
            );
        } catch (FileException $e) {
            // ... handle exception if something happens during file upload
        }
        $adminCar->setImage($fileName);

        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('admin_cars_iedit1', ['id' => $adminCar->getId()]);

    }



    /**
     * @Route("/ilanlarim/", name="admin_image_index1", methods="GET")
     */

    public function index1(AdminImageRepository $adminImageRepository): Response
    {
        return $this->render('user_image/index.html.twig', ['admin_images' => $adminImageRepository->findAll()]);
    }

    /**
     * @Route("/ilanlarim/new/43123{pid}", name="admin_image_new1", methods="GET|POST")
     */
    public function new1(Request $request,$pid,AdminCarsRepository $carsRepository,AdminImageRepository $imageRepository): Response
    {
        $imageList1 = $carsRepository->findOneBy(['id'=> $pid]);
        $esles = $imageList1->getUserId();
        $us = $this->getUser()->getId();
        if ($esles != $us){
            echo "Oops !! Wrong Page";
            return $this->redirectToRoute('ilanlarim');
        }

        $imageList = $imageRepository->findBy(['car_id' => $pid]);
        $adminImage = new AdminImage();
        $form = $this->createForm(AdminImageType::class, $adminImage);
        $form->handleRequest($request);

        if($request->files->get('imagename'))
            //if ($form->isSubmitted()
        {

            $file = $request->files->get('imagename');
            $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('images_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            $adminImage->setImage($fileName);
            $adminImage->setCarId($pid);



            $em = $this->getDoctrine()->getManager();
            $em->persist($adminImage);
            $em->flush();

            return $this->redirectToRoute('admin_image_new1',array('pid' => $pid));
        }

        return $this->render('user_image/new.html.twig', [
            'admin_image' => $adminImage,
            'imageList' => $imageList,
            'pid' => $pid,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/ilanlarim/452122{id}/edit", name="admin_image_edit1", methods="GET|POST")
     */
    public function edit1(Request $request, AdminImage $adminImage): Response
    {
        $form = $this->createForm(AdminImageType::class, $adminImage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_image_index1', ['id' => $adminImage->getId()]);
        }

        return $this->render('user_image/edit.html.twig', [
            'admin_image' => $adminImage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/ilanlarim/2312{id}", name="admin_image_delete1", methods="GET")
     */
    public function delete1(Request $request, AdminImage $adminImage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$adminImage->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($adminImage);
            $em->flush();
        }

        return $this->redirectToRoute('admin_image_index1');
    }


    /**
     * @Route("/ilanlarim/3241/{id}341/3423{pid}3", name="admin_image_del1", methods="GET")
     */
    public function del1(Request $request, AdminImage $adminImage,$pid): Response
    {{
        $em = $this->getDoctrine()->getManager();
        $em->remove($adminImage);
        $em->flush();
    }

        return $this->redirectToRoute('admin_image_new1',array('pid' => $pid));
    }


    /**
     * @Route("/profile", name="users_edit1",methods="GET|POST")
     */
    public function edituser(Request $request,UserRepository $userRepository):\Symfony\Component\HttpFoundation\Response
    {

        $us = $this->getUser();
        $form = $this->createForm(UsersType::class, $us);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $onay = $this->getDoctrine()->getManager();
            $onay->persist($us);
            $onay->flush();
            $this->addFlash("Success","Güncelleme Basarılı Bir Sekilde Tamamlandı.");
            return $this->redirectToRoute('users_edit1');

        }



        return $this->render('edituser.html.twig',[

            'user1'=>$us,
            'form' => $form->createView(),

        ]);}






        private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }



}







