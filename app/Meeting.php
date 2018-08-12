<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'code'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
