<?php

namespace App\Controller;

use App\Entity\Satisfaction;
use App\Form\SatisfactionType;
use App\Repository\SatisfactionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/satisfaction")
 */
class SatisfactionController extends Controller
{
    /**
     * @Route("/", name="satisfaction_index", methods={"GET"})
     */
    public function index(SatisfactionRepository $satisfactionRepository): Response
    {
        return $this->render('satisfaction/index.html.twig', [
            'satisfactions' => $satisfactionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="satisfaction_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $satisfaction = new Satisfaction();
        $form = $this->createForm(SatisfactionType::class, $satisfaction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($satisfaction);
            $entityManager->flush();

            return $this->redirectToRoute('satisfaction_index');
        }

        return $this->render('satisfaction/new.html.twig', [
            'satisfaction' => $satisfaction,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="satisfaction_show", methods={"GET"})
     */
    public function show(Satisfaction $satisfaction): Response
    {
        return $this->render('satisfaction/show.html.twig', [
            'satisfaction' => $satisfaction,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="satisfaction_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Satisfaction $satisfaction): Response
    {
        $form = $this->createForm(SatisfactionType::class, $satisfaction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('satisfaction_index', [
                'id' => $satisfaction->getId(),
            ]);
        }

        return $this->render('satisfaction/edit.html.twig', [
            'satisfaction' => $satisfaction,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="satisfaction_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Satisfaction $satisfaction): Response
    {
        if ($this->isCsrfTokenValid('delete'.$satisfaction->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($satisfaction);
            $entityManager->flush();
        }

        return $this->redirectToRoute('satisfaction_index');
    }
}
