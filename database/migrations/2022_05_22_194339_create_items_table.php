<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->bigIncrements('id');
            $table->string('name')->collation('utf8_general_ci');
            $table->string('brand')->collation('utf8_general_ci');
            $table->text('description')->nullable()->collation('utf8_general_ci');
            $table->tinyInteger('status')->comment('0 => used, 1 => new');
            $table->bigInteger('price');
            $table->tinyInteger('negotiable')->default(1)->comment('0 => no, 1 => yes');
            $table->bigInteger('views')->default(0);
            $table->tinyInteger('swap')->default(1)->comment('0 => deny, 1 => allow');
            $table->tinyInteger('allow_comments')->default(1)->comment('0 => disable, 1 => enable');
            $table->tinyInteger('display_views')->default(1)->comment('0 => disable, 1 => enable');
            $table->tinyInteger('approval')->default(0)->comment('0 => in waitlist, 1 => approved, 2 => not approved');
            $table->timestamps();
            $table->foreignId('subCategory_id')
            ->constrained('sub_categories', 'id')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('user_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
