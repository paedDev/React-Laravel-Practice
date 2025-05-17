<?php

namespace App\Policies;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
    public function edit(User $user, Posts $post): bool
    {
        return ($post->employer->user->is($user));
    }
    public function update(User $user, Posts $post): bool
    {
        return ($post->employer->user->is($user));
    }
    public function delete(User $user, Posts $post): bool
    {
        return ($post->employer->user->is($user));
    }
}
