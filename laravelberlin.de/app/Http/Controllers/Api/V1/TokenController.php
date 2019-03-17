<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class TokenController
{
    /**
     * Generate a token for the logged in user
     *
     * @return \Laravel\Passport\PersonalAccessTokenResult|null
     */
    public function token()
    {
        $user = Auth::user();
        if ($user) {
            return response()->json($user->createToken('admin'), 200);
        } else {
            return response()->json('user not logged in', Response::HTTP_UNAUTHORIZED);
        }
    }
}
