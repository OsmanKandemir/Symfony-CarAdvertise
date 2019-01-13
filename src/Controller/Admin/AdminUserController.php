<?php

namespace App\Controller\Admin;
use App\Entity\User;
use App\Form\UsersType;
use App\Security\UserAuthenticator;
use http\Env\Response;
use function PHPSTORM_META\type;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class AdminUserController extends AbstractController
{
    /**
     * @Route("/admin/users", name="users")
     */
    public function index()
    {

        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        return $this->render('/admin/users/index.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * @Route("/admin/users/new", name="users_new",methods="GET|POST")
     */
    public function new(Request $request):\Symfony\Component\HttpFoundation\Response
    {
        $user = new User();
        $form = $this->createForm(UsersType::class, $user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $onay = $this->getDoctrine()->getManager();
            $onay->persist($user);
            $onay->flush();
            return $this->redirectToRoute('users');

        }

        // 2) handle the submit (will only happen on POST)

        return $this->render('/admin/users/create_form.html.twig', [
                'form' => $form->createView(),

        ]);


    }

    /**
     * @Route("/admin/users/edit/{id}/", name="users_edit",methods="GET|POST")
     */
    public function edit(Request $request,User $users):\Symfony\Component\HttpFoundation\Response
    {
        $form = $this->createForm(UsersType::class, $users);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $onay = $this->getDoctrine()->getManager();
            $onay->persist($users);
            $onay->flush();
            $this->addFlash("Success","Güncelleme Basarılı Bir Sekilde Tamamlandı.");
            return $this->redirectToRoute('users');

        }



        return $this->render('/admin/users/edit_form.html.twig',[

            'user1'=>$users,
            'form' => $form->createView(),

            ]);



    }

    /**
     * @Route("/admin/users/delete/{id}/", name="users_delete")
     */
    public function delete(User $users)
    {
        $sil = $this->getDoctrine()->getManager();
        $sil->remove($users);
        $sil->flush();
        return $this->redirectToRoute('users');




    }




}


