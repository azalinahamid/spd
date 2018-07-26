<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pencalonan;
use App\Sesi;
use App\Calon;
use Auth;

class PencalonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pencalonan_index')->withPencalonans(Pencalonan::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pencalonan_add')
        ->withSesis(Sesi::where('status',true)->get())
        ->withCalon(new Calon)
        ->withPencalonan(new Pencalonan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'sesi_id' => 'required',
            'name'=>'required',
            'ic'=> 'required',
            'email' => 'required',
            'asas'=>'required'
        ], [
            'sesi_id.required' => 'Sila masuk sesi',
            'name.required'=>'Sila masuk nama',
            'ic.required'=> 'Sila masuk ic',
            'email.required' => 'Sila masuk email',
            'asas.required'=>'Sila masuk asas'
        ]);

        $sesi = Sesi::findOrFail($request->sesi_id);

        $calon = Calon::create($request->only('name','ic','email'));

        $pencalonan = new Pencalonan;
        $pencalonan->sesi_id = $sesi->id;
        $pencalonan->user_id = Auth::user()->id;
        $pencalonan->calon_id = $calon->id;
        $pencalonan->asas = $request->asas;
        $pencalonan->save();

        return back()->withSuccess('Pencalonan '.$request->name.' berjaya ditambah');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
