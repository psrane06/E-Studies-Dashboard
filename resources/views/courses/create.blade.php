<x-layout>

    <div class="content">
        <div class="card w-100 mb-5">
            <div class="card-body">
                <div class="row justify-content-center">
                    {{-- <div class="col-lg-6 col-xl-5 col-md-10 ">
                        <div class="card card-default mb-0"> --}}
                    <div class="card-header pb-0">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Create a Course
                        </h2>
                    </div>
                    <div class="card-body px-5 pb-5 pt-0">
                        <h2 class="mb-4">Post a course</h2>
                        <form method="GET" action="/courses">
                            @csrf
                            <div class="mb-6">
                                <label for="course_name">Course Name</label>
                                <input type="text" class="form-control" name="course_name" />
                                @error('course_name')
                                    <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            {{--                             <div class="mb-6">
                                <label for="user_id">Instructor Name</label>
                                <input type="text" class="form-control" name="user_id" placeholder="{{ auth()->user()->name }}" disabled/>
                                @error('user_id')
                                    <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div> --}}

                            <div class="mb-6">
                                <label for="start_date">Start Date</label>
                                <input type="date" class="form-control" name="start_date" />
                                @error('start_date')
                                    <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="end_date">End Date</label>
                                <input type="date" class="form-control" name="end_date" />
                                @error('end_date')
                                    <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label for="description">
                                    Description
                                </label>
                                <textarea class="form-control" name="description" rows="3"></textarea>
                                @error('description')
                                    <p class="text-danger text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <button class="btn btn-primary btn-pill hover:bg-black">
                                    Create Course
                                </button>
                                <a href="/dashboard" class="text-black ml-4">Back</a>
                            </div>
                        </form>
                        {{--                         @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                    </div>
                    {{-- </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-layout>
