<?php

namespace App\Http\Controllers;

use App\Models\Mailing;
use Illuminate\Http\Request;

class MailingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mailings=Mailing::all();
        return view("dashboard.mailing.mailing",compact('mailings'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
       // Mailing::create($request->all());
        return view('page1.page1');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mailing=Mailing::find($id);
        return view("dashboard.mailing.affichmail",compact('mailing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mailing $mailing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mailing $mailing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mailing $mailing)
    {
        //
    }
}
