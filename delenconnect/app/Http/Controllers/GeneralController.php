<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    public function timelineCustomer()
    {
        $customer = '';
        if (Auth::check()) {
            $customer = Auth::user();
            if ($customer) {
                return view('timeline', ['customer' => $customer]);
            }
        }
        return view('timeline', ['customer' => $customer]);

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
