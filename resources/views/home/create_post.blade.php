<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>VoiceUP</title>
     
        @include('home.homecss')
   
    </head>
    <body>

    @include('home.nav')

    <section class="col-lg-8">
        @if (session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{session()->get('message')}}
        @endif

    </section>

<div class="container"> 

    <form class="col-lg-8 mt-5" action="{{url('/userpost')}}" method="POST" enctype="multipart/form-data" >
        @csrf
    <h1 class="mt-5 text-center"> Create post</h1>
    <br>
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter title for the post">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="description" class="form-control"  rows="3"></textarea>
        </div>

       <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Post</button>
        </div>
        </div>
</form>

    @include('home.footer')
