<?php

namespace App\Http\Controllers;
use App\mailm;
use Illuminate\Http\Request;

class MailmController extends Controller
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
        //
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
            'email' => 'required',        
            'message'  => 'required',  
           

        ]);

       \App\Mailm::create($request->all());
            
           

      

            return redirect('/sendm');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function show(mailm $mailm)
    {
         $mailm = Mailm::orderBy('created_at', 'desc')->limit(1)->get();

        
        \Mail::to('egidijusstalmokas96@gmail.com')->send(new \App\Mail\mailm($mailm));
        
        return redirect('/');
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function edit(meeting $mailm)
    {
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, meeting $mailm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function destroy(meeting $mailm)
    {
        //
    }
}
