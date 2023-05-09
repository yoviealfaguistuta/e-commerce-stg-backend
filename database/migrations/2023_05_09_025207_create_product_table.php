<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// "id"                    BIGSERIAL     PRIMARY KEY,
// "code"                  VARCHAR(50)   NOT NULL DEFAULT '-',
// "name"                  TEXT          NOT NULL DEFAULT '-',
// "short_description"     TEXT          NOT NULL DEFAULT '-',
// "long_description"      TEXT          NOT NULL DEFAULT '-',
// "price"                 DECIMAL(19,4) NOT NULL DEFAULT 0,
// "sale_price"            DECIMAL(19,4) NOT NULL DEFAULT 0,
// "quantity"              BIGINT        NOT NULL DEFAULT 0,
// "brand"                 VARCHAR(150)  NOT NULL DEFAULT '-',
// "is_cod"                BOOLEAN       NOT NULL DEFAULT false,
// "package_height"        INT           NOT NULL DEFAULT 0,
// "package_length"        INT           NOT NULL DEFAULT 0,
// "package_weight"        INT           NOT NULL DEFAULT 0,
// "package_width"         INT           NOT NULL DEFAULT 0,
// "warranty_description"  VARCHAR(150)  NOT NULL DEFAULT '-',
// "warranty_policy"       VARCHAR(150)  NOT NULL DEFAULT '-',
// "image_small"           TEXT          NOT NULL DEFAULT '-',
// "image_thumb"           TEXT          NOT NULL DEFAULT '-',
// "image_original"        TEXT          NOT NULL DEFAULT '-',
// "created_at"            TIMESTAMP     NOT NULL DEFAULT NOW(),
// "updated_at"            TIMESTAMP     NOT NULL DEFAULT NOW(),
// "created_by"            INT           NOT NULL DEFAULT 1

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
