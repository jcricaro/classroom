<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    /**
     * @var string
     */
    protected $table = 'attendances';

    /**
     * @var array 
     */
    protected $fillable = [
        'user_id',
        'is_late'
    ];

    /**
     * @var array
     */
    protected $casts = [
        'is_late' => 'boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function meeting()
    {
        return $this->belongsTo(Meeting::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
