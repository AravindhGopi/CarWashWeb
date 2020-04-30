<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public $successStatus = 200;
    /** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function login()
    {
        if (Auth::attempt(['mobile' => request('mobile'), 'password' => request('password')])) {
            $user = Auth::user();
            // return response()->json(['success' => $success], $this->successStatus);
            $response['token'] =  $user->createToken('MyApp')->accessToken;
            $response['name'] =  $user->mobile;
            $response['success'] = true;
            return $response;
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    public function updateUserData(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'requied|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

    }
    /** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function register(Request $request)
    {
        // dd($request->all());
        // Log::debug($request->all());
        $validator = Validator::make($request->all(), [
            'mobile' => 'required',
            'otp' => 'required'
            // 'password' => 'required',
            // 'confirm_password' => 'required|same:password',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $input = $request->all();
        $input['user_type'] = "user";
        // $input['password'] = bcrypt($input['password']);
        $user = new User();
        $user->mobile= $request->mobile;
        $user->otp = $request->otp;
        $user->save();

        
        // $response['status'] = 

        return true;
    }
    /** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */
    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }

    /**
    *   verify OTP
    *   @return boolean
    */

    public function verifyOTP(Request $request){

        $validator = Validator::make($request->all(), [
            'otp' => 'required|min:4',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        
        $mobile = $request->mobile;
        $otp = $request->otp;
        $user = User::where('mobile',$mobile)->where('otp',$otp);
        $count = $user->count();
        $user = $user->first();
        if($count > 0){
            $response['token'] =  $user->createToken('MyApp')->accessToken;
            $response['name'] =  $user->mobile;
            $response['success'] = true;
        }else{
            $response['success'] = false;
        }
        Log::debug($response); 
        return response()->json($response);
    }
}
