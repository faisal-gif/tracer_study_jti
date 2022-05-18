<?php

namespace App\Imports;

use App\dataAlumni;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;


class dataAlumniImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            dataAlumni::create([
                'nim' => (string)$row[0],
                'nama' => $row[1],
                'tahunLulus' => (string) $row[2],
            ]);
        }
    }
}
