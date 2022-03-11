<?php

namespace App\Http\Controllers\Judge;

use App\Repositories\UserRepositoryInterface;

class DeleteJudgeController
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function __invoke($id)
    {
        $this->userRepository->delete($id);
    }
}
