<?php

namespace App\Http\Controllers;

use App\Models\Verseny;
use App\Http\Requests\StoreVersenyRequest;
use App\Http\Requests\UpdateVersenyRequest;
use Illuminate\Support\Facades\DB;

class VersenyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Verseny::all();
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
     * @param  \App\Http\Requests\StoreVersenyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVersenyRequest $request)
    {
        $seged = new Verseny();
        $seged->vkod    = $request->vkod;
        $seged->vnev    = $request->vnev;
        $seged->datum   = $request->datum;
        $seged->hely    = $request->hely;
        $seged->kor     = $request->kor;
        $seged->hossz   = $request->hossz;


        if ($seged->save()) {
            //$utolsoelem =  DB::table('versenyek')->orderBy('vkod', 'desc')->first();
            return response()->json(array('success' => true, 'vkod' => $seged->vkod), 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Verseny  $verseny
     * @return \Illuminate\Http\Response
     */
    public function show(Verseny $verseny)
    {
        return $verseny;
        //Verseny::where("vkod", $verseny->vkod)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Verseny  $verseny
     * @return \Illuminate\Http\Response
     */
    public function edit(Verseny $verseny)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVersenyRequest  $request
     * @param  \App\Models\Verseny  $verseny
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVersenyRequest $request, Verseny $verseny)
    {
        $verseny->vkod    = $request->vkod;
        $verseny->vnev    = $request->vnev;
        $verseny->datum   = $request->datum;
        $verseny->hely    = $request->hely;
        $verseny->kor     = $request->kor;
        $verseny->hossz   = $request->hossz;

        if ($verseny->save()) {
            return response()->json(array('success' => true, 'vkod' => $verseny), 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Verseny  $verseny
     * @return \Illuminate\Http\Response
     */
    public function destroy(Verseny $verseny)
    {
        return $verseny->delete();
    }
}
