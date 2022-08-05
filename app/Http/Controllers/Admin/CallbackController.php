<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCallback;
use App\Http\Requests\Admin\UpdateCallback;
use App\Models\Callback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CallbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $callbacks = Callback::orderBy('created_at', 'DESC')->get();
        return view('admin.callback.index', compact('callbacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.callback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateCallback  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCallback $request)
    {
        // $data = $request->all();

        // if (Callback::create($data)) {
        //     return redirect()->route('callback.index')->with('message', 'successfully added!!!');
        // }
        // return redirect()->route('callback.index')->with('message', 'successfully no added!!!');


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
        $callback = Callback::find($id);
        return view('admin.callback.edit', compact('callback'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateCallback $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCallback $request, $id)
    {
        $callback = Callback::find($id);

        $data = $request->all();

        if ($callback->update($data)) {
            return redirect()->route('callback.index')->with('message', 'changed successfully!!!');
        }
        return redirect()->route('callback.index')->with('message', 'changed no successfully!!!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $callback = Callback::find($id);

        // if ($callback->delete()) {
        //     return redirect()->route('callback.index')->with('message', 'deleted successfully!!!');
        // }

        // return redirect()->route('callback.index')->with('message', 'failed to delete successfully!!!');

    }
}
