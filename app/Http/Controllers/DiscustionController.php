<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Discussion;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
class DiscustionController extends Controller
{
    public function index(){
        $channels= DB::table('channels')
        ->get();
        $diskusi = DB::table('discussions')
        ->join('users','users.id','=','discussions.user_id')
        ->get();
        return view('discussion_list',['channels'=>$channels, 'discussions'=>$diskusi]);
    }

    public function discussion_create (){
        $channels= DB::table('channels')
        ->get();
        return view('discussion_create',['channels'=>$channels]);
    }

    public function makeDiscussion(Request $req){
        $validator = Validator::make($req->all(), [
            'title'=>['required', 'string', 'max:255'],
            'content'=>['required', 'string', 'max:255'],
            'slug'=>[ 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message'=>$validator->errors()
            ], 401);
        }
        $diskusi = new Discussion;
        $diskusi->user_id = Auth::user()->id;
        $diskusi->title = $req->title;
        $diskusi->content = $req->content;
        $diskusi->slug = Str::slug($req->title);
        $diskusi->channel_id = $req->channel;
        $diskusi->save();
        return redirect('discussion_list');
        session()->flash('success', 'Discussion posted.');
    }

    public function replies(){
        
    }
}
