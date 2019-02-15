<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class CategoryController extends BaseController
{
    public function index(Request $request, $category = null)
    {
        if ($request->getUser()) {
            $this->redirectToRoute('client_timeline');
        };
    }
}
