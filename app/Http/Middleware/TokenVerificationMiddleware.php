<?php

namespace App\Http\Middleware;

use App\Helper\JWTToken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;


class TokenVerificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get token from header
        // $token = $request->header('token');//this line use for Postman
        $token = $request->cookie('token');
        // Log::info('Token:', ['token' => $token]);//this line use for laravel log what is going on
        // Verify the token
        $result = JWTToken::VerifyToken($token);
        // Log::info('Token verification result:', ['result' => $result]);//this line use for laravel log what is going on
        
        // Check if the token is unauthorized
        if ($result == "unauthorized"){
            return redirect('/userLogin');
        }
        else{
            // Set email in the request header
            $request->headers->set('email', $result->userEmail);
            $request->headers->set('id', $result->userID);
            // Proceed to the next request handler
            return $next($request);
        }
    }//End Method



} //End Method
