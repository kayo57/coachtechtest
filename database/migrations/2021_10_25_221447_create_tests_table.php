<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('name');    //名前
            $table->string('gender');  //性別(TRUE:男性 FALSE:女性)
            $table->string('email');   //メールアドレス
            $table->integer('postal,8');  //郵便番号
            $table->string('address');  //住所
            $table->string('buil');             //建物
            $table->string('textarea,120');   //ご意見
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}