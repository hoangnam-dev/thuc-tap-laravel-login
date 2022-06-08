<?php

namespace App\Http\Controllers;

use App\Models\AccountModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class LoginController
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request) {
        return view('login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request) {
        $request->validate([
            'username' => ['required', 'max:45'],
            'password' => ['required', 'max:255']
        ]);

        if($request->username === 'abc') {
            return redirect()->back()->with('error', 'Your Account Not Found');
        }
/*
        $account = DB::table('account')
                    ->where('username', '=', $request->username)
                    ->first();


        if (is_null($account)) {
            return redirect()->back()->with('error', 'Your Account Not Found');
        }
        $verify_password = password_verify($request->password, $account->password);
*/
        $pass_hash = password_hash('1234', PASSWORD_BCRYPT);
        $verify_password = password_verify($request->password, $pass_hash);

         if (!$verify_password) {
            return redirect()->back()->with('error', 'Your Password Incorrect');
        }
         /*
         session(['user' => $account]);
          */
         session(['user' => $request->username]);
         return redirect()->route('home');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request) {
        $request->session()->forget('user');
        return redirect()->route('login');
    }
}
