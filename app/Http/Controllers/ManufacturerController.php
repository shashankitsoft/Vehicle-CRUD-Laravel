<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Manufacturers;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        /*if(empty($request->search) && empty($request->page)){
            $mans = Manufacturers::all();
        } 
        else{ */
            if(!empty($request->search)){
                    $keyword = $request->search;
                    $query =  Manufacturers::where('name', 'like', '%' . $keyword. '%');
                
            }else{
                $query =  Manufacturers::where('id','!=',0);
            }
            
           
                $page = $request->has('page') ? $request->get('page') : 1;
                $limit = $request->has('limit') ? $request->get('limit') : 10;

                $query = $query->limit($limit)->offset(($page - 1) * $limit);
               
            
          

            $mans = $query->get();
      //  }

     

      
        
         return response()->json($mans);
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
        $request->validate([
            'name' => 'required|string',            
        ]);
        $manufacturer = new Manufacturers([
            'name' => $request->name            
        ]);
        $manufacturer->save();
        return response()->json([
            'message' => 'Successfully created manufacturer!'
        ], 201);
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
        $man = Manufacturers::find($id);
       // dd($man);
        return response()->json($man);
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
        $request->validate([
            'name' => 'required|string',            
        ]);
        
        Manufacturers::where('id', $id)->update(['name' =>$request->name]);            
        
        return response()->json([
            'message' => 'Successfully updated manufacturer!'
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Manufacturers::find($id)->delete();
        return response()->json([
            'message' => 'Successfully deleted manufacturer!'
        ], 201);
    }
}
