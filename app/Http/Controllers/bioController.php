<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\bioModel;

class bioController extends Controller
{

    public function dashboard(){

        //carakedua
        // return view('pages.tampil',[
        //     'bio'=>bioModel::latest()->filter(request(['search']))->get()
        // ]);
        
        return view('pages.tampil',[
            "bio"=>bioModel::latest()->filter()->get()
        ]);
    }

    
    public function simpanData(Request $request){
        $request->validate(
            [
                'nama' => 'required',
                'nis' => 'required|unique:bio_models',
                'kelas' => 'required',
                'tmtlhr' => 'required',
                'tgllhr' => 'required',
                'email' => 'required|unique:bio_models',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'nis.required' => 'NIS tidak boleh kosong',
                'nis.unique' => 'NIS sudah terdaftar',
                'kelas.required' => 'Kelas tidak boleh kosong',
                'tmtlhr.required' => 'Tempat Lahir tidak boleh kosong',
                'tgllhr.required' => 'Tanggal Lahir tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'email.unique' => 'Email sudah terdaftar'
            ]
            );

            $data=bioModel::create([
                'nama' => $request->nama,
                'nis' => $request->nis,
                'kelas' => $request->kelas,
                'tmtlhr' => $request->tmtlhr,
                'tgllhr' => $request->tgllhr,
                'email' => $request->email,
            ]);

            if($data){
                Session::flash('sukses','Tambah data SUKSES!!!');
                return redirect('/tambah');
            }



            // dd($data);

            // bioModel::create($data);
    }

    public function hapusData($idHapus){
        $bioHapus=bioModel::findOrFail($idHapus);
        $bioHapus->delete();
        Session::flash('sukses','Hapus data SUKSES!!!');
        return redirect('/dashboard');
    }

    public function ubah($id){
        $bioUbah=bioModel::findOrFail($id);
        return view('pages.ubah',['bioUbah' => $bioUbah]);
    }

    public function data($id, Request $request){
        $request->validate(
            [
                'nama' => 'required',
                'nis' => 'required',
                'kelas' => 'required',
                'tmtlhr' => 'required',
                'tgllhr' => 'required',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong',
                'nis.required' => 'NIS tidak boleh kosong',
                'kelas.required' => 'Kelas tidak boleh kosong',
                'tmtlhr.required' => 'Tempat Lahir tidak boleh kosong',
                'tgllhr.required' => 'Tanggal Lahir tidak boleh kosong',
            ]
            );

            $bioupdate=bioModel::findOrFail($id);
            $bioupdate->nama=$request->nama;
            $bioupdate->nis=$request->nis;
            $bioupdate->kelas=$request->kelas;
            $bioupdate->tmtlhr=$request->tmtlhr;
            $bioupdate->tgllhr=$request->tgllhr;
            $bioupdate->email=$request->email;
            $bioupdate->save();

            Session::flash('sukses','Update data SUKSES !!!');
            return redirect('/dashboard');
    }
}