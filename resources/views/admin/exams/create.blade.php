@extends('layouts.dashboard')

@section('dash-title')
Exams Create
@endsection

@section('dash-content')
<h1 class="text-center my-5">Crea un Exam</h1>

<form action="{{route('admin.exams.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="">Date</label>
        <input type="date" name="date" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Hour</label>
        <input type="time" name="hour" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Location</label>
        <input type="text" name="location" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Address</label>
        <input name="address" type="text" class="form-control">
    </div>

    <button class="btn btn-primary">Crea</button>

</form>

@endsection
