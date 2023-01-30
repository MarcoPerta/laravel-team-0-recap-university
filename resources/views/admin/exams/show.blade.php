@extends('layouts.dashboard')

@section('dash-title')
Exams Show
@endsection

@section('dash-content')
<h1 class="text-center my-5">{{$elem->hour}}</h1>
<div class="text-center">
    <h4 class="my-4">{{$elem->date}}</h4>
    <article>
        <p>
            {{ $elem->location }}
        </p>
    </article>
</div>


@endsection
