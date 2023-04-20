<?php

namespace App\Http\Controllers;

use App\Models\DataSampah;
use Illuminate\Http\Request;
use App\Models\Unit;
use Illuminate\View\View;

class DataSampahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get user ID
        if(Auth::check()){
            $id = Auth::getUser()->getAuthIdentifier();
        }else{
            $id = -99;
        }

        $IdUnitPelapor = Unit::where(['user_id' => $id])->first();

        DataSampah::create([
            'tipe_sampah' => $request->tipe_sampah,
            'amount' => $request->jumlah_sampah,
            'unit_pelapor' => $IdUnitPelapor
        ])
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) : View
    {
        $DataSampahTemu = DataSampah::find($id);

        return view(/** data */ null, [
            "dataSampah" => $DataSampahTemu
        ]);
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
