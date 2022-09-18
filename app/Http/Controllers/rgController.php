<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User;

class rgController extends Controller
{

    public function showOneData(){
        $user=User::all();
        return view('register.rgTampil',['user'=>$user]);
    }

    public function deleteData($idDelete){
        $userDelete=User::findOrFail($idDelete);
        $userDelete->delete();
        Session::flash('sukses','Hapus data SUKSES!!!');
        return redirect('/showReg');
    }
    
    public function addData(Request $request){
        $request->validate(
            [
                'name' => 'required|unique:users',
                'email' => 'required|unique:users',
                'password' => 'required'
            ],
            [
                'name.required' => 'Nama tidak boleh kosong',
                'name.unique' => 'Nama sudah terdaftar',
                'email.required' => 'Email tidak boleh kosong',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password sudah terdaftar'
            ]
            );

            $data=User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ]);

            // User::create($data);

            if($data){
                Session::flash('sukses','Register data SUKSES!!!');
                return redirect('/');
            }
        
    }

    public function edit($id){
        $userEdit=User::findOrFail($id);
        return view('register.rgEdit',['userEdit' => $userEdit]);
    }

    public function updateData($id, Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ],
            [
                'name.required' => 'Nama tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'password.required' => 'Password sudah terdaftar'
            ]
            );

            $userupdate=User::findOrFail($id);
            $userupdate->name=$request->name;
            $userupdate->email=$request->email;
            $userupdate->password= bcrypt($request->password);
            $userupdate->save();

            Session::flash('sukses','Update data SUKSES !!!');
            return redirect('/showReg');
    }

}