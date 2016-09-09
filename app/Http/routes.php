<?php

use App\Post;
use Illuminate\Http\Request;


Route::get('/', function () {
    echo "hello";
});


Route::get('/posts', ['middleware' => 'cors', function(Request $request) {
  $perPage = 10;
	$page = $request->input('page');
  $skip = 0;
  if($page){
    $skip = ($page - 1) * $perPage;
  }
  $posts = App\Post::skip($skip)->take($perPage)->get();
  return $posts;
}]);


Route::post('/posts', function() {
  var_dump($_FILES);
});
