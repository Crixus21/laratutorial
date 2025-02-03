<?php

use App\Http\Controllers\ListingController;
use Faker\Provider\HtmlLorem;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// All listings
Route::get('/', [ListingController::class, 'index']);

// Single listing
Route::get('listings/{listing}', [ListingController::class, 'show']); 

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