<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    public function sendEmail(Request $request) {

        $request->validate([
            'name' => 'required|string|min:2|max:255',
            'last_name' => 'required|string|min:2|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|min:8|max:30',
            'service' => 'required|string|min:2|max:255',
            'info' => 'required|string|min:2|max:600'
        ]);

        Mail::send('emails.contact-email', [
            'full_name' => $request->name . ' ' . $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'service' => $request->service,
            'info' => $request->info
        ], function ($mail) use ($request) {
            $mail->from($request->email, $request->name);
            $mail->to('contacto@mindora.com.mx')->subject('Mensaje de contacto');
        });

        return redirect()->back()->with('message-success', 'Gracias por tu mensaje');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
