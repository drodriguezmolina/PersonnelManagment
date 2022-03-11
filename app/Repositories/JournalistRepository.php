<?php

namespace App\Repositories;

use App\Models\Journalist;

class JournalistRepository extends BaseRepository
{

    public function model(): string
    {
        return Journalist::class;
    }

}
