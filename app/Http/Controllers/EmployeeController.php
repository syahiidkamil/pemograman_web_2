<?php

namespace App\Http\Controllers;

use App\Models\Employee; 
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();  // Assuming Employee is the name of your model
        return view('employees.index', ['employees' => $employees]);
    }
}
