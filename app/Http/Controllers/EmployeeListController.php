<?php

namespace App\Http\Controllers;

use App\Models\ListEmployee;
use Illuminate\Http\Request;

class EmployeeListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('listEmployee');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addEmployee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListEmployee  $listEmployee
     * @return \Illuminate\Http\Response
     */
    public function show(ListEmployee $listEmployee)
    {
        return view('detailEmployee');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListEmployee  $listEmployee
     * @return \Illuminate\Http\Response
     */
    public function edit(ListEmployee $listEmployee)
    {
        return view('editEmployee');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListEmployee  $listEmployee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListEmployee $listEmployee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListEmployee  $listEmployee
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListEmployee $listEmployee)
    {
        //
    }
}
