<?php

namespace App\Http\Controllers\Participant;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryInterface;

class CreateParticipantController extends Controller
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
