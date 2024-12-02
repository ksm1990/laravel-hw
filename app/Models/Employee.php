<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'job_title_id', 'gender', 'age'];

    public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class);
    }

    public function roomLogs()
    {
        return $this->hasMany(RoomLog::class);
    }
}
