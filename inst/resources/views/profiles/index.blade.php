@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-3 p-5">
        <img src="https://cdn.worldvectorlogo.com/logos/instagram-circle.svg" class="rounded-circle  "style="height: 150px;"> 
    </div>
    <div class="col-3 pt-3">
    <div class="d-flex justify-content-between  align-items-baseline">
        <h1><?=$user->username?></h1>
        <a href="/p/create">add new post</a>
        <a href="/profile/<?=$user->id?>/edit">Edit Profile</a>
    </div>
        <div class="d-flex">
            <div class="pr-5"><strong class="pr-1"><?=$user->posts->count()?></strong>post</div>
            <div class="pr-5"><strong class="pr-1">123k</strong>followrs</div>
            <div class="pr-5"><strong class="pr-1">123k</strong>following</div>
        </div>
        <div class="pt-4 font-weight-bold"><?=$user->profile->title?></div>
        <div><?=$user->profile->description?></div>
        <div><a href="#"><?=$user->profile->url?></a></div>
    </div>   
  </div>
  <div class="row pt-5">
      @foreach ($user->posts as $post)
      <div class="col-4 pb-4">
          <a href="/p/<?=$post->id?>">
            <img src="/storage/<?=$post->image?>" class="w-100">
          </a>
      </div>
      @endforeach
      
    
    
    
  </div>
</div>
@endsection
