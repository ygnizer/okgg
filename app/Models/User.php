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

    const LANE_ID_FILL = 0;
    const LANE_ID_TOP  = 1;
    const LANE_ID_JG   = 2;
    const LANE_ID_MID  = 3;
    const LANE_ID_ADC  = 4;
    const LANE_ID_SUP  = 5;
    const LANE_STATUSES    = [
        self::LANE_ID_FILL    => 'Fill',
        self::LANE_ID_TOP     => 'Top',
        self::LANE_ID_JG      => 'Jg',
        self::LANE_ID_MID     => 'Mid',
        self::LANE_ID_ADC     => 'Adc',
        self::LANE_ID_SUP     => 'Sup',
    ];

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays. (then use "->toArray()")
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
