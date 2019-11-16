<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Validate incoming registration request.
     *
     * @param Request $request
     *
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     * @author Ali Shaikh <me@alishaikh.net>
     */
    protected function validator(Request $request)
    {
        $this->validate($request, [
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param Request $request
     *
     * @return \App\User
     * @throws \Illuminate\Validation\ValidationException
     * @author Ali Shaikh <me@alishaikh.net>
     */
    public function create(Request $request)
    {
        $this->validator($request);

        $user = User::create([
            'name'     => $request['name'],
            'email'    => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return response()->json($user, 201);
    }
}
