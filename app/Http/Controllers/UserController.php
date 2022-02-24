<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Biodata;
use DB;

class UserController extends Controller{

    public function simpanUser(Request $request){
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ];
        User::create($data);
        
        $id = DB::select('select * from users where email = ?', [$request->email])[0]->id;
        $biodata = [
            'id_user'=>$id,
            'jenis_kelamin'=>null,
            'tempat_lahir'=>null,
            'tanggal_lahir'=>null,
            'alamat'=>null,
            'golongan_darah'=>null,
            'no_hp'=>null
        ];
        Biodata::create($biodata);

        return redirect()->route('dashboard', ['page' => 'biodata']);
    }

}
