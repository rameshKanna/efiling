<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;
use Illuminate\Support\Facades\DB;
use Auth;



class PartnerProfileController
 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index() 
    {
        $agent = DB::table('agent')->where('user_id',Auth::user()->id)->first(); 
        //var_dump($tds);
      
        return view('partnerProfile.show', compact('agent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partnerProfile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            
            'deductor_name'=>'required',
            'institute_name'=>'required',
            'tan'=>'required',
            'mobile_number'=>'required',
            'alternate_mobile_number'=>'required',
            'email'=>'required',
            'flat'=>'required',
            'building'=>'required',
            'street'=>'required',
            'area'=>'required',
            'city'=>'required',
            'state'=>'required',
            'pincode'=>'required'

            
        ));
        //echo $user_id = Auth::user()->id;

         // $research = DB::table('agent')->where('user_id', Auth::id())->get();
         // echo $research;

           $agent = new Agent;

        $agent->user_id=Auth::user()->id;
        $agent->deductor_name=$request->deductor_name;
        $agent->institute_name=$request->institute_name;
        $agent->tan=$request->tan;
        $agent->mobile_number=$request->mobile_number;
        $agent->alternate_mobile_number=$request->alternate_mobile_number;
        $agent->email=$request->email;
        $agent->flat=$request->flat;
        $agent->building=$request->building;
        $agent->street=$request->street;
        $agent->area=$request->area;
        $agent->city=$request->city;
        $agent->state=$request->state;
        $agent->pincode=$request->pincode;

        


        $agent->save();
        //Session::flash('success','File Successfully Submitted.');
       
        return redirect()->route('partnerProfile.show', $agent->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agent=Agent::find($id);
        return view('partnerProfile.show')->withAgent($agent);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent=Agent::find($id);
        return view('partnerProfile.edit')->withAgent($agent);
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
        $this->validate($request, array(
            
            'deductor_name'=>'required',
            'institute_name'=>'required',
            'tan'=>'required',
            'mobile_number'=>'required',
            'alternate_mobile_number'=>'required',
            'email'=>'required',
            'flat'=>'required',
            'building'=>'required',
            'street'=>'required',
            'area'=>'required',
            'city'=>'required',
            'state'=>'required',
            'pincode'=>'required'

            
        ));
        //echo $user_id = Auth::user()->id;

         // $research = DB::table('agent')->where('user_id', Auth::id())->get();
         // echo $research;

           $agent = Agent::find($id);

        //$agent->user_id=Auth::user()->id;
        $agent->deductor_name=$request->input('deductor_name');
        $agent->institute_name=$request->input('institute_name');
        $agent->tan=$request->input('tan');
        $agent->mobile_number=$request->input('mobile_number');
        $agent->alternate_mobile_number=$request->input('alternate_mobile_number');
        $agent->email=$request->input('email');
        $agent->flat=$request->input('flat');
        $agent->building=$request->input('building');
        $agent->street=$request->input('street');
        $agent->area=$request->input('area');
        $agent->city=$request->input('city');
        $agent->state=$request->input('state');
        $agent->pincode=$request->input('pincode');

        


        $agent->save();
        //Session::flash('success','File Successfully Submitted.');
       
        return redirect()->route('partnerProfile.show', $agent->id);

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
