<?php

namespace App\Controller;

use App\Entity\Happening;
use App\Form\HappeningType;
use App\Repository\HappeningRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/happening")
 */
class HappeningController extends Controller
{
    /**
     * @Route("/", name="happening_index", methods={"GET"})
     */
    public function index(HappeningRepository $happeningRepository): Response
    {
        return $this->render('happening/index.html.twig', [
            'happenings' => $happeningRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="happening_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $happening = new Happening();
        $form = $this->createForm(HappeningType::class, $happening);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($happening);
            $entityManager->flush();

            return $this->redirectToRoute('happening_index');
        }

        return $this->render('happening/new.html.twig', [
            'happening' => $happening,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="happening_show", methods={"GET"})
     */
    public function show(Happening $happening): Response
    {
        return $this->render('happening/show.html.twig', [
            'happening' => $happening,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="happening_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Happening $happening): Response
    {
        $form = $this->createForm(HappeningType::class, $happening);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('happening_index', [
                'id' => $happening->getId(),
            ]);
        }

        return $this->render('happening/edit.html.twig', [
            'happening' => $happening,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="happening_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Happening $happening): Response
    {
        if ($this->isCsrfTokenValid('delete'.$happening->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($happening);
            $entityManager->flush();
        }

        return $this->redirectToRoute('happening_index');
    }
}
