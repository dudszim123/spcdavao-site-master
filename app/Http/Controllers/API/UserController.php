<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::latest()->paginate(10);
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
            'number' => 'required|digits:9|unique:users',
            'name' => 'required|string|max:191|unique:users',
            'firstName' => 'max:191',
            'lastName' => 'required|string|max:191',
            'middleName' => 'max:191',
            'extensionName' => 'max:191',
            'type' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'email' => 'required|string|email|unique:users',
            'gender' => 'required|string',
            'civilStatus' => 'required|string',
        ]);
        return User::create([
            'number' => $request->number,
            'name' => $request->lastName.', '.$request->lastName.' '.$request->middleName.' '.$request->extensionName,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'middlenmae' => $request->middleName,
            'extensionName' => $request->exntesionName,
            'type' => $request->type,
            'address' => $request->address,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
            'gender' => $request->gender,
            'civilStatus' => $request->civilStatus,
            'contacts' => $request->contacts,
            'RFID' => $request->RFID
        ]);
       return $request->all();
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $this->validate($request,[
            'number' => 'required|digits:9|unique:users,number,'.$user->id,
            'name' => 'required|string|max:191|unique:users,name,'.$user->id,
            'firstName' => 'max:191',
            'lastName' => 'required|string|max:191',
            'middleName' => 'max:191',
            'extensionName' => 'max:191',
            'type' => 'required',
            'password' => 'sometimes|min:6|confirmed',
            'password_confirmation' => 'sometimes|min:6',
            'email' => 'required|string|email|unique:users,email,'.$user->id,
            'gender' => 'required|string',
            'civilStatus' => 'required|string',
        ]);
        $request->password = Hash::make($request['password']);
        $user->update($request->all());
        return ['message' => 'user ID: '.$id];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return ['message' => 'User Deleted.'];
    }
}
