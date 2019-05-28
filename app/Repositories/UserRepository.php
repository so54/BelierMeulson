<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Http\Request;

class UserRepository extends BaseRepository
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function update(User $user, Request $request)
    {
        $user->update($request->all());
    }
}