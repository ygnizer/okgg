<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const RECRUIT_STATUS_NOTHING    = 0;
    const RECRUIT_STATUS_WAITING    = 1;
    const RECRUIT_STATUS_RECRUITING = 2;
    const RECRUIT_STATUSES    = [
        self::RECRUIT_STATUS_NOTHING    => 'Do nothing',
        self::RECRUIT_STATUS_WAITING    => 'Wait for recruiting',
        self::RECRUIT_STATUS_RECRUITING => 'Recruiting',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'summonerName',
        'tier',
        'twitterId',
        'email',
        'recruitStatus',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
