<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateSlider;
use App\Http\Requests\Admin\UpdateSlider;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'DESC')->get();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateSlider  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSlider $request)
    {
        $data = $request->all();
        $data['image'] = Slider::uploadImage($request);

        if (Slider::create($data)) {
            return redirect()->back()->withSuccess('Статья была успешно обновлена!');
        }

        return redirect()->back()->withSuccess('Статья Не была успешно обновлена!');
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
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit',compact('slider'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
          
        $slider->update($input);
    
        return redirect()->back()->withSuccess('Статья была успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $slider = Slider::find($id);

        if (File::exists(public_path() . $slider->image)) {
            File::delete(public_path() . $slider->image);
        }

        if ($slider->delete()) {
            return redirect()->route('slider.index')->with('message', "Слайдер удален");
        }

        return redirect()->route('slider.index')->with('message', "Не удалось удалить слайдер");
    }
}
