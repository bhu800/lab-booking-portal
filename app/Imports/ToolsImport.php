<?php

namespace App\Imports;

use App\tools;
use Maatwebsite\Excel\Concerns\ToModel;

class ToolsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new tools([
            'tl_name'     => $row[0],
            'tl_desc'     => $row[1],
            'color'     => $row[2], 
        ]);
    }
}
