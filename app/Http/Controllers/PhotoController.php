<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Repositories\EvenementRepository;
use Illuminate\Http\Request;
use App\Repositories\PhotoRepository;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{

    protected $evenementRepository;
    protected $photoRepository;

    public function __construct( PhotoRepository $photoRepository, EvenementRepository $evenementRepository)
    {



            $this->photoRepository = $photoRepository;
            $this->evenementRepository = $evenementRepository;

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @mixin \Eloquent
     */
    public function store(Request $request)
    {
        $request->validate([

            'photo' => 'bail|required|image|max:2000',
            'ID_EVENT'=>'bail|required|exists:evenements,ID_EVENT',

        ]);
        $this->photoRepository->store($request);

        return back()->with('ok', __("La photo a bien été enregistrée"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Photo $photo
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Request $request, Photo $photo)
    {
        $this->authorize('manage', $photo);
        $photo->ID_EVENT = $request->ID_EVENT;
        $photo->save();
        return back()->with('updated', __('L\'évènement a bien été changé !'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $this->authorize('manage', $photo);

        Storage::delete ([
            'photos/' . $photo->getAttribute('NOM_PHOTO'),
            'thumbs/' . $photo->getAttribute('NOM_PHOTO'),
        ]);

        $photo->delete ();

        return back ();
    }

    public function evenement($slug)
    {
        $evenement = $this->evenementRepository->getBySlug ($slug);
        $photos = $this->photoRepository->getPhotosForEvenement ($slug);
        return view ('vendor.belier-galerie', ['photos'=>$photos, 'evenement'=>$evenement]);
    }



}
