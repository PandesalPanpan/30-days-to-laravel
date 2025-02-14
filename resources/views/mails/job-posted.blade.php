<h2> {{ $job->title }}</h2>

<p>Your job has been created successfully!</p>
<p>Salary: {{ $job->salary }}</p>

<a href="{{ url('/jobs/'. $job->id) }}">View your Job Post</a>
