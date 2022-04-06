<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function start()
    {
        return view('start');
    }

    public function enterAttempts(Request $request)
    {
        $student_1 = $request->name_1;
        $student_2 = $request->name_2;
        $student_3 = $request->name_3;
        $student_4 = $request->name_4;
        $student_5 = $request->name_5;

        return view('attempts', [
            'student_1' => $student_1,
            'student_2' => $student_2,
            'student_3' => $student_3,
            'student_4' => $student_4,
            'student_5' => $student_5
        ]);
    }

protected function computeAverageScore($midtermgrade, $finalsgrade)
{
    $average = ($midtermgrade + $finalsgrade) / 2;
    return round($average, 2);
}
public function computePower(Request $request)
{
    $student_1 = $request->student_1;
    $student_2 = $request->student_2;
    $student_3 = $request->student_3;
    $student_4 = $request->student_4;
    $student_5 = $request->student_5;

    $s1_average = $this->computeAverageScore($request->s1_midterm, $request->s1_finals);
    $s2_average = $this->computeAverageScore($request->s2_midterm, $request->s2_finals);
    $s3_average = $this->computeAverageScore($request->s3_midterm, $request->s3_finals);
    $s4_average = $this->computeAverageScore($request->s4_midterm, $request->s4_finals);
    $s5_average = $this->computeAverageScore($request->s5_midterm, $request->s5_finals);
    
    return view('scores', [
        'student_1' => $student_1,
        'student_2' => $student_2,
        'student_3' => $student_3,
        'student_4' => $student_4,
        'student_5' => $student_5,

        's1_midterm' => $request->s1_midterm,
        's1_finals' => $request->s1_finals,    
        's1_average' => $s1_average,

        's2_midterm' => $request->s2_midterm,
        's2_finals' => $request->s2_finals,    
        's2_average' => $s2_average,

        's3_midterm' => $request->s3_midterm,
        's3_finals' => $request->s3_finals,    
        's3_average' => $s3_average,

        's4_midterm' => $request->s4_midterm,
        's4_finals' => $request->s4_finals,    
        's4_average' => $s4_average,

        's5_midterm' => $request->s5_midterm,
        's5_finals' => $request->s5_finals,    
        's5_average' => $s5_average,

    ]);

    }     
}
