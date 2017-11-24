<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostSectionPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_section', function (Blueprint $table) {
            $table->integer('post_id')
                ->unsigned()
                ->nullable();
            $table->foreign('post_id')
                ->references('id')
                ->on('posts')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->integer('section_id')
                ->unsigned()
                ->nullable();
            $table->foreign('section_id')    
                ->references('id')
                ->on('sections')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unique(['post_id', 'section_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_section');
    }
}
