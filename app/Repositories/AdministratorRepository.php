<?php

namespace App\Repositories;

use App\Models\Administrator;

class AdministratorRepository extends BaseRepository
{

    public function model(): string
    {
        return Administrator::class;
    }
    
}
