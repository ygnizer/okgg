<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 
        $user = $request->user();
        return view('home', compact('user'));
    }

    /**
     * Update users.recruitStatus
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateRecruitStatus(Request $request)
    {
        
        $data = $request->all();
        Validator::make($data, [
            'recruitStatus' => 'required|int|min:0|max:2',
        ])->validate();
        $request->user()->update([
            'recruitStatus' => $data['recruitStatus'],
        ]);

        return redirect('home');
    }


}
