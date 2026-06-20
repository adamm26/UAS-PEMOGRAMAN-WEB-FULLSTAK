<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class AdminUsers extends Controller
{
    //
    public function index()
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function showFromUser()
    {
        return view('admin.users.create');
    }

    public function submitUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'role' => 'required|in:customer,admin,employee',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('user-index')->with('success', 'User berhasil ditambahkan.');
    }

    public function detailUser($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.view', compact('user'));
    }

    public function updateUserForm($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.update', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $updateUser = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users')->ignore($updateUser->id)],
            'role' => 'required|in:customer,admin,employee',
            'password' => 'nullable|confirmed|min:8',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $updateUser->update($data);

        return redirect()->route('user-index')->with('success', 'Data user berhasil diperbarui.');
    }

    public function destroyUser($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('user-index')->with('success', 'User berhasil dihapus.');
    }
}
