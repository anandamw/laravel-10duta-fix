<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class KandidatController extends Controller
{
    public function index()
    {
        $data = [
            'kandidats' => Kandidat::all(),
            'title' => 'Kandidat'
        ];

        return view('admin.kandidats.kandidat', $data);
    }

    public function daftar_kandidat()
    {

        return view('auth.daftar_kandidat');
    }


    public function daftar_kandidat_action(Request $request)
    {

        // dd($request->all());

        $token = uniqid(20);
        $getGambar = $request->file('gambar');
        $getBerkas = $request->file('berkas');

        if ($getGambar && $getBerkas) {
            $file_gambar = $token . '.' . $getGambar->getClientOriginalExtension();
            $file_berkas = $token . '.' . $getBerkas->getClientOriginalExtension();

            $data = [
                'nama' => $request->nama,
                'fakultas' => $request->fakultas,
                'prodi' => $request->prodi,
                'domisili' => $request->domisili,
                'umur' => $request->umur,
                'jenis_kelamin' => $request->jenis_kelamin,
                'angkatan' => $request->angkatan,
                'berkas' => $file_berkas,
                'gambar' => $file_gambar,
                'no_whatsapp' => $request->no_whatsapp,
                'email' => $request->email,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'tinggi_badan' => $request->tinggi_badan,
                'berat_badan' => $request->berat_badan,
                'role' => 'mahasiswa',
            ];

            // Pindahkan file ke direktori yang sesuai
            $getGambar->move(public_path('foto_kandidats'), $file_gambar);
            $getBerkas->move(public_path('berkas_file'), $file_berkas);

            Kandidat::create($data);
            return response()->json("berhasil input data");

            // return redirect('/kandidat')->with('success', 'Data kandidat berhasil ditambahkan.');
        } else {
            return back()->withErrors('File gambar atau berkas tidak ditemukan atau gagal diunggah.');
        }
    }

    public function create()
    {
        $data = [
            // "gender" => Kandidat::where('jenis_kelamin')->get()
        ];

        return view('admin.kandidats.kandidat_create', $data);
    }
    public function create_action(Request $request)
    {
        // dd($request->all());

        $token = uniqid(20);
        $getGambar = $request->file('gambar');
        $getBerkas = $request->file('berkas');

        if ($getGambar && $getBerkas) {
            $file_gambar = $token . '.' . $getGambar->getClientOriginalExtension();
            $file_berkas = $token . '.' . $getBerkas->getClientOriginalExtension();

            $data = [
                'nama' => $request->nama,
                'fakultas' => $request->fakultas,
                'prodi' => $request->prodi,
                'domisili' => $request->domisili,
                'umur' => $request->umur,
                'jenis_kelamin' => $request->jenis_kelamin,
                'angkatan' => $request->angkatan,
                'berkas' => $file_berkas,
                'gambar' => $file_gambar,
                'no_whatsapp' => $request->no_whatsapp,
                'email' => $request->email,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'tinggi_badan' => $request->tinggi_badan,
                'berat_badan' => $request->berat_badan,
            ];

            // Pindahkan file ke direktori yang sesuai
            $getGambar->move(public_path('foto_kandidats'), $file_gambar);
            $getBerkas->move(public_path('berkas_file'), $file_berkas);

            Kandidat::create($data);

            return redirect('/kandidat')->with('success', 'Data kandidat berhasil ditambahkan.');
        } else {
            return back()->withErrors('File gambar atau berkas tidak ditemukan atau gagal diunggah.');
        }
    }

    public function update($id)
    {
        $data = [
            "kandidats"  => Kandidat::where('id', $id)->first(),
        ];
        return view('admin.kandidats.kandidat_update', $data);
    }
    public function update_action(Request $request, $id)
    {

        // dd($request->all());
        // die();
        $token = uniqid(20);
        $getGambar = $request->file('gambar');
        $getBerkas = $request->file('berkas');

        if ($getGambar && $getBerkas) {
            $file_gambar = $token . '.' . $getGambar->getClientOriginalExtension();
            $file_berkas = $token . '.' . $getBerkas->getClientOriginalExtension();

            $data = [
                'nama' => $request->nama,
                'fakultas' => $request->fakultas,
                'prodi' => $request->prodi,
                'domisili' => $request->domisili,
                'umur' => $request->umur,
                'jenis_kelamin' => $request->jenis_kelamin,
                'angkatan' => $request->angkatan,
                'berkas' => $file_berkas,
                'gambar' => $file_gambar,
                'no_whatsapp' => $request->no_whatsapp,
                'email' => $request->email,
                'visi' => $request->visi,
                'misi' => $request->misi,
                'tinggi_badan' => $request->tinggi_badan,
                'berat_badan' => $request->berat_badan,
            ];

            // Pindahkan file ke direktori yang sesuai
            $getGambar->move(public_path('foto_kandidats'), $file_gambar);
            $getBerkas->move(public_path('berkas_file'), $file_berkas);

            Kandidat::where('id', $id)->update($data);

            return redirect('/kandidat')->with('success', 'Data kandidat berhasil ditambahkan.');
        } else {
            return back()->withErrors('File gambar atau berkas tidak ditemukan atau gagal diunggah.');
        }
    }



    public function delete($id)
    {
        // Temukan kandidat berdasarkan ID
        $kandidat = Kandidat::findOrFail($id);

        // Hapus file gambar dan berkas jika ada
        if ($kandidat->gambar && file_exists(public_path('foto_kandidats/' . $kandidat->gambar))) {
            unlink(public_path('foto_kandidats/' . $kandidat->gambar));
        }
        if ($kandidat->berkas && file_exists(public_path('berkas_file/' . $kandidat->berkas))) {
            unlink(public_path('berkas_file/' . $kandidat->berkas));
        }

        // Hapus data kandidat dari database
        $kandidat->delete();

        return redirect('/kandidat')->with('success', 'Data kandidat berhasil dihapus.');
    }
}
