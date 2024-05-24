<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;


class UsersController extends Controller
{
    public function index ()
    {
      
        $users = Users::all();
        return  view('admin.User_list',compact('users'));
    }

    public function Tambah_user(Request $request)
    {
            $request->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|string|min:3',
                'role' => 'required|in:admin,user',
                'hp' => 'nullable|string|max:20',
            ]);

            $users = Users::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
                'Hp' => $request->Hp,
            ]);

            return redirect()->route('User_list')->with('success', 'User berhasil ditambahkan');
    }

    public function Regist_pros(Request $request)
    {
            // $request->validate([
            //     'nama' => 'required|string|max:255',
            //     'email' => 'required|email|unique:users',
            //     'password' => 'required|string|min:3',
            //     'hp' => 'nullable|string|max:20',
            // ]);

            $users = Users::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
                'Hp' => $request->Hp,
            ]);

            return redirect('/login');
    }

    public function view_register()
    {
        return view('admin.regis',[
            'judul' => 'Register'
        ]);
    }


    public function tEdit_user($id)
    {
        $users = Users::find($id);
        return view('admin.User_edit', compact('users'));
    }

   public function Edit_user(Request $request, $id)
     {
         $users = Users::find($id);

        $users->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'Hp' => $request->Hp,
        ]);
     return redirect()->route('User_list')->with('success', 'User berhasil diubah');
     }

     public function Delete_user($id)
     {
         $users = Users::find($id);
         $users->delete();
         return redirect()->route('User_list')->with('success', 'User berhasil dihapus');
     }
    
}
