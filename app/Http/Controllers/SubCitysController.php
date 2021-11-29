<?php

namespace App\Http\Controllers;
use App\Models\SubCitys;


use Illuminate\Http\Request;
use Illuminate\Http\Response;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class SubCitysController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

         $cator=SubCitys::all();
        // $catogr=catogres::paginate(4);

        // $catogr = catogres::all()->sortByDesc("id");

        dd($cator);
        // return view('dashboard.starter')->with(["catogr"=>$catogr]);

    }

    /**
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
     * @param  \App\Models\catogres  $catogres
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
      
        }


    
    }



