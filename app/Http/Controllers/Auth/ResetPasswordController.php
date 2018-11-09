<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show recover password form
     *
     * @param $token
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($token)
    {
        if (!$user = \DB::table('password_resets')->where('token', $token)->first()) {
            return redirect()->route('login.create')->with('error', 'Page accessed in error!');
        }

        if (!User::whereEmail($user->email)->first()->hasRole('nextgen_pet_user')) {
            abort(404);
        }

        return view('auth.passwords.reset')
            ->with('token', $token)
            ->with('email', $user->email);
    }

    /**
     *
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $this->validate($request, $this->rules(), $this->validationErrorMessages());

        if (!User::whereEmail($request->get('email'))->first()->hasRole('nextgen_pet_user')) {
            abort(404);
        }

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
            $this->resetPassword($user, $password);
        }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $response == Password::PASSWORD_RESET
            ? $this->sendResetResponse()
            : $this->sendResetFailedResponse($request, $response);
    }

    /**
     * Get the response for a successful password reset.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendResetResponse()
    {
        return redirect('/')
            ->with('success', 'Your password has been reset and you are now logged in!');
    }

    /**
     * Change user password
     *
     * @param $user
     * @param $password
     */
    protected function resetPassword($user, $password)
    {
        $user->forceFill([
            'password'       => $password,
            'remember_token' => Str::random(60),
        ])->save();

        $this->guard()->login($user);
    }
}
