<h2>
    {{ $job->title }}
</h2>

<p>
    Congrats! Your job is now live in our website
</p>
<p>
    <a href="{{ url('/jobs/' . $job->id) }}">View Your Job Listing here </a>
</p>
