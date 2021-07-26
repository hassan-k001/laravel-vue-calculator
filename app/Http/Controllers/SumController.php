<?php

namespace App\Http\Controllers;

use App\Http\Requests\SumFormRequest;
use Illuminate\Http\Request;

class SumController extends Controller
{
    public function sum(SumFormRequest $request){
    
        $sum = $request->get('number_1') + $request->get('number_2');

        return response()->json([
            'message' => 'success',
            'status'  => 200,
            'data' => $sum
        ]);
    }
}
