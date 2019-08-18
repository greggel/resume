<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use File;
use App\Vulnerability;

class ImportController extends Controller
{
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
    public function index()
    {
        Excel::selectSheetsByIndex(0)->load('storage/app/'.'windowsvulns.xlsx', function ($reader) {
            $reader->noHeading();
            $reader->skip(10)->each(function ($row) {
                $record=['name' => $row[7],
                     'device' => $row[5],
                     'recommendation' => $row[12],
                     'FASL_output' => $row[13],
                     'risk' => $row[9],
                     'rating' => $row[10] ];

                Vulnerability::create($record);


            });
        
            echo 'done';
        });
    

    }
}
