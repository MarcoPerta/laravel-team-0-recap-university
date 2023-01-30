@extends('layouts.dashboard')

@section('dash-title')
Courses Show
@endsection

@section('dash-content')
<h1 class="text-center my-5">{{$elem->name}}</h1>
<div class="text-center">
    <h4 class="my-4">{{$elem->period}}</h4>
    <article>
        <p>
            {{ $elem->description }}
        </p>
    </article>
</div>


@endsection
