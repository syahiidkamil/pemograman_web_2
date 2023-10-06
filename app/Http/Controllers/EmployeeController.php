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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|integer|max:9999999999999999',
            'email' => 'required|max:50|email',
            'password' => 'required|max:50',
            'Nama' => 'required|max:25',
            'Nama_belakang' => 'max:50',
            'alamat' => 'nullable',
            'telepon' => 'max:15',
            'avatar' => 'max:55',
        ]);

        $employee = new Employee($validated);
        $employee->save();

        return redirect()->route('employee.index');
    }
}
