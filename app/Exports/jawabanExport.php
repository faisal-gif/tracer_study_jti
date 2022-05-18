<?php

namespace App\Exports;

use App\jawaban;
use Maatwebsite\Excel\Concerns\FromArray;

class jawabanExport implements FromArray
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct(array $invoices)
    {
        $this->invoices = $invoices;
    }   
    public function array(): array
    {
        return $this->invoices;
    }
}
