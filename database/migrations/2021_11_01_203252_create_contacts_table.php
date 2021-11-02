<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateContactsTable extends Migration
{
    
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');//名前
            $table->string('gender'); //性別(TRUE:男性 FALSE:女性)
            $table->string('email'); //メールアドレス
            $table->integer('postcode,8');//郵便番号
            $table->string('address');     //住所
            $table->string('building_name');//建物
            $table->text('opinion,120');   //ご意見
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}