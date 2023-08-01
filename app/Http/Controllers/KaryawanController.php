<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaryawanModel;

class KaryawanController extends Controller
{
    public function index (){
       // return ("Testing karyawan");
             $data['karyawan'] = KaryawanModel::get();
        return view('karyawan/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('karyawan/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('karyawan')
         ->insert([
             'nik_karyawan_choirul' => $request->nik_karyawan_choirul,
             'nama_karyawan_choirul'  =>  $request->nama_karyawan_choirul,
             'alamat_karyawan_choirul'  =>  $request->alamat_karyawan_choirul,
             'Nohp_karyawan_choirul'  =>  $request->Nohp_karyawan_choirul,
        
             
         ]);
         return redirect('karyawan');
     }
     public function edit($id_karyawan_choirul){
        $data['karyawan'] = KaryawanModel::where('id_karyawan_choirul',$id_karyawan_choirul)->first();

        return view('karyawan/edit', $data);
    }

    public function edit_proses(Request $request){
        // return ('Testing Pr;;oses');
        $query = KaryawanModel::where('id_karyawan_choirul',$request->id_karyawan_choirul)
        ->update([
            'nik_karyawan_choirul' => $request->nik_karyawan_choirul,
            'nama_karyawan_choirul'  =>  $request->nama_karyawan_choirul,
            'alamat_karyawan_choirul'  =>  $request->alamat_karyawan_choirul,
            'Nohp_karyawan_choirul'  =>  $request->Nohp_karyawan_choirul,
       
             ]);
        return redirect('karyawan');
    }

    public function delete ($id_karyawan_choirul){
        $query = \DB::table('karyawan')->where('id_karyawan_choirul',$id_karyawan_choirul)->delete();
        return redirect('karyawan');
    }
}
