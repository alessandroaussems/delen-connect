<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * @var string
     */
    protected $redirectTo = '/my-timeline';

    /**
     * @return void
     */
    public function __construct()
    {
        $this
            ->middleware('guest')
            ->except('logout')
        ;
    }
}
