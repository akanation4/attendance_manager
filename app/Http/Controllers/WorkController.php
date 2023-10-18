<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkRequest;
use App\Models\Member;
use App\Models\Work;
use DateTime;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    public function index()
    {
        $members = Member::all();
        $date = new DateTime('now');
        if ($date->format('w') == 6) {
            $start_time = '09:00';
            $end_time = '12:00';
        } else {
            $start_time = '14:00';
            $end_time = '18:00';
        }

        return Inertia::render('Works/Index', [
            'members' => $members,
            'start_time' => $start_time,
            'end_time' => $end_time
        ]);
    }

    public function store(StoreWorkRequest $request)
    {
        $date = date('Y-m-d');

        $work = new Work($request->validated());
        $work->date = $date;
        $work->save();

        return redirect()->route('works.index')->with('message', '登録しました。');
    }

    public function show()
    {
        // $works = Work::
    }
}
