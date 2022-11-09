<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetTikTokVideoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $tiktok_id = $request->id;
        return response()->json(['tiktokVideo' => $tiktok_id], 200);
    }
}
