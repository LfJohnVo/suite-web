<?php

namespace App\Http\Livewire\Escuela;

use App\Models\Escuela\Course;
use App\Models\Escuela\CourseUser;
use App\Models\Escuela\Review;
use Livewire\Component;

class CoursesReview extends Component
{
    public $course_id, $comment;
    public $rating = 5;

    public function mount(Course $course)
    {
        $this->course_id = $course->id;
    }

    public function render()
    {
        $course = Course::find($this->course_id);
        $enrolled = CourseUser::where('course_id', $course->id)->where('user_id', auth()->user()->id)->exists();
        $review = Review::where('course_id', $course->id)->where('user_id', auth()->user()->id)->exists();
        return view('livewire.escuela.courses-review', compact('course', 'enrolled', 'review'));
    }
    public function store()
    {
        $course = Course::find($this->course_id);
        $course->reviews()->create([
            'comment' => $this->comment,
            'rating' => $this->rating,
            'user_id' => auth()->user()->id
        ]);
    }
}
