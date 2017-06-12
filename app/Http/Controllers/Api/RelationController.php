<?php

namespace App\Http\Controllers\Api;

use App\Relation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Lang;

class RelationController extends Controller
{
    public function __construct()
    {

    }
    public function getRelationByEmail(Request $request){
        $email = $request->get('email');
        $relation = Relation::where('email', $email)->first();
        if($relation){
            return response()->json($relation, 200);
        }else{
            return response()->json(['message'=> Lang::get('messages.EmailRelationNotExist')], 500);
        }
    }
}
