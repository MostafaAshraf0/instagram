@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-3 p-5">
        <img src="<?=$user->profile->profileImage()?>" class="rounded-circle  w-100"> 
    </div>
    <div class="col-3 pt-3">
    <div class="d-flex justify-content-between  align-items-baseline">
        <div class="d-flex align-items-center pb-3">
            <div class="h4"><?=$user->username?></div>

        <follow-button user-id="<?=$user->id?>" follows="<?=$follows?>"></follow-button>
        
        </div>
        @can('update', $user->profile)
       
        <a href="/p/create">add new post</a>    
        @endcan
        

       
    </div>
     @can('update', $user->profile)
        <a href="/profile/<?=$user->id?>/edit">Edit Profile</a>
            
        @endcan
        <div class="d-flex">
            <div class="pr-5"><strong class="pr-1"><?=$postCount?></strong>post</div>
            <div class="pr-5"><strong class="pr-1"><?=$followersCount?></strong>followrs</div>
            <div class="pr-5"><strong class="pr-1"><?=$followingCount?></strong>following</div>
        </div>
        <div class="pt-4 font-weight-bold"><?=$user->profile->title?></div>
        <div><?=$user->profile->description?></div>
        <div><a href="#"><?=$user->profile->url?></a></div>
    </div>   
  </div>

  <hr>

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
