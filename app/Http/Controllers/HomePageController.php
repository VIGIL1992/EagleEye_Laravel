<?php

namespace App\Http\Controllers;

use App\Models\home_page;
use App\Http\Requests\Storehome_pageRequest;
use App\Http\Requests\Updatehome_pageRequest;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Storehome_pageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(home_page $home_page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(home_page $home_page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatehome_pageRequest $request, home_page $home_page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(home_page $home_page)
    {
        //
    }
}
