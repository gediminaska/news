<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Story::all();
        return view('stories.index', compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $story = new Story;
        $this->collectFields($request, $story);
        $story->save();
        return redirect(route('stories.index'));


    }

    /**
     * @param Request $request
     * @param $story
     */
    public function collectFields(Request $request, $story): void
    {
        $story->title = $request->title;
        $story->author = $request->author;
        $story->body = $request->body;
    }

    /**
     * @param Story $story
     * @param $sort
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Story $story, $sort)
    {
        return view('stories.show', compact('story', 'sort'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Story $story
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story)
    {
        return view('stories.edit', compact('story'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Story $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Story $story)
    {
        $this->collectFields($request, $story);
        $story->save();
        return redirect(route('stories.index'));

    }

    /**
     * @param Story $story
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Story $story)
    {
        foreach ($story->comments as $comment) {
            $comment->delete();
        }
        $story->delete();

        return redirect(route('stories.index'));

    }
}
