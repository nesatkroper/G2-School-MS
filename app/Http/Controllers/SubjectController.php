<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sub = Subject::all();
        return view("subject", compact("sub"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Subject::create([
            "name" => $request->name,
            'code' => "Sub00" . $request->code,
            'price' => $request->price,
        ]);
        return redirect()->back()->with("success", "Successfully created successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->update([
            'name' => $request->name,
            'code' => $request->code,
            'price' => $request->price
        ]);
        return redirect()->back()->with('success', 'Subject updated successfully');
    }

    public function change(string $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->update([
            'status' => '0'
        ]);
        return redirect()->back()->with('success', 'Active Subject successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->update([
            'status' => '1'
        ]);
        return redirect()->back()->with('success', 'Subject deleted successfully');
    }
}
