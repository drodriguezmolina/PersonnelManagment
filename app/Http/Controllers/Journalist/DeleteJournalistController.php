<?php

namespace App\Http\Controllers\Journalist;

use App\Repositories\UserRepositoryInterface;

class DeleteJournalistController
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
