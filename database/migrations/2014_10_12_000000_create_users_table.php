<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments   ('id');
            $table->string       ('summonerName') ->unique()              ->comment('サモナーネーム');
            $table->string       ('tier')                                 ->comment('Tier');
            $table->string       ('twitterId')                            ->comment('twitterアカウント(@から始まるやつ)');
            $table->string       ('email')        ->unique()              ->comment('メールアドレス');
            $table->tinyinteger  ('recruitStatus')->unsigned()->default(0)->comment('募集ステータス、0:nothing, 1:waiting, 2:recruiting');
            $table->tinyinteger  ('laneFirst')    ->unsigned()->default(0)->comment('メインレーン、0:fill, 1:top, 2:jg, 3:mid, 4:adc, 5:sup');
            $table->tinyinteger  ('laneSecond')   ->unsigned()->default(0)->comment('サブレーン、0:fill, 1:top, 2:jg, 3:mid, 4:adc, 5:sup');
            $table->string       ('password')                             ->comment('パスワード');
            $table->rememberToken()                                       ->comment('パスワード再設定時のやつ');
            $table->timestamp    ('last_login_at')            ->nullable()->comment('最終ログイン');
            $table->timestamps   ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
