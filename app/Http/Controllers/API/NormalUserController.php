<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\NormalUser;
use App\Models\User;

use Illuminate\Http\Request;

class NormalUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum', ['except' => []]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return NormalUser::all();
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
        return NormalUser::create($request->all())->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NormalUser  $normalUser
     * @return \Illuminate\Http\Response
     */
    public function show(NormalUser $normalUser)
    {
        return $normalUser;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NormalUser  $normalUser
     * @return \Illuminate\Http\Response
     */
    public function edit(NormalUser $normalUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NormalUser  $normalUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NormalUser $normalUser , User $User )
    {
        // return $normalUser->update($request->all());
        // return NormalUser::where("email",$request->email)->get() ;
        return NormalUser::where("email",$request->user()->email)->update(["parentName"=>$request->parentName,
                                                                            "address" =>$request->address ,
                                                                            "balance"=>$request->balance ,
                                                                            "childAge"=>$request->childAge ,
                                                                            "childGender"=>$request->childGender ,
                                                                            "childImage"=>$request->childImage ,
                                                                            "childName"=>$request->childName ,
                                                                            "email"=>$request->email ,
                                                                            "parentName"=>$request->parentName ,
                                                                            "password"=>$request->password ,
                                                                            "phone"=>$request->phone
                                                                                                         ]) ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NormalUser  $normalUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(NormalUser $normalUser)
    {
        return $normalUser->delete();
    }
}


