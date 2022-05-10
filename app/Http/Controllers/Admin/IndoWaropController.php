<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\indonesia;
use App\Models\kamus;
use App\Models\waropen;
use Illuminate\Http\Request;

class IndoWaropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kamus = kamus::with('indonesia', 'waropen')->get();
        $indonesia = indonesia::orderBy('bhs_indonesia')->get();
        $waropen = waropen::orderBy('bhs_waropen')->get();
        return view('admin.indo_warop.index', [
            'kamus' => $kamus,
            'indonesia' => $indonesia,
            'waropen' => $waropen,
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
        kamus::create($request->all());
        return redirect()->route('indo_warop.index')
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
        $kamus = kamus::find($id);
        $indonesia = indonesia::orderBy('bhs_indonesia')->get();
        $waropen = waropen::orderBy('bhs_waropen')->get();
        return view('admin.indo_warop.edit', [
            'indonesia' => $indonesia,
            'waropen' => $waropen,
            'kamus' => $kamus,
        ]);
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
        kamus::find($id)->update($request->all());
        return redirect()->route('indo_warop.index')
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
        kamus::destroy($id);
        return redirect()->route('indo_warop.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
