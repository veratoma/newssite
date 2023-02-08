<?php
declare(strict_types=1);
use App\Enums\NewsStatus;
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
    public function up():void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', length: 191);
            $table->text ('description') ->nullable();
            $table->string ('autor', length: 191 )->default (value: 'Админ');
            $table->enum('status',NewsStatus::all());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down():void
    {
        Schema::dropIfExists('news');
    }
};


