<?php

namespace App\Controller;

use App\Entity\Appointment;
use App\Entity\Chattext;
use App\Form\AppointmentType;
use App\Form\ChattextType;
use DateTime;
use Symfony\Component\HttpFoundation\Request;

class ClientController extends BaseController
{
    public function index(Request $request, $name = null, $id = null)
    {
        $customer = '';
        if ($this->getUser()) {
            $username = $this->getUser();
            $customer = $this->container->get('doctrine')->getManager()->getRepository('App:Customer')->findOneBy(
                array('name' => $username)
            );
        }
        $chattext = new Chattext();
        $form = $this->createForm(ChattextType::class, $chattext);
        $chattext->setCreated(new \DateTime("now"));
        $form->handleRequest($request);

        $appointment = new Appointment();
        $appointmentform = $this->createForm(AppointmentType::class, $appointment);
        $appointmentform->handleRequest($request);

        if ($request->isMethod('POST') && ($form->isSubmitted() || $appointmentform->isSubmitted())) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($chattext);
            $entityManager->flush();
            $entityManager->persist($appointment);
            $entityManager->flush();
            return $this->redirectToRoute('client_timeline');
        }


        return $this->render('default/timeline.html.twig', array(
            'customer' => $customer,
            'form' => $form->createView(),
            'satisfactionform' => $appointmentform->createView()
        ));
    }

    public function overview()
    {
        $manager = '';
        if ($this->getUser()) {
            $manager = $this->getUser();
        }

        $customers = $this->container->get('doctrine')->getManager()->getRepository('App:Customer')->findBy(
            array(
                'accountmanager' => $manager
            )
        );

        return $this->render('default/client_overview.html.twig', array(
                'customers' => $customers,
                'manager' => $manager
            )
        );
    }
}
