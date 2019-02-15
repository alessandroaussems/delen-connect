<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class ClientController extends BaseController
{
    public function index(Request $request, $name = null, $id = null)
    {
        $username = '';
        if ($this->getUser()) {
            $username = $this->getUser();
            $customer = $this->container->get('doctrine')->getManager()->getRepository('App:Customer')->findOneBy(
                array('name' => $username)
            );
        }

        return $this->render('default/timeline.html.twig', array(
            'customer' => $customer
            )
        );
    }

    public function overview()
    {
        $manager = $this->getUser();

        $customers = $this->container->get('doctrine')->getManager()->getRepository('App:Customer')->findBy(
//            array(
//                'account_manager' => $manager
//            )
        );
        return $this->render('default/client_overview.html.twig', array('customers' => $customers)
        );
    }
}
