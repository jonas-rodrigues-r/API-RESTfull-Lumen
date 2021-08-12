<?php

namespace app\Repositories;

use App\Models\User;

class UserRepository
{
    public function index(int $skip)
    {
        return User::skip($skip)->take(10)->get();
    }

    public function show()
    {

    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {
        
    }
}