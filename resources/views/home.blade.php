@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-3">
        <img src="image/avatar/avatar/{{Auth::user()->id}}/avatar.jpeg" class="img-responsive">
        <a href="/profile/change">Change Profile</a>
            <h4>{{Auth::user()->name}} {{Auth::user()->surname}} ({{ Auth::user()->nickname }})</h4>
            <div class="list-group">
              <p class="list-group-item-text"><strong>Education : </strong>{{Auth::user()->education}}</p>
              <p class="list-group-item-text"><strong>Biography : </strong>{{Auth::user()->biography}}</p>
              <p class="list-group-item-text"><strong>County : </strong>{{Auth::user()->county}}</p>
              <p class="list-group-item-text"><strong>Website : </strong> <a href="https://www.Google.com">{{Auth::user()->website}}</a></p>
            </div>
        </div>

        <div class="col-md-8">
            {{-- NewPost --}}
           <div class="panel panel-default">
               <div class="panel-heading">
                  <h3 class="panel-title">New Post</h3>
                </div>
                <div class="panel-body">
                  <form action="/post/new" method="post" enctype="multipart/form-data">
                    <div class="form-group"><textarea class="form-control" name="body" cols="30" rows="8"></textarea></div>
                    <div class="form-group pull-right">{{csrf_field()}}<input class="btn btn-primary" type="submit" value="Post"></div>    
                  </form>
                </div>
            </div>

            {{-- Post Timeline --}}
            @foreach($posts->get() as $post)
              <div class="panel panel-default">
                <div class="panel-body">
                  <h4>{{$post->owner()->first()->name}} {{$post->owner()->first()->surname}}
                    <br>
                    {{-- <small>{{$post->created_at}}</small> --}}
                    {{-- <small>{{date_format(date_create($post->created_at), "Y/m/d H:i:s")}}</small> --}}
                    <small>{{date_format(date_create($post->created_at), "Y/m/d")}}</small>
                  </h4>
                  <p>{{$post->body}}</p>
                  <a href="/like/{{$post->id}}"><strong>{{$post->likes}}Like(s)</strong></a>
                </div>
              </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
