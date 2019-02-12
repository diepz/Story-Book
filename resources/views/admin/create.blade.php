@extends('layouts.app')
@section('title', 'create')
@section('content')

    <form>
        <div class="form-group">
            <label for="formGroupExampleInput">Content</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Title</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </form>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>





@endsection
