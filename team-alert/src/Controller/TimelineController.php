<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class TimelineController extends BaseController
{
    public function index(Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $customers = $this->container->get('doctrine')->getManager()->getRepository('App:Customer')->findBy(
            array()
        );


        return $this->render('default/index.html.twig', array()
        );
    }
}
