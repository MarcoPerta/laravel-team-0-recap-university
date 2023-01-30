@extends('layouts.dashboard')

@section('dash-title')
Courses Index
@endsection

@section('dash-content')
<h1 class="text-center my-5">Courses</h1>
{{-- Create --}}
<a class="btn btn-primary my-3" href="{{ route('admin.courses.create') }}">
    + Crea
</a>
<table class="table table-dark table-striped table-hover align-middle text-center">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Period</th>
            <th scope="col">Year</th>
            <th scope="col">Cfu</th>
            <th scope="col">Website</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($courses as $course)
        <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->name}}</td>
            <td>{{$course->description}}</td>
            <td>{{$course->period}}</td>
            <td>{{$course->year}}</td>
            <td>{{$course->cfu}}</td>
            <td>{{$course->website}}</td>
            <td>
                <div class="d-flex justify-content-around align-items-center">
                    <a href="{{route('admin.courses.show', $course->id)}}">
                        <i class="fa-solid fa-eye text-secondary btn btn-link"></i>
                    </a>
                    <a href="{{route('admin.courses.edit', $course->id)}}">
                        <i class="fa-solid fa-pen text-secondary btn btn-link"></i>
                    </a>
                    <form method="POST" action="{{route('admin.courses.destroy', $course->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="text-danger btn btn-link" type="submit">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </div>

            </td>
        </tr>
        @endforeach

    </tbody>
</table>

<div class="d-flex justify-content-center">
   {{ $courses->links() }}
</div>


@endsection
