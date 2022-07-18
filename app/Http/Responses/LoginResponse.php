<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as ContractsLoginResponse;

class LoginResponse implements ContractsLoginResponse
{

    public function toResponse($request)
    {

        if(auth()->user()->isAdmin())
        {
            return redirect()->route('admin.index');
        }
        return redirect()->intended(config('fortify.home'));
    }

}
