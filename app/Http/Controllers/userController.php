<?php

namespace App\Http\Controllers;

class userController
{
    public static function getUsers(Request $request)
    {
        $users = User::all();
        return response()->json(['success' => true, 'users' => $users]);
    }
    public static function deleteUser(Request $request){
        $user= User::where('user_name',$request->name)->first();
        $user->delete();
        return response()->json(['success'=>true]);
    }
    public static function saveUser(Request $request){
        if (empty($request->name))
            return response()->json(['success'=>false,'msj'=>'Empty Field']);
        $user = new User();
        $user->user_name = $request->name;
        $user->last_name = $request->last_name;
        $user->age = $request->age;
        $user->sex = $request->sex;
        $user->email = $request->email;
        $user->save();
        return response()->json(['success'=>true, 'group'=>$user]);
    }
    public static function editUser(Request $request){
        if (empty($request->name) || empty($request->oucn))
            return response()->json(['success'=>false,'msj'=>'Empty Field']);
        $user = User::where('user_name',$request->name)->first();
        $user->last_name = $request->last_name;
        $user->age = $request->age;
        $user->sex = $request->sex;
        $user->email = $request->email;
        $user->save();
        return response()->json(['success'=>true, 'group'=>$user]);
    }
}
