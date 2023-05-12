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
            $table->bigIncrements('id');
            $table->bigInteger('category_id');
            $table->bigInteger('type_id');
            $table->string('code', 50);
            $table->text('name');
            $table->text('short_description');
            $table->text('long_description');
            $table->decimal('price',19 ,4);
            $table->decimal('sale_price', 19,4);
            $table->timestamp('sale_end_time');
            $table->integer('quantity');
            $table->string('brand', 150);
            $table->boolean('is_cod');
            $table->integer('package_height');
            $table->integer('package_length');
            $table->integer('package_weight');
            $table->integer('package_width');
            $table->text('warranty_description');
            $table->text('warranty_policy');
            $table->text('thumbnail');
            $table->json('inside_box')->nullable();
            $table->json('not_include')->nullable();
            // $table->text('image_original');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->integer('created_by');

            $table->foreign('category_id')->references('id')->on('product_category')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('type_id')->references('id')->on('product_type')->onDelete('cascade')->onUpdate('cascade');
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