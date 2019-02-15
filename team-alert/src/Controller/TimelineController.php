<?php

namespace App\Controller;

use App\Entity\Chattext;
use App\Form\ChattextType;
use Symfony\Component\HttpFoundation\Request;

class TimelineController extends BaseController
{
    public function index(Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $manager = $this->getUser();

        $chattext = new Chattext();
        $form = $this->createForm(ChattextType::class, $chattext);
        $form->handleRequest($request);

        if ($request->isMethod('POST') && $form->isSubmitted()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($chattext);
            $entityManager->flush();
            return $this->redirectToRoute('client_timeline');
        }

        $customers = $this->container->get('doctrine')->getManager()->getRepository('App:Customer')->findBy(
            array(
                'account_manager' => $manager,
                'form' => $form->createView()
            )
        );
        $customers = $this->container->get('doctrine')->getManager()->getRepository('App:Customer')->findBy(
            array()
        );

    }
}
