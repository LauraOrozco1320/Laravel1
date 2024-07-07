<?php

namespace App\Http\Controllers;

use App\Models\HomeInstructor;
use Illuminate\Http\Request;

class HomeInstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('store');
    }

    /**
     * Display the specified resource.
     */
    public function show(HomeInstructor $homeInstructor)
    {
        return view('show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomeInstructor $homeInstructor)
    {
        return view('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HomeInstructor $homeInstructor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomeInstructor $homeInstructor)
    {
        //
    }
}
