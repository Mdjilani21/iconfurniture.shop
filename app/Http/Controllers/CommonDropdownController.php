<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisions;
use App\Models\Districts;
use App\Models\Upazilas;
use Illuminate\Support\Facades\DB;

class CommonDropdownController extends Controller
{
    //Division List for Dropdown on product Page 
    public function getDivisionList(Request $request){
        $divisionList = Divisions::all();
        // dd($divisionList);
        return view('frontend.products', compact('divisionList'));
    }

    //District List for Dropdown on product page (Dependent on Division List->Jquery)
    // public function getDistrictList(Request $request){
    //         // if($request->divisionId){
    //         //     $districtList  = Districts::select(['id','bn_name'])->where('division_id ',$request->divisionId)->get();
    
    //         //     if(count($districtList) > 0) {
    //         //         return response([
    //         //             "success" => true,
    //         //             "data" => $districtList,
    
    //         //         ]);
    //         //     } else {
    //         //         return response([
    //         //             "success" => false,
    //         //             "message" => 'Data not found!',
    
    //         //         ]);
    //         //     }
    //         // } else {
    //         //     $districtList  = Districts::select(['id','bn_name'])->get();
    
    //         //     if(count($districtList) > 0) {
    //         //         return response([
    //         //             "success" => true,
    //         //             "data" => $districtList,
    
    //         //         ]);
    //         //     } else {
    //         //         return response([
    //         //             "success" => false,
    //         //             "message" => 'Data not found!',
    
    //         //         ]);
    //         //     }
    //         // }
    //         // return view('$districtList');
    //         // dd('$districtList');
    //         // return view('frontend.products', compact(["data"]));
    //         // return response()->json(["data"]);
            
    //         // $districtList = DB::table('districts')
    //         // ->where('division_id', $request->division_id)
    //         // ->get();
        
    //         // if (count($districtList) > 0) {
    //         //     return response()->json($districtList);
    //         // }
    // }

    /**
     * return districts list.
     *
     * @return json
     */
    public function getDistrictList(Request $request)
    {
        $districts = DB::table('districts')
            ->where('division_id', $request->division_id)
            ->get();
        
        if (count($districts) > 0) {
            return response()->json($districts);
        }
    }

    /**
     * return upazilas list
     *
     * @return json
     */
    public function getUpazilaList(Request $request)
    {
        $upazilas = DB::table('upazilas')
            ->where('district_id', $request->district_id)
            ->get();
        
            // dd($upazilas);
        if (count($upazilas) > 0) {
            return response()->json($upazilas);
        }
    }
}
