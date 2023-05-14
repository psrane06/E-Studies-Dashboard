<x-layout>
    <div class="content">

        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h2>All Courses</h2>
                    </div>
                    <div class="card-body">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Courses Name</th>
                                    <th>Category</th>
                                    <th>Instructor</th>
                                    <th>Description</th>
                                    <th>Progress</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        {{-- <td>{{ $course->thumbnail }}</td> --}}
                                        <td>{{ asset('theme/images/logo.png') }}</td>
                                        <td>{{ $course->course_name }}</td>
                                        <td>{{ 'Front-end Development' }}</td>
                                        <td>{{ $course->user_id }}</td>
                                        <td>{{ $course->description }}</td>
                                        <td>{{ $course->progress }}</td>
                                        <td>{{ 'Not Enrolled' }}</td>
                                        <td><a class="btn" href="/courses/{{ $course->id }}">View</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
