@extends('layouts.app')
@section('title', 'cap nhat truyen')
@section('content')

    <form method="POST" action="{{route('admin.update', $story->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="title" value="{{$story->title}}" >
            </div>
        </div>
        <div class="form-group row">
            <label for="content" class="col-md-4 col-form-label text-md-right">Content</label>

            <div class="col-md-6">
                <input id="content" type="text" class="form-control" name="content" value="{{$story->content}}" >
            </div>
        </div>
        <div class="form-group row">
            <label for="exampleFormControlFile1" class="col-md-4 col-form-label text-md-right">Image</label>
            <div class="col-md-6">
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image[]" multiple>
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Update
                </button>
            </div>
        </div>


    </form>




@endsection
