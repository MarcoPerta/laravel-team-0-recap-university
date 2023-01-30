@extends('layouts.dashboard')

@section('dash-title')
Exams Index
@endsection

@section('dash-content')
<h1 class="text-center my-5">Exams</h1>
{{-- Create --}}
<a class="btn btn-primary my-3" href="{{ route('admin.exams.create') }}">
    + Crea
</a>
<table class="table table-dark table-striped table-hover align-middle text-center">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Date</th>
            <th scope="col">Hour</th>
            <th scope="col">Location</th>
            <th scope="col">Address</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($exams as $exam)
        <tr>
            <td>{{$exam->id}}</td>
            <td>{{$exam->date}}</td>
            <td>{{$exam->hour}}</td>
            <td>{{$exam->location}}</td>
            <td>{{$exam->address}}</td>
            <td>
                <div class="d-flex justify-content-around align-items-center">
                    <a href="{{route('admin.exams.show', $exam->id)}}">
                        <i class="fa-solid fa-eye text-secondary btn btn-link"></i>
                    </a>
                    <a href="{{route('admin.exams.edit', $exam->id)}}">
                        <i class="fa-solid fa-pen text-secondary btn btn-link"></i>
                    </a>
                    <form method="POST" action="{{route('admin.exams.destroy', $exam->id)}}">
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
   {{ $exams->links() }}
</div>


@endsection
