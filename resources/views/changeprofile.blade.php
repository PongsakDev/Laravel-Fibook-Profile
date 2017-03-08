@extends('layouts.app')

@section('content')
 <div class="content">
   <h1>Change Profile Picture</h1>
   <form action="/profile/change" method="post" enctype="multipart/form-data">
     <div class="form-group">
       <label>Uplode new profile picture</label>
       <input type="file" class="form-control" name="avatar">
     </div>

     <div lass="form-group">
        {{csrf_field()}}
        <input type="submit" class="btn btn-success" value="Upload New Picture">
     </div>
   </form>
 </div>
@endsection