<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\waropen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WaropenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waropen = waropen::all();
        return view('admin.waropen.index', [
            'waropen' => $waropen
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
        $ektensi_audio = $request->file('audio')->extension();
        $nama_audio = time() . '.' . $ektensi_audio;
        Storage::putFileAs('public/audio', $request->audio, $nama_audio);

        waropen::create([
            'bhs_waropen' => $request->bhs_waropen,
            'audio' => $nama_audio
        ]);
        return redirect()->route('waropen.index')
            ->with('berhasil', 'Data Berhasil Ditambahkan');
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
        $waropen = waropen::find($id);
        return view(
            'admin.waropen.edit',
            [
                'waropen' => $waropen
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $waropen = waropen::find($id);
        $nama_audio = $waropen->audio;
        if ($request->hasFile('audio')) {
            Storage::delete('public/audio/' . $waropen->audio);
            $ektensi_audio = $request->file('audio')->extension();
            $nama_audio = time() . '.' . $ektensi_audio;
            Storage::putFileAs('public/audio', $request->audio, $nama_audio);
        }
        $data['audio'] = $nama_audio;
        waropen::find($id)->update($data);
        return redirect()->route('waropen.index')
            ->with('berhasil', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // hapus file audio
        $waropen = waropen::find($id);
        Storage::delete('public/audio/' . $waropen->audio);
        waropen::destroy($id);
        return redirect()->route('waropen.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
