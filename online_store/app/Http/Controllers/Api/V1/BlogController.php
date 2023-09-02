<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        dd(app()->getLocale());
//        app()->setLocale($request->input('lang'));
//        app()->setLocale($request->header('lang'));
//       return trans('test.family', ['attribute' => 'shabanzade']);

//      $blogs = Blog::find(14);
//      return $blogs->translation;

        $blogs = Blog::with('translations')->get();

//        return $blogs;
               return BlogResource::collection($blogs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blogs = Blog::create([
            'category_id' => 1,
            'published' => 1,
//            'user_id' => auth()->id(),
             'user_id' => 1
        ]);
       $blogs->translations()->create([
          'key' => 'title',
          'locale' => 'fa',
           'value' => 'بلاگ ۴'
           ]);
       $blogs->translations()->create([
          'key'=> 'title',
           'locale'=> 'en',
           'value' => 'blog 3'

       ]);

       return $blogs->load('translations');

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
