<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class ClientController extends BaseController
{
    public function index(Request $request, $category = null)
    {
        return $this->render('default/index.html.twig', array()
        );
    }
}