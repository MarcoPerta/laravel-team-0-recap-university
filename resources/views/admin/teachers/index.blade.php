@extends('layouts.dashboard')

@section('dash-title')
Teachers Index
@endsection

@section('dash-content')
<h1 class="text-center my-5">Teachers</h1>
{{-- Create --}}
<a class="btn btn-primary my-3" href="{{ route('admin.teachers.create') }}">
    + Crea
</a>
<table class="table table-dark table-striped table-hover align-middle text-center">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Office_address</th>
            <th scope="col">Office_number</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($teachers as $teacher)
        <tr>
            <td>{{$teacher->id}}</td>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->surname}}</td>
            <td>{{$teacher->phone}}</td>
            <td>{{$teacher->email}}</td>
            <td>{{$teacher->office_address}}</td>
            <td>{{$teacher->office_number}}</td>
            <td>
                <div class="d-flex justify-content-around align-items-center">
                    <a href="{{route('admin.teachers.show', $teacher->id)}}">
                        <i class="fa-solid fa-eye text-secondary btn btn-link"></i>
                    </a>
                    <a href="{{route('admin.teachers.edit', $teacher->id)}}">
                        <i class="fa-solid fa-pen text-secondary btn btn-link"></i>
                    </a>
                    <form method="POST" action="{{route('admin.teachers.destroy', $teacher->id)}}">
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
   {{ $teachers->links() }}
</div>


@endsection
