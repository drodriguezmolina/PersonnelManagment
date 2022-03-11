<?php

namespace App\Repositories;

use App\Models\Participant;

class ParticipantRepository extends BaseRepository
{

    public function model(): string
    {
        return Participant::class;
    }

}
