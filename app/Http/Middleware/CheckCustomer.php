<?php

namespace App\Http\Middleware;

use Closure;

class CheckCustomer {
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle( $request, Closure $next ) {
        if ( $request->user()->checkUserType() == 'customer' ) {
            return redirect( 'home' );
        }

        return $next( $request );
    }
}
