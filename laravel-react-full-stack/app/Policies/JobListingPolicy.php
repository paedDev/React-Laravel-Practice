<?php

namespace App\Policies;

use App\Models\JobListing;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobListingPolicy
{
    public function update(User $user, JobListing $job): bool
    {
        return ($job->employer->user->is($user));
    }
    public function delete(User $user, JobListing $job): bool
    {
        return ($job->employer->user->is($user));
    }
    public function edit(User $user, JobListing $job): bool
    {
        return ($job->employer->user->is($user));
    }
}
