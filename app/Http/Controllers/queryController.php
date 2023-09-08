<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class queryController extends Controller
{
    public function index(Request $request){
        $data=DB::table('studentmark')->updateOrInsert([
            "id"=>4],
            [
              "name"=>"aleena",
              "age"=>20  
            ]
        // where("name",'=',"amrutha")->update(
        //     ["name"=>"Anagha"]
 );
        // find(2);
        // where('age','>',21)->exists();
        // where('age','>',21)->value('id');
        dd($data);
//             [
//                 "name"=>"amMU",
//                 "age"=>25,
                
//             ]
            
//             );
    }}
