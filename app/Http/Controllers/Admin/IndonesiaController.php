<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\indonesia;
use Illuminate\Http\Request;


class IndonesiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indonesia = indonesia::all();
        return view('admin.indo.index', [
            'indonesia' => $indonesia
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
        indonesia::create([
            'bhs_indonesia' => $request->bhs_indonesia
        ]);
        return redirect()->route('indonesia.index')
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
        $indonesia = indonesia::find($id);
        return view(
            'admin.indo.edit',
            [
                'indonesia' => $indonesia
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
        indonesia::find($id)->update([
            'bhs_indonesia' => $request->bhs_indonesia
        ]);
        return redirect()->route('indonesia.index')
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
        indonesia::destroy($id);
        return redirect()->route('indonesia.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
