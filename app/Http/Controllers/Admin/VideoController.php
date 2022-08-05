<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateVideo;
use App\Http\Requests\Admin\UpdateVideo;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateVideo  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVideo $request)
    {
        // $data = $request->all();

        // if (Video::create($data)) {
        //     return redirect()->route('video.index')->with('message', "Видео успешно создано");
        // }
        // return redirect()->route('video.index')->with('message', "Не удалось создать видео.");
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
        $video = Video::find($id);

        return view('admin.videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateVideo  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVideo $request, $id)
    {
        $video = Video::find($id);
        $data = $request->all();
        
        if ($video->update($data)) {
            return redirect()->route('video.index')->with('message', "Видео успешно обновлено");
        }
        return redirect()->route('video.index')->with('message', "Не удалось обновить видео.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $video = Video::find($id);

        // if ($video->delete()) {
        //     return redirect()->route('video.index')->with('message', "Видео удалено");
        // }
        // return redirect()->route('video.index')->with('message', "Не удалось удалить видео");
    }
}
