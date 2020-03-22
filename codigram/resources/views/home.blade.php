@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
        <img src="https://scontent.fbey5-1.fna.fbcdn.net/v/t1.0-0/p200x200/89966437_1410025839188497_220785040118775808_n.png?_nc_cat=102&_nc_sid=174925&_nc_ohc=nWKmNWtZdkkAX_5AZ-S&_nc_ht=scontent.fbey5-1.fna&oh=373c220456bbda7a4fa74c8a1facfc34&oe=5E9E6755" alt="profile-pic" class="rounded-circle"/>
        </div>
        <div class="col-9 pt-5">
        <div><h1>{{$user->username}}</h1></div>
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
    <div class="row pt-4">
    <div class="col-4">
    <img src="https://scontent.fbey5-2.fna.fbcdn.net/v/t1.0-0/p200x200/87028253_1399977326860015_2056681188889722880_o.jpg?_nc_cat=106&_nc_sid=a26aad&_nc_ohc=dAFqaUQUjJoAX_5xppO&_nc_ht=scontent.fbey5-2.fna&_nc_tp=6&oh=0d1f6171a0cfbd711acf1f0f4e710e43&oe=5E9C00DD" alt="" class="w-100"/>
    </div>
    <div class="col-4">
    <img src="https://scontent.fbey5-1.fna.fbcdn.net/v/t1.0-0/p200x200/87498675_1399977043526710_6550896286948655104_o.jpg?_nc_cat=108&_nc_sid=a26aad&_nc_ohc=XgxNI16318UAX9y1QqU&_nc_ht=scontent.fbey5-1.fna&_nc_tp=6&oh=fb1df8c7397d62b18fe3f51e78f9d490&oe=5E9EA4DB" alt="" class="w-100"/>
    </div>
    <div class="col-4">
    <img src="https://scontent.fbey5-2.fna.fbcdn.net/v/t1.0-0/p200x200/78359206_1315353088655773_1014283920251813888_o.jpg?_nc_cat=106&_nc_sid=9267fe&_nc_ohc=XLCSlpDmjCAAX85JTpR&_nc_ht=scontent.fbey5-2.fna&_nc_tp=6&oh=91a5761a40210a065c9da06a8408e362&oe=5E9B9A31" alt="" class="w-100"/>
    </div>
    </div>
</div>
@endsection
