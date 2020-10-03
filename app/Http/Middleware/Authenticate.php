<?php

namespace App\Http\Middleware;

use Illuminate\Support\Str;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // Force Json accept type
        if (! Str::contains($request->header('accept'), ['/json', '+json'])) {
            $request->headers->set('accept', 'application/json,' . $request->header('accept'));
        }

    }
}
