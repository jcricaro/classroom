<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'filename'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }
}
