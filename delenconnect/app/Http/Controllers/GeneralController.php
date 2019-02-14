<?php

namespace App\Http\Controllers;

class GeneralController extends Controller
{
    public function timelineCustomer($customer)
    {
        if ($customer) {
            dump($customer); die;
        }
        return;
    }

    public function portfolioOfClients($accountmanager = null, $customer = null)
    {
        if ($accountmanager) {
            dump($accountmanager);
        }
        if ($customer) {
            dump($customer);
        }
        die;
        return;
    }

    public function timelineForManager()
    {

    }
}
