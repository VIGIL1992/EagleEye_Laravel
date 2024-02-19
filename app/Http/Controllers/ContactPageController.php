<?php

namespace App\Http\Controllers;

use App\Models\contact_page;
use App\Http\Requests\Storecontact_pageRequest;
use App\Http\Requests\Updatecontact_pageRequest;

class ContactPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $contact = contact_page::first();
        // dd( $contact);
        return view('admin/contact', compact('contact'));
    
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
    public function store(Storecontact_pageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(contact_page $contact_page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact_page $contact_page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatecontact_pageRequest $request, contact_page $contact_page)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact_page $contact_page)
    {
        //
    }
}
