<?php

namespace App\Imports;

use App\Models\Dori;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    public function model(array $row)
    {
        return new Dori([
           'name' => $row[0],
        ]);
    }
}