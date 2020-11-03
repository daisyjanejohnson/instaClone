@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/bug.jpg" style="height: 100px" alt=""/>
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
        <img src="https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/123144848_374132574008417_7084484682174980116_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=105&_nc_ohc=7OY_7j8O4uQAX-4v5Sn&_nc_tp=24&oh=60607f77ba111399d4807b536299c009&oe=5FC82CD3" class="w-100" alt="">
        </div>
        <div class="col-4">
        <img src="https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/72582693_146379760014472_2890451126257010947_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=104&_nc_ohc=nmMqhpm22ooAX-Y4cSJ&_nc_tp=24&oh=32deb4984b4d6298f37fa962d2987eb8&oe=5FC952EE" class="w-100" alt="">
        </div>
        <div class="col-4">
        <img src="https://scontent-sea1-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/69305553_2400397730205824_3926390399731585775_n.jpg?_nc_ht=scontent-sea1-1.cdninstagram.com&_nc_cat=108&_nc_ohc=PEpIjuZ65dEAX_2MYHT&_nc_tp=24&oh=a4ff82083c2324653062e6709fcf0c3b&oe=5FC86D62" class="w-100" alt="">
        </div>
    </div>
</div>
@endsection
