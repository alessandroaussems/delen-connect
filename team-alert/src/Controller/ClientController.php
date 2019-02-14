<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class ClientController extends BaseController
{
    public function index(Request $request)
    {
        $customers = $this->container->get('doctrine')->getManager()->getRepository('App:Customer')->findBy(
            array()
        );

        return $this->render('default/timeline.html.twig', array('customers' => $customers)
        );
    }

    public function overview()
    {
        $customers = $this->container->get('doctrine')->getManager()->getRepository('App:Customer')->findBy(
            array()
        );
        return $this->render('default/client_overview.html.twig', array('customers' => $customers)
        );
    }
}
