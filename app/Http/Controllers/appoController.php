<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Auth;
use Session;
use Tokens;
use App\Models\User;
use App\Model\experts;
class appoController extends Controller
{
    public function booking(Request $request){
        $validateexpert = Validator::make($request->all(),
            [
                'user_id' => 'required',
                'expert_id' =>'required|email|unique:users,email',
                'date'=>'required',
                'start_time' =>'required'
            ]);
            $user = appoint::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'type'=>$request->type
            ]);
    }
}
