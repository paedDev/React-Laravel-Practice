<?php

namespace App\Jobs;

use App\Models\JobListing;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class TranslateJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public JobListing $joblisting)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger("Translating " . $this->joblisting->title . ' to spanish');
    }
}
