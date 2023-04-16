<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassRoomsRequest;
use App\Models\Classroom;
use App\Models\Grade;
use Exception;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{

    public function __construct()
    {
        $this->grades = Grade::all();
    }


    public $grades;

    public function index()
    {
        $rooms =  Classroom::all();
        return view('pages.classrooms.list', ['rooms' => $rooms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return $grades; //view('pages.classrooms.create', compact(['grades']));
        return view('pages.classrooms.create', ['grades' => $this->grades]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClassRoomsRequest $request)
    {
        try {
            $creation = Classroom::create([
                'name' => [
                    'en' => $request->name['en'],
                    'ar' => $request->name['ar'],
                ],
                'grade_id' => $request->grade,
            ]);
            notify()->success('good');
            return redirect()->back();
        } catch (Exception $e) {
            notify()->error($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        return view('pages.classrooms.edit', ['classroom' => $classroom, 'grades' => $this->grades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(ClassRoomsRequest $request, Classroom $classroom)
    {
        try {
            $classroom->update([
                'name' => [
                    'en' => $request->name['en'],
                    'ar' => $request->name['ar'],
                ],
                'grade_id' => intval($request->grade),
            ]);
            notify()->success(trans('admin.messages.save', ['name' => trans('admin.grade')]));
            return redirect()->route('classrooms.index');
        } catch (Exception $e) {
            notify()->error($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        try {
            $classroom->delete();
            notify()->success('deleted');
            return redirect()->route('classrooms.index');
        } catch (Exception $e) {
            notify()->error($e->getMessage());
            return redirect()->back();
        }
    }
}
