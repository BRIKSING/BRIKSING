<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDB extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Services', function (Blueprint $table) {
        $table->increments('id_Services');
        $table->string('description');
        $table->timestamps();
      });
      Schema::create('Property_Type', function (Blueprint $table) {
        $table->increments('id_PropertyType');
        $table->string('descriptionType');
        $table->timestamps();
      });
      Schema::create('Object', function (Blueprint $table) {
        $table->increments('id_Object');
        $table->integer('user_id')->unsigned()->index();
        $table->string('descriptionObject');
        $table->timestamps();
      });
      Schema::create('Realty', function (Blueprint $table) {
        $table->increments('id_Realty');
        $table->integer('PropertyType_id')->unsigned()->index();
        $table->integer('Object_id')->unsigned()->index();
        $table->integer('HouseType_id')->unsigned()->index();
        $table->integer('numberOfRooms');
        $table->decimal('totalArea');
        $table->integer('floor');
        $table->integer('floors')->nullable();
        $table->decimal('price');
        $table->string('descript');
        $table->string('city');
        $table->string('numberHouse');
        $table->string('apartment');
        $table->integer('Client_id')->unsigned()->index();
        $table->string('status');
        $table->timestamps();
      });
      Schema::create('Clients', function (Blueprint $table) {
        $table->increments('id_Client');
        $table->integer('user_id')->unsigned()->index();
        $table->string('firstName');
        $table->string('lastName');
        $table->string('patronomyc');
        $table->date('dateOfBirth');
        $table->string('telephone');
        $table->string('address');
        $table->timestamps();
      });
      Schema::create('Realtor', function (Blueprint $table) {
        $table->increments('id_Realtor');
        $table->integer('user_id')->unsigned()->index();
        $table->string('firstName');
        $table->string('lastName');
        $table->string('patronomyc');
        $table->string('telephone');
        $table->timestamps();
      });
      Schema::create('Deal', function (Blueprint $table) {
        $table->increments('id_Deal');
        $table->integer('Reality_id')->unsigned()->index();
        $table->integer('Realtor_id')->unsigned()->index();
        $table->integer('Services_id')->unsigned()->index();
        $table->date('dateOfDeal');
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
        Schema::dropIfExists('Property_Type');
        Schema::dropIfExists('Object');
        Schema::dropIfExists('Realty');
        Schema::dropIfExists('Clients');
        Schema::dropIfExists('Realtor');
        Schema::dropIfExists('Deal');
        Schema::dropIfExists('Services');
    }
}
