<?php

namespace App\Http\Controllers;

use App\Models\Recycle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RecycleController extends Controller
{
    public function index($day_id=null)
    {
        $data = Recycle::where('day_id',$day_id)->get();
                
        return view('days',['recycles'=>$data]);
        
    }
     

    public function addData(Request $request)
    {
        $recycle = new Recycle;
        $recycle->day_id=$request->day_id;
        $recycle->tipo_raccolta=$request->tipo_raccolta;
        $recycle->inizio_raccolta=$request->inizio_raccolta;
        $recycle->fine_raccolta=$request->fine_raccolta;
        $recycle->save();

        return redirect("/days/$recycle->day_id");
    }

    public function update($id)
    {
        $data = Recycle::find($id);
        return view('update',['data'=>$data]);
    }

    public function updateData(Request $request)
    {
        $data = Recycle::find($request->id);
        $data->day_id=$request->day_id;
        $data->tipo_raccolta=$request->tipo_raccolta;
        $data->inizio_raccolta=$request->inizio_raccolta;
        $data->fine_raccolta=$request->fine_raccolta;
        $data->save();

        
        return redirect("/days/$data->day_id");
        
    }

    public function destroy($id)
    {
        $data = Recycle::find($id);
        $data->delete();
        return redirect("/days/$data->day_id");
    }
}