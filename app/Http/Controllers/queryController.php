<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class queryController extends Controller
{
    public function index(Request $request){
        $data=DB::table('studentmark')->where('age','>',21)->count();
        // where('age','>',21)->value('id');
        dd($data);
//             [
//                 "name"=>"amMU",
//                 "age"=>25,
                
//             ]
            
//             );
     } }
