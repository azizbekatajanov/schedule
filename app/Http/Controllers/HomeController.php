<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Room;
use App\Models\Schedule;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $teachers = Teacher::all();
        $groups = Group::all();
        $rooms = Room::all();
        $query = Schedule::query();
        if ($request->input('teacher_id') !== null) {
            $query->where(['teacher_id' => $request->input('teacher_id')]);
        }
        if ($request->input('group_id') !== null) {
            $query->where(['group_id' => $request->input('group_id')]);
        }

        if ($request->input('room_id') !== null) {
            $query->where(['room_id' => $request->input('room_id')]);
        }

        if ($request->input('teacher_name') !== null) {
            $query->whereHas('teacher', function($q) use($request) {
               $q->where('name', 'LIKE', '%'.$request->input('teacher_name').'%') ;
            });
        }
        $schedule = $query->paginate();

        return view('homepage', compact('schedule', 'teachers', 'groups', 'rooms'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
