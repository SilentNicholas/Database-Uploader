<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;

class UploadController extends Controller
{
    public function exportXlsx()
    {
        return Excel::download((new ProductExport), 'products.xlsx');
    }

    public function exportXls()
    {
        return Excel::download((new ProductExport), 'products.xls');
    }
}
