<?php

namespace App\Http\Controllers;

use App\Http\Requests\EvenementRequest;
use App\Models\Evenement;
use App\Models\Lien;
use App\Repositories\EvenementRepository;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liens = Lien::all();
        return view('administration.index',['liens'=>$liens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $liens = Lien::all();
        return view('administration.create',['liens'=>$liens]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EvenementRequest $request, EvenementRepository $repository)
    {
        $repository->store($request->all ());
        return redirect ()->route ('galerie')->with ('ok', __ ('L\'évènement a bien été enregistré'));
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
    public function edit(Evenement $evenement)
    {
        return view('administration.edit', compact('evenement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EvenementRequest $request, Evenement $evenement)
    {
        $evenement->update($request->all());

        return redirect()->route('evenement.index')->with('ok', __('L\'évènement a bien été modifié'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Evenement $evenement)
    {

        $evenement->delete();
return response()->json();

    }

    public function __construct()
    {
        $this->middleware('ajax')->only('destroy');
    }


}
