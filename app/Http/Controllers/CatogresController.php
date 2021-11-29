<?php

namespace App\Http\Controllers;

use App\Models\catogres;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class CatogresController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     *
     * @return \Illuminate\Http\Response
     * 
     * 






     
     */








    public function index()
    {
        

        //  $catogr=catogres::with('subCitys')->findOrFail(2);
        // $catogr=catogres::paginate(4);


// dd($catogr);
$date = Carbon::now();
        return view('dashboard.dashboard')->with(["date"=>$date]);

    }
    public function indexShow()
    {
        

        //  $catogr=catogres::with('subCitys')->findOrFail(2);
        // $catogr=catogres::paginate(4);

   $catogr = catogres::all()->sortByDesc("id");

// dd($catogr);
        return view('dashboard.starter')->with(["catogr"=>$catogr]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Response()->view('dashboard.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $image=$request->File('image');

        // $file_extions=$request->image->getClientOrginalExtention();
        // $file_name=time().'.'.$file_extions;
        // $path='images/catogres';
        // $request->image->move($path,$file_name);

        $cato=new catogres();
        $cato->name=$request->name;
        $cato->info=$request->info;
        // $imageName=now().'_Catogres.'. $image->getExtension();
        // $image->move(public_path('images'),$imageName);

        // $cato->$image=$imageName;
        $isSave=$cato->save();
        session()->flash('massege','Catogres Add Succsessfuly');

        return redirect()->back();

    //    return redirect()->route('admin.index');
    



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catogres  $catogres
     * @return \Illuminate\Http\Response
     */
    public function show(catogres $catogres)
    {


}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catogres  $catogres
     * @return \Illuminate\Http\Response
     */
    public function edit($id)


    {

        $cat=catogres::find($id);

        return Response()->view('dashboard.edit',compact('cat'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\catogres  $catogres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate(
            [
                'name'=>'required |string |min:3',
                'info'=>'required |string |min:8',
            ]
                        );
        $isUda=catogres::find($id);
        $isUda->name=$request->name;
        $isUda->info=$request->info;


        if($isUda->active==0){
            $isUda->active=1;
            $isUda->update();

        }else{
            $isUda->active=0;
            $isUda->update();


        }

        $isUda->update();
        session()->flash('massegeUpdate','Catogres Update Succsessfuly');


        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catogres  $catogres
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $isDeleted=catogres::find($id);
        $isDeleted->delete();

        if($isDeleted){
            return response()->json([
                'title'=>'success','text'=>'catogres is deleted','icon'=>'success',
            ],200);

        }
        else{
            return response()->json([
                'title'=>'failed','text'=>'filed catogres  deleted','icon'=>'erorr',
            ],400);
        }


    
    }


    public function change($id)
    {


        $upda=catogres::find($id);
        if($upda->active==0){
            $upda->active=1;
            $upda->update();

        }else{
            $upda->active=0;
            $upda->update();


        }

                return redirect()->back();



    
    }
}
