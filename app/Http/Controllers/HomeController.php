<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller{

   /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
    */
    public function test() {
       

      return response()->json([
          'message' => 'User successfully registered',
          'user' =>auth('sanctum')->user()->id
      ]);
  }
}