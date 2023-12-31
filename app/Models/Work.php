<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'member_id',
        'start_time',
        'end_time',
        'break_time',
        'overtime_hours',
        'note'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
