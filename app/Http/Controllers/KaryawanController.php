<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KaryawanController extends Controller
{
    function addKaryawan(){
        return view('addKaryawan');
    }

    function addKaryawan1(Request $request){
            $request->validate([
                'Nama'=>['required', 'string', 'min:5', 'max:20'],
                'Umur'=>['required', 'numeric', 'min:21'],
                'Alamat'=>['required', 'string', 'min:10', 'max:40'],
                'Telpon'=>['required', 'min:9', 'max:12', function ($attribute, $value, $fail) {
                    if (!str_starts_with($value, '08')) {
                        $fail($attribute.' must start with 08.');
                    }
                }],
                'Photo' =>['required', 'image']
            ]);

            $filename = $request->file('Photo')->getClientOriginalName();
            $request->file('Photo')->storeAs('/public'.'/'.$filename);

            Karyawan::create([
                'Nama' => $request->Nama,
                'Umur' => $request->Umur,
                'Alamat' => $request->Alamat,
                'Telpon' => $request->Telpon,
                'Photo' => $filename
            ]);

            return redirect('/karyawan');
    }

    public function viewKaryawan(){
        $karyawan = Karyawan::all();
        return view('karyawan', compact('karyawan'));
    }

    public function editKaryawan($id){
        $karyawanx = Karyawan::findorFail($id);

        return view('edit', compact('karyawanx'));
    }

    public function updateKaryawan($id, Request $request){
        $request->validate([
            'Nama'=>['required', 'string', 'min:5', 'max:20'],
            'Umur'=>['required', 'numeric', 'min:21'],
            'Alamat'=>['required', 'string', 'min:10', 'max:40'],
            'Telpon'=>['required', 'min:9', 'max:12', function ($attribute, $value, $fail) {
                    if (!str_starts_with($value, '08')) {
                        $fail($attribute.' must start with 08.');
                    }
                }],
            'Photo' =>['required', 'image']
        ]);

        $filename = $request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('/public'.'/'.$filename);

        Karyawan::find($id)->update([
            'Nama' => $request->Nama,
            'Umur' => $request->Umur,
            'Alamat' => $request->Alamat,
            'Telpon' => $request->Telpon,
            'Photo' => $filename
        ]);

        return redirect('/karyawan');
    }

    public function deleteKaryawan($id){
        $karyawanx = Karyawan::find($id);
        Karyawan::destroy($id);
        Storage::delete('/public'.'/'.$karyawanx->Photo);

        return redirect('/karyawan');
    }
}
