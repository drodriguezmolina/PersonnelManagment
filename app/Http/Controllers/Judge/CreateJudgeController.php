<?php

namespace App\Http\Controllers\Judge;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryInterface;

class CreateJudgeController extends Controller
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function __invoke($data)
    {
        $this->userRepository->create($data);
    }
}
