<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateDepartment;
use App\Http\Requests\Admin\UpdateDepartment;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::orderBy('created_at', 'DESC')->get();
        return view('admin.departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateDepartment  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDepartment $request)
    {
        $data = $request->all();
        $data['image'] = Department::uploadImage($request);

        if (Department::create($data)) {
            return redirect()->route('department.index')->with('message', 'Отдел успешно добавлен!!');
        }
        return redirect()->route('department.index')->with('message', 'Отдел не успешно добавлен!!');
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
        $department = Department::find($id);
        return view('admin.departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateDepartment  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepartment $request, $id)
    {
        $department = Department::find($id);

        $data = $request->all();
        $data['image'] = Department::updateImage($request, $department);

        if ($department->update($data)) {
            return redirect()->route('department.index')->with('message', "Отдел успешно  обновлено");
        }
        return redirect()->route('department.index')->with('message', "Не удалось успешно добавить раздел!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);

        if (File::exists(public_path() . $department->image)) {
            File::delete(public_path() . $department->image);
        }

        if ($department->delete()) {
            return redirect()->route('department.index')->with('message', "Отдел успешно удалены");
        }
        
        return redirect()->route('departmrnt.index')->with('message', "Отдел не был успешно удален");
    }

 
}
