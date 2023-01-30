@extends('layouts.dashboard')

@section('dash-title')
Exams Edit
@endsection

@section('dash-content')
<h1 class="text-center my-5">Modifica il Corso: {{$elem->date}}</h1>

<form action="{{route('admin.exams.update', $elem->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="">Date</label>
        <input value="{{$elem->date}}" type="date" name="date" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Hour</label>
        <input value="{{$elem->hour}}" type="time" name="hour" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Location</label>
        <input value="{{$elem->location}}" type="text" name="location" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Address</label>
        <input value="{{$elem->address}}" name="address" type="text" class="form-control">
    </div>

    <button class="btn btn-primary">Crea</button>

</form>

@endsection
