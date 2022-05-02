<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Banner;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners=Banner::orderby('id','desc')->get();
        $header='';
        $slot='';
        return view('banners/banner',compact('banners','header','slot'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('banners/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path=Storage::disk('local')->put('public/banner', $request->banner_img);
        $path='/'.str_replace("public","storage",$path);
        Banner::create([
            "img_path"=>$path,
            "img_opacity"=>$request->banner_opacity,
            "weight"=>$request->banner_weight
        ]);
        return redirect('banner/create');
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
        $banner=Banner::find($id);
        return view('banners/banner_edit',compact('banner'));
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
        $banner=Banner::find($id);
        if($request->hasfile('banner_img')){
            $path=Storage::disk('local')->put('public/banner', $request->banner_img);
            $path='/'.str_replace("public","storage",$path);
            //先將舊有檔案刪除
            $target='/'.str_replace("/storage","public",$banner->img_path);//將路徑恢復到public
            Storage::disk('local')->delete($target);
            //將新資料加到舊資料中
            $banner->img_path=$path;
        }
        // Banner::update([
        //     "img_path"=>$request->img_path,
        //     "img_opacity"=>$request->img_opacity,
        //     "weight"=>$request->weight,
        // ]);

        $banner->img_opacity=$request->img_opacity;
        $banner->weight=$request->weight;
        $banner->save();
        // $banners=Banner::orderby('id','desc')->get();
        return redirect('banner');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $banner=Banner::find($id);
        $target='/'.str_replace("/storage","public",$banner->img_path);//將路徑恢復到public
        Storage::disk('local')->delete($target);
        $banner->delete();
        return redirect('banner');
    }
}
