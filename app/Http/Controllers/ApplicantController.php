<?php

namespace App\Http\Controllers;

use App\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('applicant.index');
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
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|email|max:191',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'firstName' => 'string|max:191',
            'lastName' => 'required|string|max:191',
            'middleName' => 'string|max:191',
            'extensionName' => 'string|max:191',
            'gender' => 'required|string',
            'birthdate' => 'required|date',
            'address' => 'required|string|max:191',
            'contact1' => 'required|numeric',
            'program_id' => 'required',
            'typeOfStudent' => 'required|string',
            'civilStatus' => 'required|string',
            'birthOrder' => 'required|string',
            'heightFeet' => 'numeric',
            'heightIn' => 'numeric',
            'weight' => 'numeric',
            'religion' => 'required|string',
            'nationality' => 'required|string',
        ]);
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
