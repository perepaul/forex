<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;
use Laravel\Fortify\Contracts\LogoutResponse as ContractsLogoutResponse;

class LogoutResponse implements ContractsLogoutResponse
{
    public function toResponse($request)
    {
        return $request->wantsJson()
                ? new JsonResponse('',204)
                : redirect('/admin/login');
    }
}
