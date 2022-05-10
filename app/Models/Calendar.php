<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Calendar extends Model
{
    use HasFactory, Uuids;
    protected $table='calendars';
    protected $fillable = [
        'id',
        'calendar_id',
        'title',
        'description'

    ];
}
