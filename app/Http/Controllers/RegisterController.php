<?php
   
namespace App\Http\Controllers;
   
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
            $response = [
                'success' => true,
                'data'    => $validator->errors(),
                'message' => 'Validation Error',
            ];
    
            return response()->json($response, 500);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->plainTextToken;
        $success['name'] =  $user->name;
   
        $response = [
            'success' => true,
            'data'    => $success,
            'message' => 'User register successfully',
        ];

        return response()->json($response, 200);
    }
   
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')->plainTextToken; 
            $success['name'] =  $user->name;
   
            $response = [
                'success' => true,
                'data'    => $success,
                'message' => 'User login successfully',
            ];
    
            return response()->json($response, 200);
        } 
        else{ 
            $response = [
                'success' => true,
                'data'    => 'Unauthorised',
                'message' => 'Unauthorised',
            ];
    
            return response()->json($response, 422);
        } 
    }

    public function check(Request $request)
    {
        $request->user();
        $response = [
            'success' => true,
            'data'    => auth('sanctum')->user(),
            'message' => 'OK',
        ];

        return response()->json($response, 200);
    }
}