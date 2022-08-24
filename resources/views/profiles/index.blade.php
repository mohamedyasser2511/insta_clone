@extends('layouts.app')

@section('content')
<style>
  .img3{
border-radius: 50px;
width: 80%;


  }
</style>
<div class="container">
    <div class="row">
      <div class="col-3 p-5">
         <img  src="https://img.a.transfermarkt.technology/portrait/big/148455-1546611604.jpg?lm=1" class="img3" >
      </div>
      <div class="col-9 pt-5 pl-5">
        <div class="d-flex justify-content-between align-items-baseline">
          <h2>{{$user->username }}</h2>
           <a href="/p/create">Add new post</a>

        </div>
        <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
        <div class="d-flex">
          <div class="pr-4">
            <strong>{{$user->posts->count()}}</strong>Posts
          </div>
          <div class="pr-4">
            <strong>610</strong>Followers
          </div>
          <div class="pr-4">
            <strong>500</strong>Following
          </div>

        </div>
        <div class="pt-4 font-weight-bold">
          {{$user->profile->title}}

        </div>
        <div class="pt-3">
          <b>{{ $user->name}}</b>
          <br>
          <p>{{$user->profile->description}}<p>
        </div>
        <div class="">
          <a href="#">{{$user->profile->url}}</a>

        </div>

      </div>

    </div>
    <div class="row pt-5">
       @foreach($user->posts as $post)
       <div class="col-4 pb-4">
         <a href="/p/{{$post->id}}"><img src="/storage/{{ $post->image }}" class="w-100" alt=""></a>


       </div>
       @endforeach




    </div>
</div>
@endsection
