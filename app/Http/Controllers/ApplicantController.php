<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Applicant;

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
   public function thankYou()
   {
      return view('applicant.thank');
   }
   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      if($request->applicantType == 'Masters/Doctoral'){
         $this->validate($request,[
            'firstName' => 'required|string|max:191',
            'middleName' => 'max:191',
            'lastName' => 'max:191',
            'email' => 'required|string|email|max:191|unique:applicants',
            'password' => 'sometimes|min:6|confirmed|required_with:password_confirmed',
            'contact1' => 'required|max:64',
            'program_id' => 'required|numeric',
            'gender' => 'required|string',
         ]);
         $applicant = Applicant::create([
            'name' => $request->lastName.', '.$request->firstName.' '.$request->extensionName.' '.$request->middleName,
            'email' => $request->email,
            'password' => $request->password,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'middleName' => $request->middleName,
            'extensionName' => $request->extensionName,
            'contact1' => $request->contact1,
            'program_id' => $request->program_id,
            'gender' => $request->gender,
            'applicantType' => $request->applicantType,
            'typeOfStudent' => 'New',
         ]);   
      }
      return response()->json($applicant);
   }

   
   public function shortEssayStore(Request $request)
   {
      $this->validate($request,[
         'tor' => 'required|image|mimes:jpeg,jpg,png|max:1000',
         'prcLicense' => 'required|image|mimes:jpeg,jpg,png|max:1000',
         'shortEssay.*' => 'required|file|max:1000|mimes:pdf,docx,doc',
         'thesisDescription.*' => 'required|file|max:1000|mimes:pdf,docx,doc',
         'honorableDismissal' => 'required|image|mimes:jpeg,jpg,png|max:1000',
         'birthCertificate' => 'required|image|mimes:jpeg,jpg,png|max:1000',
      ]);

      if($request->tor){
         $filestor = $request->file('tor');
         $dtorDestinationPath = public_path('applicantsRequirement/img/');
         $torfile = 'tor_'.date('YmdHis'). "." . $filestor->getClientOriginalExtension();
         $filestor->move($dtorDestinationPath, $torfile);
      }  
      if($request->prcLicense){
         $filesprcLicense = $request->file('prcLicense');
         $destinationPath = public_path('applicantsRequirement/img/');
         $prcLicensefile = 'prcLicense_'.date('YmdHis'). "." . $filesprcLicense->getClientOriginalExtension();
         $filesprcLicense->move($destinationPath, $prcLicensefile);
      }  
      if ($request->shortEssay){
         $filesshortEssay = $request->file('shortEssay');
         $destinationPath = public_path('applicantsRequirement/docs/');
         $shortEssayfile = 'shortEssay_'.date('YmdHis'). "." . $filesshortEssay->getClientOriginalExtension();
         $filesshortEssay->move($destinationPath, $shortEssayfile);
      }
      if ($request->thesisDescription){
         $filesthesisDescription = $request->file('thesisDescription');
         $thesisDescriptionDestinationPath = public_path('applicantsRequirement/docs/');
         $thesisDescriptionfile = 'thesisDescription_'.date('YmdHis'). "." . $filesthesisDescription->getClientOriginalExtension();
         $filesthesisDescription->move($thesisDescriptionDestinationPath, $thesisDescriptionfile);
      }
      if($request->honorableDismissal){
         $fileshonorableDismissal = $request->file('honorableDismissal');
         $honorableDismissalDestinationPath = public_path('applicantsRequirement/img/');
         $honorableDismissalfile = 'honorableDismissal_'.date('YmdHis'). "." . $fileshonorableDismissal->getClientOriginalExtension();
         $fileshonorableDismissal->move($honorableDismissalDestinationPath, $honorableDismissalfile);
      }  
      if($request->birthCertificate){
         $filesbirthCertificate = $request->file('birthCertificate');
         $birthCertificateDestinationPath = public_path('applicantsRequirement/img/');
         $birthCertificatefile = 'birthCertificate_'.date('YmdHis'). "." . $filesbirthCertificate->getClientOriginalExtension();
         $filesbirthCertificate->move($birthCertificateDestinationPath, $birthCertificatefile);
      }  
      if($request->marriedContract){
         $filesmarriedContract = $request->file('marriedContract');
         $marriedContractDestinationPath = public_path('applicantsRequirement/img/');
         $marriedContractfile = 'marriedContract_'.date('YmdHis'). "." . $filesmarriedContract->getClientOriginalExtension();
         $filesmarriedContract->move($marriedContractDestinationPath, $marriedContractfile);
      }  

      $applicant = Applicant::findOrFail($request->id);
      $applicant->tor = $torfile;
      $applicant->prcLicense = $prcLicensefile;
      $applicant->shortEssay = $shortEssayfile;
      $applicant->thesisDescription = $thesisDescriptionfile;
      $applicant->honorableDismissal = $honorableDismissalfile;
      $applicant->birthCertificate = $birthCertificatefile;
      $applicant->marriedContract = $marriedContractfile == '' ? '' : $marriedContractfile;
      $applicant->save();
      return ['message' => 'Success Data'];
   }
   public function thesisDescriptionStore(Request $request)
   {
      $validator = Validator::make($request->all(), [
         'thesisDescription.*' => 'required|file|max:5000|mimes:pdf,docx,doc'
      ]);
    
      $files = $request->file('thesisDescription');
      $destinationPath = public_path('applicantsRequirement/docs/');
      $thesisDescriptionfile = date('YmdHis'). "." . $files->getClientOriginalExtension();
      $files->move($destinationPath, $thesisDescriptionfile);
      return ['data_name' => $thesisDescriptionfile];
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
