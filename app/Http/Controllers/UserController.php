<?php

namespace App\Http\Controllers;

use App\Services\UserService;

class UserController extends Controller
{
    protected $service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserService $service)
    {
       $this->service = $service;
    }

    public function index(int $page)
    {
        return $this->service->index($page);
    }
}
