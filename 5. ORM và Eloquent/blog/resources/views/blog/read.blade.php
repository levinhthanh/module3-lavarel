@extends('home')
@section('title', 'Bài viết')
@section('content')
     <div class="col-12">
           <div class="row">
               <div class="col-12"><h1>Bài viết</h1></div>
               <a class="btn btn-primary" href="{{ route('blog.index') }}">Quay lại</a>
               <div class="col-12">
                   @if (Session::has('success'))
                      <p class="text-success">
                         <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                      </p>
                   @endif
               </div>
               <img src="/storage/{{$blog->image1}}" style="width:30vw; height:auto;margin:auto;" alt="" srcset="">
          <table class="table table-striped">
          <thead>
          <tr>
                <th scope="col">{{$blog->title}}</th>

          </tr>
          </thead>
          <tbody>
                <tr>
                      <td  scope="col">{{$blog->content}}</td>
                </tr>

          </tbody>
          </table>
        <img src="/storage/{{$blog->image2}}" style="width:30vw; height:auto;margin:auto;" alt="" srcset="">

          </div>
      </div>
@endsection
