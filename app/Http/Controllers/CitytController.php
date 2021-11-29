<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\citys;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CitytController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
            return Response()->view('dashboard.createCity');
    
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                
        $validator=validator($request->all(),[
            'name'=>'required|min:4|max:20',
            'info'=>'required|string|min:10|max:200',
            'status'=>'required|boolean',

        ]);

        if(!$validator->fails()){
            $cityADD= new city();
            $cityADD->name=$request->get('name');
            $cityADD->info=$request->get('info');
            $cityADD->status=$request->get('status');
            $isSaved=$cityADD->Save();
            return response()->json([
                'message'=> $isSaved ? "Saved Succsesfuly" :"Failed to save" 
            ],$isSaved ? Response::HTTP_CREATED: Response::HTTP_BAD_REQUEST);


        }
        else{

            return response()->json(['message'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);

        }
       

  
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
