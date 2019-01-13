<?php

namespace App\Controller;

use App\Entity\AdminMessages;
use App\Form\AdminMessagesType;
use App\Repository\AdminMessagesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/messages")
 */
class AdminMessagesController extends AbstractController
{
    /**
     * @Route("/", name="admin_messages_index", methods="GET")
     */
    public function index(AdminMessagesRepository $adminMessagesRepository): Response
    {
        return $this->render('admin_messages/index.html.twig', ['admin_messages' => $adminMessagesRepository->findAll()]);
    }

    /**
     * @Route("/new", name="admin_messages_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $adminMessage = new AdminMessages();
        $form = $this->createForm(AdminMessagesType::class, $adminMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($adminMessage);
            $em->flush();

            return $this->redirectToRoute('admin_messages_index');
        }

        return $this->render('admin_messages/new.html.twig', [
            'admin_message' => $adminMessage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_messages_show", methods="GET")
     */
    public function show(AdminMessages $adminMessage,$id): Response
    {

        $em = $this->getDoctrine()->getManager();
        $sql = "UPDATE admin_messages set status = 'Okundu' WHERE id=:id";
        $statement = $em->getConnection()->prepare($sql);
        $statement->bindValue('id',$id);
        $statement->execute();


        return $this->render('admin_messages/show.html.twig', ['admin_message' => $adminMessage]);
    }

    /**
     * @Route("/{id}/edit", name="admin_messages_edit", methods="GET|POST")
     */
    public function edit(Request $request, AdminMessages $adminMessage): Response
    {
        $form = $this->createForm(AdminMessagesType::class, $adminMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_messages_index', ['id' => $adminMessage->getId()]);
        }

        return $this->render('admin_messages/edit.html.twig', [
            'admin_message' => $adminMessage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_messages_delete", methods="DELETE")
     */
    public function delete(Request $request, AdminMessages $adminMessage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$adminMessage->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($adminMessage);
            $em->flush();
        }

        return $this->redirectToRoute('admin_messages_index');
    }
}
