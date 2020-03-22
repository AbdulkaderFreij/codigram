@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="https://scontent.fbey5-1.fna.fbcdn.net/v/t1.0-0/p200x200/89966437_1410025839188497_220785040118775808_n.png?_nc_cat=102&_nc_sid=174925&_nc_ohc=nWKmNWtZdkkAX_5AZ-S&_nc_ht=scontent.fbey5-1.fna&oh=373c220456bbda7a4fa74c8a1facfc34&oe=5E9E6755" alt="profile-pic" class="rounded-circle"/>
        </div>
        <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
        <h1>{{$user->username}}</h1>
        <a href="/p/create">Add New Post</a>
        </div>
        <div class="d-flex">
        <div class="pr-5"><strong>153</strong>posts</div>
        <div class="pr-5"><strong>25k</strong>followers</div>
        <div class="pr-5"><strong>212</strong>following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
        <div>{{$user->profile->description}}</div>
        <div><a href="https://codi.tech/" target="_blank">{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">
    @foreach($user->posts as $post)
    <div class="col-4">
    <img src="../../../storage/app/public/uploads/{{$post->image}}" alt="image-post" class="w-100"/>
    </div>
        @endforeach 
 

    </div>
</div>
@endsection
