<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tds;
use Illuminate\Support\Facades\DB;
use Auth;

class TDSController extends Controller
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

        $user_id=Auth::user()->id;
        //return view('tds.datatable');
        //$tds = DB::select('select * from submit_tdss');
        $tds = DB::table('submit_tds')->where('user_id',Auth::user()->id)->get(); 
        //var_dump($tds);
      
        return view('tds.datatable', compact('tds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tds.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file = $request->file('file');
        //$file = $request->file ;
        $file_name=$file->getClientOriginalName();      
        $destinationPath = public_path('/tds_file');
        $file->move($destinationPath,$file->getClientOriginalName());

        $this->validate($request, array(
            
            'quarter'=>'required',
            'entries'=>'required',
            'filing_type'=>'required',
            'mobile_number'=>'required',
            'comments'=>'required',
            

            
        ));



           $tds = new Tds;

        $tds->user_id=Auth::user()->id;
        $tds->quarter=$request->quarter;
        $tds->entries=$request->entries;
        $tds->filing_type=$request->filing_type;
        $tds->mobile_number=$request->mobile_number;

        
        $tds->file_name=$file_name;

        $tds->comments=$request->comments;
                

        


        $tds->save();
       
        return redirect()->route('tds.show', $tds->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tds=Tds::find($id);
        return view('tds.show')->withTds($tds);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $tds=Tds::find($id);
        return view('tds.edit')->withTds($tds);
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
            
            'quarter'=>'required',
            'entries'=>'required',
            'filing_type'=>'required',
            'mobile_number'=>'required',
            'comments'=>'required'
            
        ));
           
           $tds = Tds::find($id);

        //$tds->user_id=Auth::user()->id;
        $tds->quarter=$request->quarter;
        $tds->entries=$request->entries;
        $tds->filing_type=$request->filing_type;
        $tds->mobile_number=$request->mobile_number;
        $tds->comments=$request->comments;

        $tds->save();
       
        return redirect()->route('tds.show', $tds->id);

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
