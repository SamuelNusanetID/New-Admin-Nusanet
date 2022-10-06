<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $datas = [
            'titlePage' => 'Lupa Password'
        ];

        return view('auth.forgot-password', $datas);
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        if ($status == Password::RESET_LINK_SENT) {
            return back()->with('status', 'Kami telah mengirimkan link untuk reset password ke email anda.');
        } elseif ($status == Password::INVALID_USER) {
            return back()->withInput($request->only('email'))
                   ->withErrors(['email' => 'Email salah atau akun anda belum terdaftar.']);
        } else {
            return back()->withInput($request->only('email'))
                ->withErrors(['email' => 'Silahkan menunggu, link telah dikirimkan.']);
        }
    }
}
