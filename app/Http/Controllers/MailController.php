<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Mail\PasswordMail;
use App\Models\EmailVerification;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function verificationCode($email)
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $verificationCode = '';
        for ($i = 0; $i < 5; $i++) {
            $verificationCode .= $characters[rand(0, $charactersLength - 1)];
        }

        $expiredCode = Carbon::now()->addMinute(30);
        $detail = [
            'password' => $verificationCode,
            'email' => $email,
            'expired' => $expiredCode
        ];

        $data["email"] = $email;

        Mail::to($email)->send(new PasswordMail($detail));

        $user = User::select('id')->where('email', $email)->first();
        EmailVerification::create([
            'user_id' => $user->id,
            'verification_code' => $verificationCode,
            'expired' => $expiredCode,
            'is_valid' => 'true',
            'validation' => 'false',
        ]);

        return $this->customResponse(true, 'Kode verifikasi berhasil dikirim', 200);

    }

    public function validationCode(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'verification_code' => 'required',  
        ]);
   
        if($validator->fails()){
            return $this->customResponse($validator->errors(), 'Data yang dikirim tidak valid', 422);
        }
        
        if (!User::where('email', $request->email)->exists()) {
            return $this->customResponse(false, 'Pengguna tidak ditemukan', 500);
        }

        $user = User::select('id')->where('email', $request->email)->first();

        if (!EmailVerification::where([['user_id', $user->id], ['verification_code', $request->verification_code]])->exists()) {
            return $this->customResponse(false, 'Pengguna belum terdaftar', 500);
        }

        EmailVerification::where([['user_id', $user->id], ['verification_code', $request->verification_code]])->update([
            'is_valid' => false,
            'validation' => true,
        ]);

        return $this->customResponse(true, 'Akun anda berhasil di aktifkan', 200);
    }
}
