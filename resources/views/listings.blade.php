<h1> {{ $heading }}</h1>

@if (count($listings) == 0)
<p>No listings found</p>

@endif

@unless (count($listings) == 0)
    
@else
@endunless

@foreach ($listings as $listing)
    <div style="display:flex; justify-content:center; align-items:center; width:100%; flex-direction:column;">
        <h2>
            <a href="/listings/{{$listing['id']}}">{{ $listing['title'] }} </a>
        </h2>    
        <p style='width:40rem; display:flex;'>
            {{ $listing['description'] }}
        </p>
    </div>
@endforeach