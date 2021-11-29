<?php

namespace App\Http\Controllers;

use App\Models\catogres;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=catogres::where('active',1)->get();

        return Response()->view('front.front',["data"=>$data]);

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
        // $datacat=catogres::find($id);
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
        // $upda=catogres::find($id);
        // if($upda->active==0){
        //     $upda->active=1;
        //     $upda->update();

        // }else{
        //     $upda->active=0;
        //     $upda->update();


        // }



    }


    // public function changStatus($id)
    // {
    //     $upda=catogres::find($id);
    //     if($upda->active==0){
    //         $upda->active=1;
    //         $upda->update();

    //     }else{
    //         $upda->active=0;
    //         $upda->update();


    //     }

    

    // }


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
