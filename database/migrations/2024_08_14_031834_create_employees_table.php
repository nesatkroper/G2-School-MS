<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Display the form to create a new employee
    public function create()
    {
        return view('employees.create'); // Ensure this view exists
    }

    // Store new employee data
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'required|string|max:15',
            'department' => 'required|string|max:255',
            'salary' => 'required|numeric',
        ]);

        Employee::create($validatedData);

        return redirect()->route('employees.index')->with('success', 'Employee added successfully.');
    }
}
