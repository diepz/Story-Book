@extends('layouts.app')
@section('title', 'create')
@section('content')

    <form method="POST" action="{{route('admin.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="title" required autofocus>
                @if($errors ->has('title'))
                    <p class="help is-danger" style="color:red; ">{{$errors->first('title')}}</p>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="content" class="col-md-4 col-form-label text-md-right">Content</label>

            <div class="col-md-6">
                <textarea rows="4" cols="50" id="content" type="text" class="form-control" name="content" required>
                </textarea>
                @if($errors ->has('content'))
                    <p class="help is-danger" style="color:red; ">{{$errors->first('content')}}</p>
                @endif
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
                    Register
                </button>
            </div>
        </div>
    </form>

@endsection
