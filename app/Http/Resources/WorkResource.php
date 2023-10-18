<?php

namespace App\Http\Resources;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WorkResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        // DateTimeクラス
        $start_time = new DateTime($this->start_time);
        $end_time = new DateTime($this->end_time);
        //　勤務時間を小数点付き時間に変換
        $break_time = $this->break_time;
        $difference = $end_time->diff($start_time);
        $difference_in_hours = $difference->h + ($difference->i / 60) - ($break_time / 60);
        return [
            'id' => $this->id,
            'date' => $this->date,
            'start_time' => $start_time->format('G:i'),
            'end_time' => $end_time->format('G:i'),
            'working_hours' => number_format($difference_in_hours, 1),
            'break_time' => $break_time,
            'overtime_hours' => $this->overtime_hours,
            'note' => $this->note,
        ];
    }
}
