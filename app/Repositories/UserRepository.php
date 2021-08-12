<?php

namespace app\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository
{
    /**
     * @var int $skip
     * @return Collection
     */
    public function index(int $skip): Collection
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