<?php

namespace App\Http\Controllers\Api\Traits;

use Illuminate\Http\Request;

trait  ValidateRequest {

    public function validateRequest(Request $request){
        $this->validate($request, $this->rules);
    }
}