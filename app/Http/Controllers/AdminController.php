<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        toastr('Admin User Logged Out Successfully', 'success');
        return redirect('/login');
    }

    public function Profile() {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }

    public function EditProfile() {
        $id = Auth::user()->id;
        $adminEditData = User::find($id);
        return view('admin.admin_profile_edit', compact('adminEditData'));
    }

    public function StoreProfile(Request $request) {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        $adminData->name = $request->name;
        $adminData->username = $request->username;
        $adminData->email = $request->email;
        
        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');

            $filename = date('ymdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $adminData['profile_image'] = $filename;
        }
        $adminData->save();
        toastr('Admin Profile Updated Successfully', 'success');
        return  redirect()->route('admin.profile');
    }
}
