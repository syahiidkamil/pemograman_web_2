<?php

namespace App\Http\Controllers;

use App\Models\Employee; 
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', ['employees' => $employees]);
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'id' => 'integer|max:999999999',
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
        } catch (\Exception $e) {
            // Log the exception message
            \Log::error('Could not store employee: ' . $e->getMessage());
        }

        return redirect()->route('employee.index');
    }

    public function destroy($id)
{
    try {
        $employee = Employee::findOrFail($id);
        $employee->delete();
    } catch (\Exception $e) {
        \Log::error('Could not delete employee: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Could not delete employee.');
    }

    return redirect()->route('employee.index')->with('success', 'Employee deleted successfully.');
}
}
