<?php

namespace App\Repositories ;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;


class CourseRepository  {

    public $course ;

    public function  __construct(Course $course)
    {
        $this->course= $course ;
    }

    public function all() {
     return  $this->course->orderByDesc('created_at')->get();
    }

    public function countCourse() {
        return $this->course->all();
    }


    public function teacherCourse() {
        return $this->course->where('entreprise_id', Auth::user()->id)->get();
    }

    
    public function randomCourse() {
        return $this->course->inRandomOrder()->get();
    }


}
