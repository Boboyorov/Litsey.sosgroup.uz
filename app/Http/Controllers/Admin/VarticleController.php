<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateVarticle;
use App\Http\Requests\Admin\UpdateVarticle;
use App\Models\Varticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class VarticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varticles = Varticle::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.varticles.index', compact('varticles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.varticles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param   App\Http\Requests\Admin\CreateVarticle $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVarticle $request)
    {
        $data = $request->all();
        $data['image'] = Varticle::uploadImage($request);
        $data['slug'] = Str::slug($request->title);

        if (Varticle::create($data)) {
            return redirect()->route('varticle.index')->with('message', 'Объявление успешно добавлена!');
        }

        return redirect()->route('varticle.index')->with('message', 'Объявление не успешно добавлена.');
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
        $varticle = Varticle::find($id);
        return view('admin.varticles.edit', compact('varticle'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateVarticle  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVarticle $request, $id)
    {
        $varticle = Varticle::find($id);

        $data = $request->all();
        $data['image'] = Varticle::updateImage($request, $varticle);

        $data['slug'] = Str::slug($request->title);

        if ($varticle->update($data)) {
            return redirect()->route('varticle.index')->with('message', 'Объявления успешно изменены!');
        }

        return redirect()->route('varticle.index')->with('message', 'Объявления не успешно изменены');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $varticle = Varticle::find($id);

        if (File::exists(public_path() . $varticle->image)) {
            File::delete(public_path() . $varticle->image);
        }

        if ($varticle->delete()) {
            return redirect()->route('varticle.index')->with('message', "Объявления удалены");
        }
        
        return redirect()->route('varticle.index')->with('message', "Не удалось удалить Объявления");

    }
    
}
