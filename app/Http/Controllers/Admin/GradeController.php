<?php

namespace App\Http\Controllers\Admin;

use App\Models\Grade;
use App\Http\Controllers\Controller;
use App\Http\Requests\GradesStoreRequest;
use Exception;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::all();
        return view('pages.grades.list', ['grades' => $grades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GradesStoreRequest $request)
    {

        return $request;

        try {
            $insert = Grade::create([
                'name' => [
                    'en' => $request->name['en'],
                    'ar' => $request->name['ar'],
                ],
                'notes' => [
                    'en' => $request->notes['en'],
                    'ar' => $request->notes['ar'],
                ],
            ]);

            if ($insert) {
                notify()->success(trans('admin.messages.save', ['name' => trans('admin.grade')]));
            }
        } catch (Exception $e) {
            redirect()->back()->withErrors(notify()->error($e->getMessage()));
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        return view('pages.grades.edit', compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(GradesStoreRequest $request, Grade $grade)
    {
        try {
            $grade->update([
                'name' => [
                    'en' => $request->name['en'],
                    'ar' => $request->name['ar'],
                ],
                'notes' => [
                    'en' => $request->notes['en'],
                    'ar' => $request->notes['ar'],
                ],
            ]);
            notify()->success(trans('admin.messages.save', ['name' => trans('admin.grade')]));
            return redirect()->route('grades.index');
        } catch (Exception $e) {
            notify()->error($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        //
    }
}
