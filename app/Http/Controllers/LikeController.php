<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Reply;

class LikeController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('JWT');
    }

    public function likeIt(Reply $reply)
    {
        $reply->like()->create([
            'user_id' => '1'
        ]);
    }

    public function unlikeIt(Reply $reply)
    {
        $reply->like()->where([
            'user_id' => auth()->id()
        ])->first()->delete();
    }
}
