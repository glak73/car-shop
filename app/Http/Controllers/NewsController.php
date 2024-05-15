<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(News::class, 'news');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::latest()->get();
        return view("news.index", ["news"=> $news]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("news.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $userId = Auth::user()->id;
        $originalName = $request->file("news_avatar")->getClientOriginalName();
        $newName = uniqid() .".". $originalName;
        $file_contents = $request->file("news_avatar");
        $path = $file_contents->storeAs("news_avatars", $newName,"public");
        $news = News::create([
            "title"=> $request['title'],
            'description'=> $request['body'],
            'path_to_file'=> $path,
            'user_id' => $userId,
        ]);
        return redirect()->route('index');
    }
    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('home');
    }
}
