<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::find(auth()->user()->id);

        return view('profile.profile', [
            "title" => "profile",
            "user" => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $user->name = $request->name;
        $user->email = $request->email;
        $foto = $request->file('foto');
        if ($foto) {
            // if ($user->foto) {
            $data['foto'] = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move('file_upload/produk/', $data['foto']);
            // unlink('file_upload/produk/' . $user->foto);
            // }
        }
        $user->update($data);



        // $user->update([
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'foto' => $request->file('foto') ? $data,
        //     // 'foto' => $request->file('foto') ? $request->file('foto')->store('foto', 'public') : $user->photo,
        // ]);

        return redirect()->back()->with('success', 'User updated successfully.');

        // $user = User::find($id);
        // if ($user) {


        //     return redirect()->route('profile.index')->with('success', 'Profile berhasil diedit..');
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
