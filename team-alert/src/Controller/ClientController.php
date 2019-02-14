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
        dump($customers);
        return $this->render('default/index.html.twig', array()
        );
    }
}
