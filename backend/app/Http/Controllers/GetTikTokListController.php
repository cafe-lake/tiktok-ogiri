<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetTikTokListController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        \Log::debug('APIからデータ取る');
        $tiktok_list = 'ここにデータちょうだい';
        return response()->json(['tiktokList' => $tiktok_list], 200);
    }
}
