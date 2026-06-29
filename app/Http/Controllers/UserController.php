<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('dashboard.user', compact('users'));
    }

    public function create()
    {
        return view('dashboard.user-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
            'status' => 'required',
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {

            $foto = time().'.'.$request->foto->extension();

            $request->foto->move(
                public_path('uploads/user'),
                $foto
            );
        }

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'foto' => $foto,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => $request->status,
        ]);

        // dd($request->all());

        return redirect()
                ->route('dash.user')
                ->with('success', 'User berhasil ditambahkan');
    }

    public function show(User $user)
    {
        return view('dashboard.user-show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('dashboard.user-edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,'.$user->id,
            'email' => 'required|email|unique:users,email,'.$user->id,
            'role' => 'required',
            'status' => 'required',
        ]);

        if ($request->hasFile('foto')) {

            $foto = time().'.'.$request->foto->extension();

            $request->foto->move(
                public_path('uploads/user'),
                $foto
            );

            $user->foto = $foto;
        }

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->status = $request->status;

        if ($request->password != '') {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()
                ->route('dash.user')
                ->with('success', 'User berhasil diperbarui');
    }

    public function destroy(User $user)
    {
        if ($user->foto != null) {

            $path = public_path('uploads/user/'.$user->foto);

            if (file_exists($path)) {
                unlink($path);
            }
        }

        $user->delete();

        return redirect()
                ->route('dash.user')
                ->with('success', 'User berhasil dihapus');
    }

    
}