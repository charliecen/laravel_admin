<?php
/**
 * Created by PhpStorm.
 * User: zt-2203315
 * Date: 2017/6/20
 * Time: 14:18
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            return response()->json([
                'data'  => Auth::user(),
                'code'  => 200,
            ]);
        }
    }
}