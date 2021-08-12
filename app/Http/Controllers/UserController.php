<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Symfony\Component\HttpFoundation\Response;

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
        return response()->json($this->service->index($page), Response::HTTP_OK);
    }
}
