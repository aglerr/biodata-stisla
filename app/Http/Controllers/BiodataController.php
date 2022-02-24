<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BiodataController extends Controller{

    public function index($page){
        $data = DB::table('biodatas')
        ->join('users', 'users.id', 'biodatas.id_user')
        ->select('users.name', 'users.email', 'biodatas.*')
        ->where('users.id', '=', '1')
        ->get();

        if($data->isEmpty()){
            return redirect()->route('register');
        }

        if($page == 'biodata'){
            return view('pages.dashboard.biodata', ['data' => $data[0]]);
        } else if($page == 'update'){
            return view('pages.dashboard.update', ['data' => $data[0]]);
        }
    }

    public function simpanBiodata(Request $request){
        DB::table('biodatas')->where('id_user', '=', '1')
        ->update([
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'golongan_darah' => $request->golongan_darah,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp
        ]);

        return redirect()->route('dashboard', ['page' => 'biodata']);
    }

}
