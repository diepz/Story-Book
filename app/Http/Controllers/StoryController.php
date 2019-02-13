<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoryPost;
use App\Story;
use Illuminate\Support\Facades\Session;

class StoryController extends Controller
{

    public function index()
    {
        $story = Story::orderBy('created_at','title')->paginate(5);
        return view('admin.list', compact('story'));
    }


    public function create()
    {
        $story = Story::all();
        return view('admin.create', compact('story'));
    }

    public function store(StoryPost $request)
    {
        $story = new Story();
        $story->title = $request->input('title');
        $story->content = $request->input('content');

        if ($request->hasFile('image')) {
            $files = [];
            foreach ($request->file('image') as $image) {
//                $image = $request->image;
                $path = $image->store('image', 'public');
                array_push($files, $path);
            }
            $story->image = $files;

        }

        $story->save();
        Session::flash('Success', 'Them moi thanh cong');
        return redirect()->route('admin.list');

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $story = Story::findOrfail($id);
        return view('admin.edit', compact('story'));
    }

    public function update(StoryPost $request, $id)
    {
        $story = Story::findOrfail($id);
        $story->title = $request->input('title');
        $story->content = $request->input('content');

        if ($request->hasFile('image')) {
            $files = [];
            foreach ($request->file('image') as $image) {
//                $image = $request->image;
                $path = $image->store('image', 'public');
                array_push($files, $path);
            }
            $story->image = $files;

        }
        $story->save();
        Session::flash('succes', 'Cap nhat bai viet thanh cong');
        return redirect()->route('admin.list');
    }

    public function destroy($id)
    {
        $story = Story::findOrfail($id);
        $story->delete();
        return redirect()->route('admin.list');
    }
}
