@extends('layouts.dashboard')

@section('dash-title')
Teachers Create
@endsection

@section('dash-content')
<h1 class="text-center my-5">Crea un Teacher</h1>

<form action="{{route('admin.teachers.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Surname</label>
        <input type="text" name="surname" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Phone</label>
        <input type="tel" name="phone" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <input name="email" type="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Office_address</label>
        <input name="office_address" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Office_number</label>
        <input name="office_number" type="text" class="form-control">
    </div>

    <button class="btn btn-primary">Crea</button>

</form>

@endsection
