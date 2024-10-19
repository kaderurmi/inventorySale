<?php

namespace App\Http\Controllers;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use App\Mail\OTPMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use illuminate\View\View;

class UserController extends Controller
{
    //
    function LoginPage():View{
        return view('pages.auth.login-page');
    }

    function RegistrationPage():View{
        return view('pages.auth.registration-page');
    }
    function SendOtpPage():View{
        return view('pages.auth.send-otp-page');
    }
    function VerifyOTPPage():View{
        return view('pages.auth.verify-otp-page');
    }

    function ResetPasswordPage():View{
        return view('pages.auth.reset-pass-page');
    }

    function ProfilePage():View{
        return view('pages.dashboard.profile-page');
    }






    function UserRegistration(Request $request){
        try {
            User::create([
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'email' => $request->input('email'),
                'mobile' => $request->input('mobile'),
                'password' => $request->input('password'),
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'User Registration Successfully'
            ],200);

        } catch (Exception $e) {
            return response()->json([
                'status' => 'failed',
               'message' => $e->getMessage()
              // 'message' => 'User Registration Failed'
            ],200);

        }// End Method
    } // End Method

function UserLogin(Request $request){
    $count=User::where('email','=',$request->input('email'))
         ->where('password','=',$request->input('password'))
         ->select('id')->first();
         //->count();

    if($count!==null){
        // User Login-> JWT Token Issue
        $token=JWTToken::CreateToken($request->input('email'),$count->id);
        return response()->json([
            'status' => 'success',
            'message' => 'User Login Successful'
           ],200)->cookie('token',$token,time()+60*24*30);
    }
    else{
        return response()->json([
            'status' => 'failed',
            'message' => 'unauthorized'
        ],200);
    }
}//End Method

function SendOTPCode(Request $request){

    $email=$request->input('email');
    $otp=rand(1000,9999);
    $count=User::where('email','=',$email)->count();

    if($count==1){
        // OTP Email Address
        Mail::to($email)->send(new OTPMail($otp));
        // OTO Code Table Update
        User::where('email','=',$email)->update(['otp'=>$otp]);

        return response()->json([
            'status' => 'success',
            'message' => '4 Digit OTP Code has been send to your email !'
        ],200);
    }
    else{
        return response()->json([
            'status' => 'failed',
            'message' => 'unauthorized'
        ]);
    }
}//end Method

function VerifyOTP(Request $request) {
    try {
        $email = $request->input('email');
        $otp = $request->input('otp');
        
        $count = User::where('email', '=', $email)
                    ->where('otp', '=', $otp)
                    ->count();

        if ($count == 1) {
            User::where('email', '=', $email)->update(['otp' => '0']);
            // Generate password reset token
            $token = JWTToken::CreateTokenForSetPassword($email);

            return response()->json([
                'status' => 'success',
                'message' => 'OTP Verification Successful'
           
            ], 200)->cookie('token',$token,time()+60*24*30);
        } else {
              return response()->json([
                'status' => 'failed',
                'message' => 'Unauthorized'
            ], 200);
        }
    } catch (Exception $e) {
        // Return error details for debugging
        return response()->json([
            'status' => 'error',
            'message' => 'Something went wrong',
            'error' => $e->getMessage() // This will give you more insight into the exception
        ], 500);
    }
}//End Method

function ResetPassword( Request $request)
{
    try{
        $email=$request->header('email');
        Log::info('Email from header:', ['email' => $email]);
        $password=$request->input('password');
        Log::info('Email from header:', ['password' => $password]);
        User::where('email', '=', $email)->update(['password' => $password]);
        return response()->json([
            'status' => 'success',
            'message' => 'Request Successful',
        ], 200);
    }
    catch (Exception $exception){
        return response()->json([
            'status' => 'fail',
          'message' => $exception->getMessage(), // Return the exception message
           // 'message' => 'Something went wrong',
        ],500);
    }
}//end Method

function UserLogout(){
    return redirect('/userLogin')->cookie('token','',-1);
}//end Method



function UserProfile(Request $request){
    $email=$request->header('email');
    $user=User::where('email','=',$email)->first();
    return response()->json([
        'status' => 'success',
        'message' => 'Request Successful',
        'data' => $user
    ],200);
}//End Method
function UpdateProfile(Request $request){
    try{
        $email=$request->header('email');
        $firstName=$request->input('firstName');
        $lastName=$request->input('lastName');
        $mobile=$request->input('mobile');
        $password=$request->input('password');
        User::where('email','=',$email)->update([
            'firstName'=>$firstName,
            'lastName'=>$lastName,
            'mobile'=>$mobile,
            'password'=>$password
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Request Successful',
        ],200);

    }catch (Exception $exception){
        return response()->json([
            'status' => 'fail',
            'message' => 'Something Went Wrong',
        ],200);
    }
}//End Method


}//Main End Method