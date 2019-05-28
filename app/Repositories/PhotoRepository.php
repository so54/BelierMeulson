<?php
namespace App\Repositories;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;


class PhotoRepository
{

    public function store($request)
    {
        // Save image
        $path = basename ($request->photo->store('photos'));
        // Save thumb
        $photo = InterventionImage::make ($request->photo)->widen (480)->encode ();
        Storage::put ('thumbs/' . $path, $photo);
        // Save in base
        $photo = new Photo;
        $photo->ID_EVENT = $request->ID_EVENT;
        $photo->NOM_PHOTO = $path;
        $request->user()->photos()->save($photo);
    }
    public function getAllImages()
    {
        return Photo::latestWithUser()->paginate (config ('app.pagination'));
    }

    public function getPhotosForEvenement($slug)
    {
        return Photo::latestWithUser()->whereHas('evenement', function ($query) use ($slug) {
            $query->whereSlug($slug);
        })->paginate(config('app.pagination'));
    }


}