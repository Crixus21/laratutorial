@extends('layout')

@section('content')

<div style="display:flex; justify-content:center; align-items:center; width:100%; flex-direction:column;">
    <h2>
        {{ $listing['title'] }}
    </h2>    
    <p style='width:40rem; display:flex;'>
        {{ $listing['description'] }}
    </p>
</div>

@endsection