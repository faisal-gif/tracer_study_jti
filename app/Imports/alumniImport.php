<?php

namespace App\Imports;

use App\biodata;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class alumniImport implements ToCollection
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
            biodata::create([
                'nim' => (string)$row[0],
                'nama' => $row[1],
                'tahunLulus' => (string) $row[2],
            ]);
        }
    }
}
