<?php

namespace App\Controller;

use App\Entity\AdminDeneme;
use App\Form\AdminDenemeType;
use App\Repository\AdminDenemeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/deneme")
 */
class AdminDenemeController extends AbstractController
{
    /**
     * @Route("/", name="admin_deneme_index", methods="GET")
     */
    public function index(AdminDenemeRepository $adminDenemeRepository): Response
    {
        return $this->render('admin_deneme/index.html.twig', ['admin_denemes' => $adminDenemeRepository->findAll()]);
    }

    /**
     * @Route("/new", name="admin_deneme_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $adminDeneme = new AdminDeneme();
        $form = $this->createForm(AdminDenemeType::class, $adminDeneme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adminDeneme);
            $em->flush();

            return $this->redirectToRoute('admin_deneme_index');
        }

        return $this->render('admin_deneme/new.html.twig', [
            'admin_deneme' => $adminDeneme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_deneme_show", methods="GET")
     */
    public function show(AdminDeneme $adminDeneme): Response
    {
        return $this->render('admin_deneme/show.html.twig', ['admin_deneme' => $adminDeneme]);
    }

    /**
     * @Route("/{id}/edit", name="admin_deneme_edit", methods="GET|POST")
     */
    public function edit(Request $request, AdminDeneme $adminDeneme): Response
    {
        $form = $this->createForm(AdminDenemeType::class, $adminDeneme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_deneme_index', ['id' => $adminDeneme->getId()]);
        }

        return $this->render('admin_deneme/edit.html.twig', [
            'admin_deneme' => $adminDeneme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_deneme_delete", methods="DELETE")
     */
    public function delete(Request $request, AdminDeneme $adminDeneme): Response
    {
        if ($this->isCsrfTokenValid('delete'.$adminDeneme->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($adminDeneme);
            $em->flush();
        }

        return $this->redirectToRoute('admin_deneme_index');
    }
}
