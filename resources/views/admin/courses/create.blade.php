@extends('layouts.dashboard')

@section('dash-title')
Courses Create
@endsection

@section('dash-content')
<h1 class="text-center my-5">Crea un Corso</h1>

<form action="{{route('admin.courses.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="">Period</label>
        <input type="text" name="period" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Year</label>
        <input name="year" type="number" min="1900" max="{{date('Y')}}" step="1" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Cfu</label>
        <input type="number" min="0" max="100" name="cfu" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Website</label>
        <input type="text" name="website" class="form-control">
    </div>

    <button class="btn btn-primary">Crea</button>

</form>

@endsection
