<?php

namespace App\Http\Controllers;

use App\Inquiry;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:inquires',
            'mobile' => 'required|min:10|numeric',
            'company' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'investment' => 'required|string|max:255',
            'detail' => 'required|string|max:255',
        ]);

        // echo "<pre>";
        // print_r($request->toArray());
        // die;
        $user = new Inquiry();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        $user->company = $request->input('company');
        $user->website = $request->input('website');
        $user->investment = $request->input('investment');
        $user->detail = $request->input('detail');
        $user->status = 0;
        $user->save();
        return back();
    }

    public function index()
    {

    }
}
