<?php

namespace App\Controller;

use App\Entity\Chattext;
use App\Form\ChattextType;
use App\Repository\ChattextRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/chattext")
 */
class ChattextController extends Controller
{
    /**
     * @Route("/", name="chattext_index", methods={"GET"})
     */
    public function index(ChattextRepository $chattextRepository): Response
    {
        return $this->render('chattext/index.html.twig', [
            'chattexts' => $chattextRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="chattext_new", methods={"GET","POST"})
     */
    public function new(Request $request)
    {
        $chattext = new Chattext();
        $form = $this->createForm(ChattextType::class, $chattext);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($chattext);
            $entityManager->flush();
            return $this->redirectToRoute('client_timeline');
        }

        return $this->render('chattext/new.html.twig', [
            'chattext' => $chattext,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="chattext_show", methods={"GET"})
     */
    public function show(Chattext $chattext): Response
    {
        $this->redirectToRoute('client_timeline');
    }

    /**
     * @Route("/{id}/edit", name="chattext_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Chattext $chattext): Response
    {
        $form = $this->createForm(ChattextType::class, $chattext);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chattext_index', [
                'id' => $chattext->getId(),
            ]);
        }

        return $this->render('chattext/edit.html.twig', [
            'chattext' => $chattext,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="chattext_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Chattext $chattext): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chattext->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($chattext);
            $entityManager->flush();
        }

        return $this->redirectToRoute('chattext_index');
    }
}
