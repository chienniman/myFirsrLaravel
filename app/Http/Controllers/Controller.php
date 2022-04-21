<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function comment(){
        //這是第一種寫法，直接透過controller，容易受到SQL INJECTION 攻擊

        // $data=DB::table('comment')->orderby('id','desc')->get();
        // return view('comment/comment',compact('data'));

        //第二種寫法
        $data=Comment::orderby('id','desc')->get();
        return view('comment/comment',compact('data'));
    }
    public function save_comment(Request $request){
        // dd($request->all());
        // DB::table('comment')->insert([
        //     'title' => $request->cuz_title,
        //     'author' => $request->cuz_name,
        //     'context'=>$request->cuz_comment,
        // ]);
        Comment::create([
            'title' => $request->cuz_title,
            'author' => $request->cuz_name,
            'context'=>$request->cuz_comment,
        ]);
        $data=DB::table('comment')->orderby('id','desc')->get();
        return redirect('comment');
    }
    public function edit_comment($id){
        $comment=DB::table('comment')->find($id);
        return view('edit',compact('comment'));
    }
    public function delete_comment($id){
        // $target=DB::table('comment')->where('id',$id)->delete();
        Comment::where('id',$id)->delete();
        return redirect('/comment');
    }
    public function edit_board(){
        return view('edit');
    }
    public function update_comment($id,Request $request){
        DB::table('comment')->where('id',$id)->update([
            'title' => $request->cuz_title,
            'author' => $request->cuz_name,
            'context'=>$request->cuz_comment,
        ]
        );
        return redirect('/comment');

    }
    public function itemList(){
        return view('/itemsList');
    }

}
