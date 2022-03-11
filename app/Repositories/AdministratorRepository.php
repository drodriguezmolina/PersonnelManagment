<?php

namespace App\Repositories;

use App\Models\Administrator;

class AdministratorRepository extends BaseRepository implements UserRepositoryInterface
{

    public function model(): string
    {
        return Administrator::class;
    }

    public function create($data)
    {
        // TODO: Implement create() method.
    }

    public function update($data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
