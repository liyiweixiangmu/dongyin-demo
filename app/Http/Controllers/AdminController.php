<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if(!Auth::guard('admin')->check()){
            return redirect('admin/login');
        }
        $admins = Admin::get();
        return view('admin.index',compact('admins'));
        return Auth::guard('admin')->user();
    }

    public function avatar()
    {
        return view('admin.avatar');
    }

    public function changeAvatar(Request $request)
    {
        $file = $request->file('avatar');
        $destinationPath = 'uploads/';
        $filename = Auth::guard('admin')->user()->id.'_'.time();
        $file->move($destinationPath, $filename);
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $admin->avatar = '/'.$destinationPath.$filename;
        $admin->save();
        return redirect('admin/avatar');
    }


}
