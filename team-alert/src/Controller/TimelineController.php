<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Entity\Chattext;
use App\Form\AppointmentType;
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

        $appointment = new Appointment();
        $appointmentform = $this->createForm(AppointmentType::class, $appointment);
        $appointmentform->handleRequest($request);

        if ($request->isMethod('POST') && $form->isSubmitted()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($chattext);
            $entityManager->flush();
            $entityManager->persist($appointment);
            $entityManager->flush();
            return $this->redirectToRoute('client_timeline');
        }

        $customers = $this->container->get('doctrine')->getManager()->getRepository('App:Customer')->findBy(
            array(
                'account_manager' => $manager,
                'form' => $form->createView(),
                'satisfactionform' => $appointmentform->createView()
            )
        );
        $customers = $this->container->get('doctrine')->getManager()->getRepository('App:Customer')->findBy(
            array()
        );

    }
}
