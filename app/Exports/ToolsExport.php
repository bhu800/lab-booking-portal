<?php

namespace App\Exports;

use App\tools;
use Maatwebsite\Excel\Concerns\FromCollection;

class ToolsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return tools::all();
    }
}
