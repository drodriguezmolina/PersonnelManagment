<?php

namespace App\Http\Controllers\Participant;

use App\Repositories\UserRepositoryInterface;

class DeleteParticipantController
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
