@extends('layouts.dashboard')

@section('dash-title')
Teachers Show
@endsection

@section('dash-content')
<h1 class="text-center my-5">{{$elem->name}}</h1>
<div class="text-center">
    <h4 class="my-4">{{$elem->surname}}</h4>
    <article>
        <p>
            {{ $elem->office_address }}
        </p>
    </article>
</div>


@endsection
