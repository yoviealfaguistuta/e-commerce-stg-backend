<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// "id"                  BIGSERIAL     PRIMARY KEY,
// "code"                VARCHAR(50)   NOT NULL DEFAULT '-',
// "name"                TEXT          NOT NULL DEFAULT '-',
// "description"         TEXT          NOT NULL DEFAULT '-',
// "tag"                 VARCHAR(150)  NOT NULL DEFAULT '-',
// "image_small"         TEXT          NOT NULL DEFAULT '-',
// "image_thumb"         TEXT          NOT NULL DEFAULT '-',
// "image_original"      TEXT          NOT NULL DEFAULT '-',
// "created_at"          TIMESTAMP     NOT NULL DEFAULT NOW(),
// "updated_at"          TIMESTAMP     NOT NULL DEFAULT NOW(),
// "created_by"          INT           NOT NULL DEFAULT 1

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_category', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_category');
    }
};
