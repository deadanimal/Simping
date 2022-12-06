<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('briefs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('brand_description');
            $table->text('brief_description');
            $table->text('caption')->nullable();
            $table->boolean('caption_required')->default(false);
            $table->text('reference_url');
            $table->integer('budget');
            $table->integer('budget_per_content');            
            $table->string('status');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });

        Schema::create('brief_hashtags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedBigInteger('brief_id');
            $table->timestamps();
        });     
        
        Schema::create('brief_account_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedBigInteger('brief_id');
            $table->timestamps();
        });   
        
        Schema::create('brief_medias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis');
            $table->string('url');
            $table->unsignedBigInteger('brief_id');
            $table->timestamps();
        });   
        
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis');
            $table->string('url');
            $table->unsignedBigInteger('brief_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });     
        
        Schema::create('content_performances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('like_count')->nullable();
            $table->integer('view_count')->nullable();
            $table->integer('comment_count')->nullable();
            $table->integer('share_count')->nullable();
            $table->unsignedBigInteger('content_id');
            $table->timestamps();
        });   
        
        Schema::table('users', function (Blueprint $table) {
            $table->integer('jenis')->nullable();
            $table->string('tiktok_handle')->nullable();
            $table->string('instagram_handle')->nullable();
        });           
                
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
