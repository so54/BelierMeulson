<?php
namespace App\Policies;
use App\Models\ { User, Photo };
use Illuminate\Auth\Access\HandlesAuthorization;

class PhotoPolicy
{
    use HandlesAuthorization;
    public function before(User $user)
    {
        if ($user->admin) {
            return true;
        }
    }
    public function manage(User $user, Photo $photo)
    {
        return $user->id === $photo->user_id;
    }
}