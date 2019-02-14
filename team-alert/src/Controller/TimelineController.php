<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class TimelineController extends BaseController
{
    public function index(Request $request)
    {
        $customers = $this->container->get('doctrine')->getManager()->getRepository('App:Customer')->findBy(
            array()
        );
        return $this->render('default/index.html.twig', array()
        );
    }
}
