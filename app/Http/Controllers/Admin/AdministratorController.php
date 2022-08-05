<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAdministrator;
use App\Http\Requests\Admin\UpdateAdministrator;
use App\Models\Administrator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrators = Administrator::orderBy('created_at', 'DESC')->get();
        return view('admin.administrator.index', compact('administrators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.administrator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateAdministrator  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdministrator $request)
    {
        $data = $request->all();
        $data['image'] = Administrator::uploadImage($request);

        if (Administrator::create($data)) {
            return redirect()->route('administrator.index')->with('message', 'информация успешно добавлена!!!');
        }
        return redirect()->route('administrator.index')->with('message', 'информация не успешно добавлена!!!');

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
        $administrator = Administrator::find($id);

        return view('admin.administrator.edit', compact('administrator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateAdministrator  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdministrator $request, $id)
    {
        $administrator = Administrator::find($id);

        $data = $request->all();
        $data['image'] = Administrator::updateImage($request, $administrator);

        if ($administrator->update($data)) {
            return redirect()->route('administrator.index')->with('message', 'успешно обновлено!!!');
        }

        return redirect()->route('administrator.index')->with('message', ' не успешно обновлено!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $administrator = Administrator::find($id);

        if (File::exists(public_path() . $administrator->image)) {
            File::delete(public_path() . $administrator->image);
        }

        if ($article->delete()) {
            return redirect()->route('administrator.index')->with('message', "успешно удален!!!");
        }
        
        return redirect()->route('administrator.index')->with('message', "Не успешно удален!!!");
    }
}
