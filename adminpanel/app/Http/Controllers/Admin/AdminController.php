<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
     public function dashboard()
    {
        // return the admin dashboard view
        return view('admin.dashboard'); // make sure this view exists
    }
public function search(Request $request)
{
    $search = $request->search;

    $admins = Admin::where('name', 'like', "%{$search}%")
                   ->orWhere('email', 'like', "%{$search}%")
                   ->orWhere('phone', 'like', "%{$search}%")
                   ->get();

    return view('admin.index', compact('admins'));
}


//     public function search(Request $request)
// {
//     $search = $request->search;

//     $admins = Admin::where('name', 'like', "%{$search}%")
//                    ->orWhere('email', 'like', "%{$search}%")
//                    ->get();

//     return view('admin.index', compact('admins'));
// }

    public function index()
    {
        $admins = Admin::all();
        return view('admin.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:admins,email',
            'password' => 'required|min:6',
            'phone'    => 'required|numeric',
        ]);

        Admin::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'phone'    => $request->phone,
        ]);

        return redirect()->route('admins.index')
            ->with('success', 'Admin created successfully');
    }

    public function edit(Admin $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:admins,email,' . $admin->id,
            'phone' => 'required|numeric',
        ]);

        $data = $request->only(['name', 'email', 'phone']);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $admin->update($data);

        return redirect()->route('admins.index')
            ->with('success', 'Admin updated successfully');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('admins.index')
            ->with('success', 'Admin deleted successfully');
    }
}
