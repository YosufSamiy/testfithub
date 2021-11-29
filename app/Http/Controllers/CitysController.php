<?php

namespace App\Http\Controllers;

use App\Models\citys;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class CitysController extends Controller
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
        
        
        $validator=validator($request->all(),[
            'name'=>'required|string|min:4|max:20',
            'info'=>'required|string|min:10|max:200',
            'name'=>'required|boolean',

        ]);

        if(!$validator->fails()){

        }
        else{

            return response()->json(['maessge'=>$validator->getMessageBag()->first()],Response::HTTP_BAD_REQUEST);

        }
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\citys  $citys
     * @return \Illuminate\Http\Response
     */
    public function show(citys $citys)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\citys  $citys
     * @return \Illuminate\Http\Response
     */
    public function edit(citys $citys)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\citys  $citys
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, citys $citys)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\citys  $citys
     * @return \Illuminate\Http\Response
     */
    public function destroy(citys $citys)
    {
        //
    }
}
