<?php

namespace App\Controller;

use App\Entity\AdminCategory;
use App\Form\AdminCategoryType;
use App\Repository\AdminCategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/category")
 */
class AdminCategoryController extends AbstractController
{
    /**
     * @Route("/", name="admin_category_index", methods="GET")
     */
    public function index(AdminCategoryRepository $adminCategoryRepository): Response
    {
        return $this->render('admin_category/index.html.twig', ['admin_categories' => $adminCategoryRepository->findAll()]);
    }

    /**
     * @Route("/new", name="admin_category_new", methods="GET|POST")
     */
    public function new(Request $request,AdminCategoryRepository $categoryrepository): Response
    {
        $CategoryList = $categoryrepository->findBy(['parent_id' => 0]);
        $adminCategory = new AdminCategory();
        $form = $this->createForm(AdminCategoryType::class, $adminCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adminCategory);
            $em->flush();

            return $this->redirectToRoute('admin_category_index');
        }

        return $this->render('admin_category/new.html.twig', [
            'admin_category' => $adminCategory,
            'CategoryList' => $CategoryList,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_category_show", methods="GET")
     */
    public function show(AdminCategory $adminCategory): Response
    {
        return $this->render('admin_category/show.html.twig', ['admin_category' => $adminCategory]);
    }

    /**
     * @Route("/{id}/{pid}/edit", name="admin_category_edit", methods="GET|POST")
     */
    public function edit(Request $request,$id,$pid, AdminCategoryRepository $categoryrepository, AdminCategory $adminCategory): Response
    {
        $CategoryList = $categoryrepository->findBy(['parent_id' => 0]);
        $CategoryCat = $categoryrepository->findOneBy(['id' => $pid]);
        $form = $this->createForm(AdminCategoryType::class, $adminCategory);
        $form->handleRequest($request);
        #dump($CategoryList);
        #dump($CategoryCat);
        #die();

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash("Success","Güncelleme Basarılı Bir Sekilde Tamamlandı.");
            return $this->redirectToRoute('admin_category_index', ['id' => $adminCategory->getId()]);
        }

        return $this->render('admin_category/edit.html.twig', [
            'admin_category' => $adminCategory,
            'CategoryList' => $CategoryList,
            'CategoryCat' => $CategoryCat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_category_delete", methods="DELETE")
     */
    public function delete(Request $request, AdminCategory $adminCategory): Response
    {
        if ($this->isCsrfTokenValid('delete'.$adminCategory->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($adminCategory);
            $em->flush();
        }

        return $this->redirectToRoute('admin_category_index');
    }
}
