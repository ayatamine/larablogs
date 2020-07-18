<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    //
     public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'profile_img'=>'profile_img1.jpg',
            'password' => bcrypt($request->password),
        ]);

        $token = $user->createToken('programingVh')->accessToken;

        return response()->json(['token' => $token], 200);
    }

    /**
     * Handles Login Request
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($credentials)) {
            $token = auth()->user()->createToken('TutsForWeb')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'UnAuthorised'], 401);
        }
    }

    /**
     * Returns Authenticated User Details
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function details()
    {
        return response()->json(['user' => auth()->user()], 200);
    }
    public function getUnreadNotifications(){
        $notifications = Auth::user()->unreadNotifications;
        return response()->json($notifications);
    }
    public function getAllNotifications(){
        $notifications = Auth::user()->notifications;
        return response()->json($notifications);
    }
    public function markNotificationAsRead(Request $request){
        $notification = Auth::user()->notifications()->where('id',$request->id)->first();
        $notification->markAsRead();
        return response()->json(['msg'=>'ok']);
    }
}
