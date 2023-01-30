<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\Course;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'teachers' => Teacher::OrderBy('id', 'desc')->paginate(5)
        ];
        return view('admin.teachers.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newTeacher = new Teacher();
        $newTeacher->fill($data);
        $newTeacher->save();

        return redirect()->route('admin.teachers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $elem = Teacher::findOrFail($id);
        return view('admin.teachers.show', compact('elem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $elem = Teacher::findOrFail($id);
        $Corsi = Course::all();
        return view('admin.teachers.edit', compact('elem', 'Corsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $elem = Teacher::findOrFail($id);

        $elem->update($data);

        if(array_key_exists('Corsi', $data)){
            $elem->teachers()->sync($data['Corsi']);
        }else{
            $elem->teachers()->sync([]);
        }
        return redirect()->route('admin.teachers.show', $elem->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $elem = Teacher::findOrFail($id);
        $elem->delete();
        return redirect()->route('admin.teachers.index');
    }
}
