<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as AuthFacade;
use Symfony\Component\HttpFoundation\Response;

class Auth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (($userId = $request->header('X-User'))) {
            /** @var User $user */
            $user = User::query()->find($userId);
            abort_if($user === null, 401, 'Unknown user');
            AuthFacade::login($user);
        }


        return $next($request);
    }
}
