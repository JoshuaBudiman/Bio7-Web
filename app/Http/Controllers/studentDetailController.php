<?php

namespace App\Http\Controllers;

use App\Http\Controllers\api\studentDetailController as ApiStudentDetailController;
use Illuminate\Http\Request;
use App\Models\StudentDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class studentDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentDetails = StudentDetail::all();
        return view('detailStudent', compact('studentDetails'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        StudentDetail::create([
            'student_detail_id' => $request->student_detail_id,
            'student_profpic' => $request->student_profpic,
            'student_id' => $request->student_id,
        ]);
        return redirect(route('history.index'));
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'My Profile';
        $studentDetail = StudentDetail::where('id', Auth::user()->id)->first();
        return view('detailStudent', compact('title', 'studentDetail'));

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
        return view('editDetailStudent');
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studentDetail = StudentDetail::findOrFail($id);
        $studentDetail->delete();
        return redirect(route('home.index'));
        //
    }
}
