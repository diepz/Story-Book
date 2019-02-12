<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $story = Story::all();
        return view('admin.list', $story);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $story = Story::all();
        return view('admin.create', $story);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
