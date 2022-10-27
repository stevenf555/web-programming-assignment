@extends('template')

@section('Title', 'Home')

@section('content')
    @php
    $images = [
        'https://www.greenscene.co.id/wp-content/uploads/2022/08/luffy-bounty.jpg',
        'https://i.pinimg.com/564x/9d/bd/d2/9dbdd20fbba3c2e587319623776d9f59.jpg',
        'https://i.pinimg.com/736x/6a/fd/ad/6afdada20f304e49e38bc48bac92b9d9.jpg',
        'https://wallpaperaccess.com/full/7518574.jpg',
        'https://wallpaperaccess.com/full/6355116.png',
        'https://i.pinimg.com/originals/ed/9d/09/ed9d09d3f2a116b592e4202c99dc922b.jpg',
        'https://i.pinimg.com/originals/fa/44/46/fa4446287dc75342a8a4c215313db261.jpg',
        'https://id-test-11.slatic.net/p/5a6ec69362e277437d3242208c23c38b.jpg',
        'https://id-test-11.slatic.net/p/c13c1f7df4a64d05ec5b7cccdc51a5b7.jpg',
        'https://id-test-11.slatic.net/p/d26a98b8af1a41bcebe202609294e6b3.jpg',
        'https://i.pinimg.com/originals/ee/e2/cb/eee2cb2b72d0155730397c411f79f189.png',
        'https://i.pinimg.com/originals/c4/34/40/c434407ea538caca74901c39c5c00a86.png',
        'https://i.pinimg.com/originals/4e/f6/02/4ef602094d20c4320a08aa314a9e5fdb.jpg'
        ]
    @endphp

    @php
    $name = [
        'Luffy',
        'Zoro',
        'Nami',
        'Usopp',
        'Sanji',
        'Chopper',
        'Robin',
        'Marshall D Teach',
        'Shanks',
        'Big Mom',
        'Kaido',
        'Shirohige',
        'Law'
        ]
    @endphp

    <div class="p-3">
    </div>
    <div class="ps-5 pe-5" style="height:1300px">
        <div class="border bg-white" style="height:1250px">
            <p class="text-center" style="font-weight:bold;font-size:20px;height:30px">List Recommendation</p>
                <div class="container" style="width:1500px;margin-left:50px">
                    <div class="row">
                            @for($i = 0; $i<12 ; $i++)
                                <div class="col p-3" style="margin-left:10px" > 
                                    <button type="submit" class="btn btn-outline-success text-start" style="width:280px" onmouseover="this.style.color='white';" onmouseout="this.style.color='gray';">
                                    <a href="" onmouseover="this.style.color='white';" onmouseout="this.style.color='black';" style="text-decoration:none;color:black">
                                        <div class="p-1" style="width:350px">
                                            <img src="{{$images[$i]}}" style="width:280px;height:300px;margin-left:-17px;margin-top:-12px">
                                            <input type="hidden" name="image" value="{{$images[$i]}}">
                                            <h4 class="mt-2">{{$name[$i]}}</h4>
                                            <input type="hidden" name="nama" value="{{$name[$i]}}">
                                        </div>
                                    </a>
                                    </button>
                                </div>
                            @endfor
                    </div>
                </div>
        </div>
    </div>

@endsection