@extends('layouts.dashboard')

@section('dash-title')
Teachers Edit
@endsection

@section('dash-content')
<h1 class="text-center my-5">Modifica l'insegnate: {{$elem->date}}</h1>

<form action="{{route('admin.teachers.update', $elem->id)}}" method="POST">
    @csrf
    @method('PUT')
     <div class="mb-3">
        <label for="">Name</label>
        <input value="{{$elem->name}}" type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Surname</label>
        <input value="{{$elem->surname}}" type="text" name="surname" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Phone</label>
        <input value="{{$elem->phone}}" type="tel" name="phone" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <input value="{{$elem->email}}" name="email" type="email" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Office_address</label>
        <input value="{{$elem->office_address}}" name="office_address" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">Office_number</label>
        <input value="{{$elem->office_number}}" name="office_number" type="text" class="form-control">
    </div>

    <button class="btn btn-primary">Modifica</button>

</form>

@endsection
