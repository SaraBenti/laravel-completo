<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Hotel;
class HotelController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
            'classification' => ['required', 'integer','min:1','max:5'],
        
            
        ]);
        if($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }
        $hotel= new Hotel();
        $hotel->description=$request->input('name');
        $hotel->stars=$request->input('classification');
       $hotel->save();
       return response()->json($hotel,201);

    }
    public function delete(Request $request, $id) {
        
        $hotel=Hotel::where('id','=',$id)->firstOrFail();
        $hotel->delete();
        return response()->json(null,204);
    }
    public function read(Request $request, $id) {
        
        $hotel= Hotel::where('id','=',$id)->firstOrFail();
        return response()->json($hotel);

    }
    public function readAll(Request $request) {
    //Operazione di SELECT su DB
        
        $hotels= Hotel::with('reviews')->get();
        
        return response()->json($hotels,200);

    }
    public function update(Request $request, $id) {
      
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
            'classification' => ['required', 'integer','min:1','max:5'],
        
        ]);

        if($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 400);
        }

      
        $hotel= Hotel::where('id','=',$id)->firstOrFail();
     

        $hotel->name=$request->input('name');
        $hotel->classification=$request->input('classification');
        
      
        $hotel->save();

        return response()->json($hotel,200);

    }
}
