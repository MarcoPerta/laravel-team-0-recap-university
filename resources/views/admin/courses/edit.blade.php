@extends('layouts.dashboard')

@section('dash-title')
Courses Edit
@endsection

@section('dash-content')
<h1 class="text-center my-5">Modifica il Corso: {{$elem->name}}</h1>

<form action="{{route('admin.courses.update', $elem->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="">Name</label>
        <input value="{{$elem->name}}" type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Description</label>
        <textarea name="description" class="form-control">{{$elem->description}}</textarea>
    </div>
    <div class="mb-3">
        <label for="">Period</label>
        <input value="{{$elem->period}}" type="text" name="period" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Year</label>
        <input value="{{$elem->year}}" name="year" type="number" min="1900" max="{{date('Y')}}" step="1" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Cfu</label>
        <input value="{{$elem->cfu}}" type="number" min="0" max="100" name="cfu" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Website</label>
        <input value="{{$elem->website}}" type="text" name="website" class="form-control">
    </div>

    <button class="btn btn-primary">Crea</button>

</form>

@endsection
