<?php

namespace App\Http\Controllers;

use App\meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.meeting');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = request()->validate([
            'name' => 'required',
            'company' => 'required',
            'email' => 'required',
            'phone' => 'required', 
            'subject'  => 'required',  
            'date' => 'required',

        ]);

       \App\Meeting::create($request->all());
            
           

      

            return redirect('/sendmail');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function show(meeting $meeting)
    {
         $meeting = Meeting::orderBy('created_at', 'desc')->limit(1)->get();

        
        \Mail::to('egidijusstalmokas96@gmail.com')->send(new \App\Mail\mailfor($meeting));
        
        return redirect('/');
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function edit(meeting $meeting)
    {
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, meeting $meeting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function destroy(meeting $meeting)
    {
        //
    }
}
