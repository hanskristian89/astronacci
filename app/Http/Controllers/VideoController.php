<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\UserVideos;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    public function getVideoList()
    {
        $id_user = Auth::user()->id;
        $videoList = UserVideos::where('id_user', '=', $id_user)->get();

        return $videoList;
    }

    public function getVideoIdList()
    {
        $videoList = $this->getVideoList();
        $videoList = @json_decode(json_encode($videoList), true);

        $videoIdList = array();
        foreach ($videoList as $v) {
            array_push($videoIdList, $v['id_video']);
        }

        return $videoIdList;
    }

    public function getVideoQuota()
    {
        $level = Auth::user()->level;
        if ($level == 'A') {
            $videoQuota = 3;
        } else if ($level == 'B') {
            $videoQuota = 10;
        } else if ($level == 'C') {
            $videoQuota = INF;
        }
        return $videoQuota;
    }

    public function index()
    {
        $videoList = $this->getVideoList();
        $videoCount = count($videoList);
        $videoQuota = $this->getVideoQuota();
        $remainingQuota = $videoQuota - $videoCount;
        $videoIdList = $this->getVideoIdList();

        return view('videos', [
            "title" => "Videos",
            "videoQuota" => $videoQuota,
            "remainingQuota" => $remainingQuota,
            "videoList" => $videoIdList,
            "videos" => Video::all()
        ]);
    }

    public function show(Video $video)
    {
        $videoList = $this->getVideoList();
        $videoCount = count($videoList);
        $videoQuota = $this->getVideoQuota();
        $remainingQuota = $videoQuota - $videoCount;
        $videoIdList = $this->getVideoIdList();

        if ($remainingQuota > 0) {
            $id_user = Auth::user()->id;
            $id_video = $video->id;

            UserVideos::firstOrCreate([
                'id_user' => $id_user,
                'id_video' => $id_video
            ]);

            return view('video', [
                "title" => "Video",
                "video" => $video
            ]);
        } else {
            $id_video = $video->id;
            if (in_array($id_video, $videoIdList)) {
                return view('video', [
                    "title" => "Video",
                    "video" => $video
                ]);
            } else {
                return view('videos', [
                    "title" => "Videos",
                    "videoQuota" => $videoQuota,
                    "remainingQuota" => $remainingQuota,
                    "videoList" => $videoIdList,
                    "videos" => Video::all()
                ]);
            }
        }
    }
}
