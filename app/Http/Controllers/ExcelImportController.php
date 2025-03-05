<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Excel;

class ExcelImportController extends Controller
{

      public function index()
      {
          
        return view('admin.excel-import');

      }



    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        // Get the uploaded file
        $file = $request->file('file');

        // Process the Excel file
        Excel::import(new YourImportClass, $file);

        return redirect()->back()->with('success', 'Excel file imported successfully!');
    }
}