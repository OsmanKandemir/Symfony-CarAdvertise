<?php

namespace App\Controller;

use App\Entity\AdminSettings;
use App\Form\AdminSettingsType;
use App\Repository\AdminSettingsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/settings")
 */
class AdminSettingsController extends AbstractController
{
    /**
     * @Route("/", name="admin_settings_index", methods="GET")
     */
    public function index(AdminSettingsRepository $adminSettingsRepository): Response
    {


        $setdata = $adminSettingsRepository->findAll();

        if(!$setdata){
            $adminSetting = new AdminSettings();
            $em = $this->getDoctrine()->getManager();
            $adminSetting ->setTitle("Test");
            $em->persist($adminSetting);
            $em->flush();
            $adminSetting = $adminSettingsRepository->findAll();
            dump($setdata);
            die();

        }
        return $this->redirectToRoute('admin_settings_edit',['id'=> $setdata[0]->getId()]);
        //return $this->render('admin_settings/index.html.twig', ['admin_settings' => $adminSettingsRepository->findAll()]);
    }

    /**
     * @Route("/new", name="admin_settings_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $adminSetting = new AdminSettings();
        $form = $this->createForm(AdminSettingsType::class, $adminSetting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adminSetting);
            $em->flush();

            return $this->redirectToRoute('admin_settings_index');
        }

        return $this->render('admin_settings/new.html.twig', [
            'admin_setting' => $adminSetting,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_settings_show", methods="GET")
     */
    public function show(AdminSettings $adminSetting): Response
    {
        return $this->render('admin_settings/show.html.twig', ['admin_setting' => $adminSetting]);
    }

    /**
     * @Route("/{id}/edit", name="admin_settings_edit", methods="GET|POST")
     */
    public function edit(Request $request, AdminSettings $adminSetting): Response
    {
        $form = $this->createForm(AdminSettingsType::class, $adminSetting);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash("Success","Güncelleme Basarılı.");
            return $this->redirectToRoute('admin_settings_index', ['id' => $adminSetting->getId()]);
        }

        return $this->render('admin_settings/edit.html.twig', [
            'admin_setting' => $adminSetting,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_settings_delete", methods="DELETE")
     */
    public function delete(Request $request, AdminSettings $adminSetting): Response
    {
        if ($this->isCsrfTokenValid('delete'.$adminSetting->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($adminSetting);
            $em->flush();
        }

        return $this->redirectToRoute('admin_settings_index');
    }
}
