@extends('layouts.app')

@section('content')

<div class="container">
    @forelse ($trains as $item)
        <h1>{{$item->$company}}</h1>
    @empty
        <p>no train in zone!</p>
    @endforelse
</div>
    
@endsection