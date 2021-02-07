<?php

namespace App\Imports;

use App\StaffDetails;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Shared\Date;


class ExcelImport implements ToModel, WithHeadingRow
{
   
    public function model(array $row)
    {
        return new StaffDetails([
            'firstname' => $row['firstname'],
            'lastname' => $row['lastname'],
            'email' => $row['email'],
            'telephone' => $row['telephone'],
        ]);
    }
}
