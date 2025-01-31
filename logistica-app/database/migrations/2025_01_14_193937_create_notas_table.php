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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->date('emissao');
            $table->string('nfe')->unique();
            $table->string('cpfcnpj');
            $table->string('razaosocial');
            $table->text('municipio')->nullable();
            $table->string('ufcliente');
            $table->string('vendedor');
            $table->string('representante');
            $table->integer('volumes');
            $table->float('peso', precision:3);
            $table->float('vfrete', precision:2);
            $table->float('vnota', precision:2);
            $table->string('transportadora');
            $table->string('status')->nullable();
            $table->string('tpfrete');
            $table->float('vfretecotado', 2);
            $table->date('previsaoentrega')->nullable();
            $table->string('canhoto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
