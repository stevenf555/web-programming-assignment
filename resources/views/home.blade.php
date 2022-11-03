@extends('template')

@section('Title', 'Home')

@section('content')
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