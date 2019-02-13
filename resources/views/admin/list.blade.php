@extends('layouts.app')
@section('title', 'list truyen')
@section('content')


 <div class="container">
     <table class="table">
         <thead class="thead-dark">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
         </thead>
         <tbody>
            @foreach($story as $story)
                <tr>

                    <td>{{$story->title}}</td>
                    <td>{{$story->content}}</td>
                    <td><img src="{{ asset('storage/'. $story->image[0]) }}" style="height: 100px; width:200px" class="rounded"
                              alt="image blog"></td>
                    <td><a href="{{route('admin.edit', $story->id)}}" class="btn btn-primary">Edit truyen</a></td>
                </tr>
            @endforeach
         </tbody>
     </table>
 </div>



@endsection
