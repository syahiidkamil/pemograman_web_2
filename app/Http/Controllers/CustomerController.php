<?php

namespace App\Http\Controllers;

use App\Models\Customer; 
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', ['customers' => $customers]);
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
            $customer = new Customer($validated);
            $customer->save();
        } catch (\Exception $e) {
            // Log the exception message
            \Log::error('Could not store customer: ' . $e->getMessage());
        }

        return redirect()->route('customer.index');
    }

    public function destroy($id)
{
    try {
        $customer = Customer::findOrFail($id);
        $customer->delete();
    } catch (\Exception $e) {
        \Log::error('Could not delete customer: ' . $e->getMessage());
        return redirect()->back()->with('error', 'Could not delete customer.');
    }

    return redirect()->route('customer.index')->with('success', 'Customer deleted successfully.');
}
}
