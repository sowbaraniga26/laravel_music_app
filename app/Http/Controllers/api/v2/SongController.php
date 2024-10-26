<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Controllers\Controller;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{

    public function index()
    {
        $songs = Song::orderby('name','asc')->get();
        $transformedSongs =$songs->map(function($row){

            return [
                'id'=>$row->id,
                'name'=>$row->name,
                'image_path'=>$row->GetImagePath(),
            ];
        });


        return response()->json(['data' => $transformedSongs],200);
    }

}
