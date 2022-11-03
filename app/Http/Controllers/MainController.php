<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        ];
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
        ];
        return view('home', array('images' => $images, 'name' =>$name));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
