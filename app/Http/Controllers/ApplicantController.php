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

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      // /home/spc-alvin/spcdavao-site-master/public/applicantsRequirement
      if($request->applicantType == 'Masters/Doctoral'){
         // dd($request->file('shortEssay'));
         // if($request->tor){
         //    $torImage = 'tor_'.time().'.' . explode('/', explode(':', substr($request->tor, 0, strpos($request->tor, ';')))[1])[1];
         //    \Image::make($request->tor)->save(public_path('applicantsRequirement/img/').$torImage);
         //    $request->merge(['tor' => $torImage]);
         // }   
        
         // $files = $request->file('shortEssay');
         // $destinationPath = public_path('applicantsRequirement/docs/');
         // $shortEssayfile = date('YmdHis'). "." . $files->getClientOriginalExtension();
         // $files->move($destinationPath, $shortEssayfile);
         // if($request->thesisDescription){
         //    $thesisDescriptionImage = 'thesisDescription_'.time().'.' . explode('/', explode(':', substr($request->thesisDescription, 0, strpos($request->thesisDescription, ';')))[1])[1];
         //    \Image::make($request->thesisDescription)->save(public_path('img/applicants_requirements/').$thesisDescriptionImage);
         //    $request->merge(['thesisDescription' => $thesisDescriptionImage]);
         // }   
         // if($request->honorableDismissal){
         //    $honorableDismissalImage = 'honorableDismissal_'.time().'.' . explode('/', explode(':', substr($request->honorableDismissal, 0, strpos($request->honorableDismissal, ';')))[1])[1];
         //    \Image::make($request->honorableDismissal)->save(public_path('img/applicants_requirements/').$honorableDismissalImage);
         //    $request->merge(['honorableDismissal' => $honorableDismissalImage]);
         // }   
         // if($request->birthCertificate){
         //    $birthCertificateImage = 'birthCertificate_'.time().'.' . explode('/', explode(':', substr($request->birthCertificate, 0, strpos($request->birthCertificate, ';')))[1])[1];
         //    \Image::make($request->birthCertificate)->save(public_path('img/applicants_requirements/').$birthCertificateImage);
         //    $request->merge(['birthCertificate' => $birthCertificateImage]);
         // }  
         // if($request->marriedContract){
         //    $marriedContractImage = 'honorableDismissal_'.time().'.' . explode('/', explode(':', substr($request->marriedContract, 0, strpos($request->marriedContract, ';')))[1])[1];
         //    \Image::make($request->marriedContract)->save(public_path('img/applicants_requirements/').$marriedContractImage);
         //    $request->merge(['marriedContract' => $marriedContractImage]);
         // }  
         // if($request->paymentReceipt){
         //    $paymentReceiptImage = 'paymentReceipt_'.time().'.' . explode('/', explode(':', substr($request->paymentReceipt, 0, strpos($request->paymentReceipt, ';')))[1])[1];
         //    \Image::make($request->paymentReceipt)->save(public_path('img/applicants_requirements/').$paymentReceiptImage);
         //    $request->merge(['paymentReceipt' => $paymentReceiptImage]);
         // }  
         
         $this->validate($request,[
            'firstName' => 'required|string|max:191',
            'middleName' => 'max:191',
            'lastName' => 'max:191',
            'email' => 'required|string|email|max:191|unique:applicants',
            'password' => 'sometimes|min:6|confirmed|required_with:password_confirmed',
            // 'confirm_password' => 'min:6',
            'contact1' => 'required|max:64',
            'program_id' => 'required|numeric',
            'gender' => 'required|string',
            // 'prcLicense' => 'required|image|mimes:jpeg,jpg,png,gif|max:5000',
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
      // dd($request->prcLicense);
      $this->validate($request,[
         // 'shortEssay.*' => 'required|file|max:1000|mimes:pdf,docx,doc',
         // 'thesisDescription' => 'required|file|max:1000|mimes:pdf,docx,doc',
         'prcLicense' => 'required|mimes:jpeg,jpg,png|max:1000',
      ]);

      if($request->prcLicense){
         // $prcLicenseImage = 'prcLicense_'.time().'.' . explode('/', explode(':', substr($request->prcLicense, 0, strpos($request->prcLicense, ';')))[1])[1];
         // \Image::make($request->prcLicense)->save(public_path('applicantsRequirement/img/').$prcLicenseImage);
         // $request->merge(['prcLicense' => $prcLicenseImage]);
         $files = $request->file('prcLicense');
         $destinationPath = public_path('applicantsRequirement/img/');
         $prcLicensefile = date('YmdHis'). "." . $files->getClientOriginalExtension();
         $files->move($destinationPath, $prcLicensefile);
      }  
     

      // $files = $request->file('shortEssay');
      // $destinationPath = public_path('applicantsRequirement/docs/');
      // $shortEssayfile = date('YmdHis'). "." . $files->getClientOriginalExtension();
      // $files->move($destinationPath, $shortEssayfile);


      // $files = $request->file('thesisDescription');
      // $destinationPath = public_path('applicantsRequirement/docs/');
      // $thesisDescriptionfile = date('YmdHis'). "." . $files->getClientOriginalExtension();
      // $files->move($destinationPath, $thesisDescriptionfile);

      $applicant = Applicant::findOrFail($request->id);

      $applicant->prcLicense = $prcLicensefile;
      //$applicant->shortEssay = $destinationPath;
      //$applicant->thesisDescription = $thesisDescriptionfile;

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
