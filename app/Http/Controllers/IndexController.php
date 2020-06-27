<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Design;
use App\Tag;
use App\User;
use Auth;

class IndexController extends Controller
{
    public function index(){

        $latestDesigns = Design::where('is_verified','=','accepted')->orderBy('id', 'desc')->take(8)->get();
        $topDesigns = Design::where('is_verified','=','accepted')->orderBy('total_likes', 'desc')->take(8)->get();
        $companies = User::whereHas('profile', function($query) {
            $query->where('is_verified','=','accepted');})->where('role', '=', 'company')->get();

        $role = is_null(auth()->user()) ? 'm3l4' : auth()->user()->role;
         
        return view('welcome', compact('latestDesigns', 'topDesigns', 'companies', 'role'));
    }

    //  public function notifications()
    // {
    //     return auth()->user()->unreadNotifications()->limit(5)->get()->toArray();
    // }
    
    public function MarkAsRead()
    {
    	Auth::user()->unreadNotifications->markAsRead();
    	echo Auth::user()->unreadNotifications->count();
    }
   
    
}
