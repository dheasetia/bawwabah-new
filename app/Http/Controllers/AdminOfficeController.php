<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;

class AdminOfficeController extends Controller
{

    public function index() {
        $offices = Office::all();

        return view('admin.offices.office_index', compact('offices'));
    }

    public function show($id)
    {
        $office = Office::findOrFail($id);
        return view('admin.offices.office_show', compact('office'));
    }

}
