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
        <div>
          <h2>{{ Auth::user()->name }}</h2>

        </div>
        <div class="d-flex">
          <div class="pr-4">
            <strong>200</strong>Posts
          </div>
          <div class="pr-4">
            <strong>610</strong>Followers
          </div>
          <div class="pr-4">
            <strong>500</strong>Following
          </div>

        </div>
        <div class="pt-3">
          <b>{{ Auth::user()->name }}</b>
          <br>
          <p>21 years<p>
        </div>
        <div class="">
          <a href="https://www.facebook.com/profile.php?id=100082679210827">My facebook</a>

        </div>

      </div>

    </div>
    <div class="row pt-5">
      <div class="col-4">
        <img src="https://www.kingfut.com/wp-content/uploads/2021/10/Salah-1-1000x600.jpg" class="w-100" alt="">

      </div>
      <div class="col-4">
        <img src="https://www.egypttoday.com/siteimages/Larg/66432.jpg" class="w-100" alt="">

      </div>
      <div class="col-4">
        <img src="http://c.files.bbci.co.uk/11F3F/production/_122653537_mohamedsalah.jpg"class="w-100" alt="">

      </div>

    </div>
</div>
@endsection
