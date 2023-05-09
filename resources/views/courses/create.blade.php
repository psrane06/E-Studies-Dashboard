<x-layout>
    <div class="content">
        <div class="mx-4">
            <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Create a Course
                    </h2>
                    <p class="mb-4">Post a course</p>
                </header>

                <form method="GET" action="/courses">
                    @csrf
                    <div class="mb-6">
                        <label for="course_name" class="inline-block text-lg mb-2">Course Name</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="course_name" />
                        @error('course_name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="user_id" class="inline-block text-lg mb-2">Instructor Name</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="user_id"
                            placeholder="Example: Senior Laravel Developer" />
                        @error('user_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="start_date" class="inline-block text-lg mb-2">Start Date</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="start_date"
                            placeholder="Example: Remote, Boston MA, etc" />
                        @error('start_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="end_date" class="inline-block text-lg mb-2">End Date</label>
                        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="end_date"
                            placeholder="Example: Remote, Boston MA, etc" />
                        @error('end_date')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{--  <div class="mb-6">
                        <label for="logo" class="inline-block text-lg mb-2">
                            Company Image
                        </label>
                        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                    </div> --}}

                    <div class="mb-6">
                        <label for="description" class="inline-block text-lg mb-2">
                            Description
                        </label>
                        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                            placeholder="Include tasks, requirements, salary, etc"></textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <button class="bg-laravel text-black rounded py-2 px-4 hover:bg-black">
                            Create Course
                        </button>

                        <a href="/" class="text-black ml-4"> Back </a>
                    </div>
                </form>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <x-flash-message />

            </div>
        </div>
    </div>
</x-layout>
