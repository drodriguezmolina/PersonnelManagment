<?php

namespace App\Repositories;

use App\Models\Judge;

class JudgeRepository extends BaseRepository
{

    public function model(): string
    {
        return Judge::class;
    }

}
