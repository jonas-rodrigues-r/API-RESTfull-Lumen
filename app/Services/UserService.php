<?php
namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;

class UserService 
{
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $repository)
    {
       $this->repository = $repository;
    }

    public function index(int $page): Collection
    {
        $skip = $page === 1 ? 0 : ($page -1) * 10;

        return $this->repository->index($skip);
    }
    
}