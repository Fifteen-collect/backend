<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Solve
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Solve newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Solve newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Solve query()
 * @mixin \Eloquent
 */
class Solve extends Model
{
    protected $fillable = [
        'time',
        'moves',
        'clicks',
    ];

    public function getUser(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
