<?php

use Faker\Provider\HtmlLorem;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('listings/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
}); 

// ugyanazt csinálja:
/* Route::get('listings/{id}', function ($id) {
    $listing = Listing::find($id);
    if($listing) {
        return view('listing', [
            'listing' => $listing
        ]);
    }
    else {
        abort(404);
    }
    
}); */

/*
Route::get('/hello', function(){
    return response("<h1>Hello world</h1>")
    ->header('Content-type', 'text/plain')
    ->header('foo', 'bar');
});

Route::get('/posts/{id}', function($id){
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request){
    return $request->name . ' ' . $request->city;
});
*/