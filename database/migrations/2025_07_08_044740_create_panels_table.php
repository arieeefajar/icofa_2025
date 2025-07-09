 <?php

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
            Schema::create('panels', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('description')->nullable();
                $table->string('room');
                $table->string('gdrive_link')->nullable();
                $table->string('zoom_link')->nullable();
                $table->string('meeting_id')->nullable();
                $table->string('password')->nullable();
                $table->enum('type', ['online', 'offline'])->default('offline');
                $table->json('moderators');
                $table->string('time_zone')->default('Western Indonesian Time (WIB) [GMT +7]'); // Status can be 'active', 'inactive', etc.
                // Store moderators as a JSON array



                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('panels');
        }
    };
