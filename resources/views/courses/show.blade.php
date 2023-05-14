<x-layout>
    <div class="content">
        <div class="card w-100 mb-5 block">
            <div class="card-body">
              <img src="{{ asset('theme/images/logo.png') }}" alt="course_thumbnail"><h5 class="card-title">{{ $course->course_name }}</h5>
              <h6>Start Date: {{ \Carbon\Carbon::parse($course->start_date)->toFormattedDateString() }}</h6>
              <p class="card-text pb-3">{{ $course->description }}</p>
              <a href="#" class="btn btn-outline-primary btn-pill">Enroll</a>
            </div>
          </div>
    </div>
</x-layout>
