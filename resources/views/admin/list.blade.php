@extends('layouts.app')
@section('title', 'list truyen')
@section('content')

    @if(Session::has('success'))
        <h5 class="text-primary">{{ Session::get('success')}}</h5>
    @endif

    @if(isset($message))
        <h5 class="text-primary">{{ $message }}</h5>
    @endif
 <div class="container">
     <table class="table">
         <thead class="thead-dark">
            <tr>
                <th scope="col">Tên truyện</th>
                <th scope="col">Nội dung</th>
                <th scope="col">Người viết truyện</th>
                <th scope="col">Chỉnh sửa</th>
            </tr>
         </thead>
         <tbody>
            @foreach($story as $story)
                <tr>
                    <td>{{$story->title}}</td>
                    <td>{{$story->content}}</td>
                    <td><img src="{{ asset('storage/'. $story->image[0]) }}" style="height: 100px; width:200px" class="rounded"
                              alt="image blog"></td>
                    <td><a href="{{route('admin.edit', $story->id)}}" class="btn btn-primary">Edit truyen</a>
                        <a href="{{route('admin.destroy', $story->id)}}" class="btn btn-danger">Xoa truyen</a>
                    </td>


                </tr>
            @endforeach
         </tbody>
     </table>
 </div>



@endsection
