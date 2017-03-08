@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h4>{{ Auth::user()->name }} {{ Auth::user()->surname }}</h4>
            <div class="list-group">
              <p class="list-group-item-text">Educaion : Computer En</p>
            </div>
        </div>

        <div class="col-md-8">
            {{-- NewPost --}}
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="panel-body">
                    <form class="/post/new" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <textarea class="form-control" name="body" cols="30" rows="8"></textarea>
                      </div>
                      <div class="form-group pull-right">
                        <input class="btn btn-primary" type="submit" value="Post">
                      </div>    
                    </form>
                  </div>
                </div>
            </div>

            {{-- Post Timeline --}}
            <div class="panel panel-default">
                <div class="panel-heading">Panel heading without title</div
                    <div class="panel-body">
                        Panel content
                    </div>

            </div>

        </div>
    </div>
</div>
@endsection
