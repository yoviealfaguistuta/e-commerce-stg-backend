<?php
   
namespace App\Http\Controllers;

use App\Models\EmailVerification;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class RegisterController extends Controller
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);
   
        if($validator->fails()){
            return $this->customResponse($validator->errors(), 'Data yang dikirim tidak valid', 422);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $data['token'] =  $user->createToken('MyApp')->plainTextToken;
        $data['name'] =  $user->name;

        return $this->customResponse($data, 'Pengguna berhasil didaftarkan', 200);
    }
   
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if($validator->fails()){
            return $this->customResponse($validator->errors(), 'Data yang dikirim tidak valid', 422);
        }
        
        
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 

            if (!EmailVerification::where([['user_id', $user->id] , ['validation', true]])->exists()) {
                return $this->customResponse(false, 'Pengguna belum terdaftar | Code', 500);
            }

            $data['token'] =  $user->createToken('MyApp')->plainTextToken; 
            $data['name'] =  $user->name;
            return $this->customResponse($data, 'Berhasil login', 200);
        } 
        return $this->customResponse(false, 'username atau password tidak ditemukan', 422);
    }

    public function check(Request $request)
    {
        $request->user();
        return $this->customResponse(auth('sanctum')->user(), 'OK', 200);
    }
}