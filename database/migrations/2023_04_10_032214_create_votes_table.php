<?php

use App\Models\Choise;
use App\Models\Division;
use App\Models\Poll;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Choise::class, 'choise_id');
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(Poll::class, 'poll_id');
            $table->foreignIdFor(Division::class, 'division_id');
            $table->foreign('choise_id')->references('id')->on('choises');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('poll_id')->references('id')->on('polls');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};
