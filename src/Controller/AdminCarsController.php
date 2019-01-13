<?php

namespace App\Controller;

use App\Entity\AdminCars;
use App\Form\AdminCarsType;
use App\Repository\AdminCarsRepository;
use App\Repository\AdminCategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/cars")
 */
class AdminCarsController extends AbstractController
{
    /**
     * @Route("/", name="admin_cars_index", methods="GET")
     */
    public function index(AdminCarsRepository $adminCarsRepository): Response
    {
        return $this->render('admin_cars/index.html.twig', ['admin_cars' => $adminCarsRepository->findAll()]);
    }

    /**
     * @Route("/new", name="admin_cars_new", methods="GET|POST")
     */
    public function new(Request $request,AdminCategoryRepository $categoryRepository): Response
    {   $catlist = $categoryRepository->findAll();
        $catname = $categoryRepository->findBy(['id' => 0]);
        $adminCar = new AdminCars();
        $form = $this->createForm(AdminCarsType::class, $adminCar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adminCar);
            $em->flush();

            return $this->redirectToRoute('admin_cars_index');
        }

        return $this->render('admin_cars/new.html.twig', [
            'admin_car' => $adminCar,
            'catlist' => $catlist,
            'catname' => $catname,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_cars_show", methods="GET")
     */
    public function show(AdminCars $adminCar): Response
    {
        return $this->render('admin_cars/show.html.twig', ['admin_car' => $adminCar]);
    }

    /**
     * @Route("/{id}/edit", name="admin_cars_edit", methods="GET|POST")
     */
    public function edit(Request $request, $id,AdminCars $adminCar,AdminCategoryRepository $categoryRepository): Response
    {
        $productid = $adminCar->getUserId();

        $catlist = $categoryRepository->findAll();
        $catname = $categoryRepository->findBy(['id'=> $adminCar->getCategoryId()]);
        $form = $this->createForm(AdminCarsType::class, $adminCar);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if ($form->isSubmitted()) {
            $this->getDoctrine()->getManager()->flush();
            $pro = $adminCar->getId();
            $sql = 'UPDATE admin_cars set user_id = :productid WHERE id=:pro';
            $statement = $em->getConnection()->prepare($sql);
            $statement->bindParam(':productid',$productid);
            $statement->bindParam(':pro',$pro);
            $statement->execute();
            $this->addFlash("Success","Güncelleme Basarılı Bir Sekilde Tamamlandı.");
            return $this->redirectToRoute('admin_cars_index', ['id' => $adminCar->getId()]);

        }

        return $this->render('admin_cars/edit.html.twig', [
            'admin_car' => $adminCar,
            'catlist' => $catlist,
            'catname' => $catname,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_cars_delete", methods="DELETE")
     */
    public function delete(Request $request, AdminCars $adminCar): Response
    {
        if ($this->isCsrfTokenValid('delete'.$adminCar->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($adminCar);
            $em->flush();
        }

        return $this->redirectToRoute('admin_cars_index');
    }
    /**
     * @Route("/{id}/iedit", name="admin_cars_iedit", methods="GET|POST")
     */
    public function iedit(Request $request,$id, AdminCars $adminCar): Response
    {
        $form = $this->createForm(AdminCarsType::class, $adminCar);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_cars_index', ['id' => $adminCar->getId()]);
        }

        return $this->render('admin_cars/image_edit.html.twig', [
            'admin_car' => $adminCar,
            'id' => $id,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/iupdate", name="admin_cars_iupdate1", methods="POST")
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

        return $this->redirectToRoute('admin_cars_iedit', ['id' => $adminCar->getId()]);

    }

    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }





}






