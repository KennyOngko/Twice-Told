<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Discussion;
use App\Models\Reply;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
class DiscustionController extends Controller
{
    public function index(Request $req){
        $category = isset($req->category) ? $req->category : '-1';
        $channels= DB::table('channels')
        ->get();
        $selected_category = $channels->where('slug','like',$category)->first();

        if(isset($selected_category)){
            $diskusi = DB::table('discussions')
            ->join('users','users.id','=','discussions.user_id')
            ->where('channel_id','like',$selected_category->id)
            ->get();
        }else{
            $diskusi = DB::table('discussions')
            ->join('users','users.id','=','discussions.user_id')
            ->get();
        }
        return view('discussion_list',['channels'=>$channels, 'discussions'=>$diskusi, 'category'=>$category]);
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

    public function replies(Request $req){
        $data['diskusi'] = Discussion::where('slug','like',$req->slug)
        ->first();

        $data['replies'] = Reply::where('discussion_id',$data['diskusi']->id)
        ->paginate(10);

        // dd($data);

        return view('discussion_detail',$data);
    }

    public function makeReply(Request $req){
        $validator = Validator::make($req->all(), [
            'content'=>['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message'=>$validator->errors()
            ], 401);
        }

        $diskusi = DB::table('discussions')
        ->join('users','users.id','=','discussions.user_id')
        ->where('slug','like',$req->slug)
        ->first();

        $reply = new Reply;
        $reply->user_id = Auth::user()->id;
        $reply->discussion_id = $diskusi->id;
        $reply->content = $req->content;
        $reply->save();
        return redirect()->route('replies',$req->slug);

        session()->flash('success', 'Reply posted.');
    }
}
