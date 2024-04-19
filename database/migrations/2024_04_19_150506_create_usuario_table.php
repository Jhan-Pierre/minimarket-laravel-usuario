<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_tipo_usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 80)->unique();
            $table->string('descripcion', 250);
        });

        Schema::create('tb_turno', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 80)->unique();
        });

        Schema::create('tb_usuario', function (Blueprint $table) {
            $table->id();
            $table->string('correo', 60)->unique();
            $table->string('contraseña', 20);
            $table->char('telefono', 9)->unique();
            $table->string('nombre', 80);
            $table->string('apellido', 80);
            $table->foreignId('id_tipo_usuario')->constrained('tb_tipo_usuario');
            $table->foreignId('id_turno')->constrained('tb_turno');
            $table->foreignId('id_estado')->constrained('tb_estado');
            $table->timestamps();
        });

        // Insertar tipos de usuario
        DB::table('tb_tipo_usuario')->insert([
            ['nombre' => 'admin', 'descripcion' => 'Rol de administrador con acceso completo al sistema'],
            ['nombre' => 'empleado', 'descripcion' => 'Rol de empleado con acceso limitado al sistema'],
        ]);

        // Insertar turnos
        DB::table('tb_turno')->insert([
            ['nombre' => 'mañana'],
            ['nombre' => 'tarde'],
            ['nombre' => 'noche'],
        ]);

        // Insertar usuarios
        DB::table('tb_usuario')->insert([
            [
                'correo' => 'admin@example.com',
                'contraseña' => 'contraseña',
                'telefono' => '123456789',
                'nombre' => 'Admin',
                'apellido' => 'Apellido',
                'id_tipo_usuario' => 1,
                'id_turno' => 1,
                'id_estado' => 1,
            ],
            [
                'correo' => 'luislopezhuari27@gmial.com',
                'contraseña' => 'contraseña',
                'telefono' => '963571612',
                'nombre' => 'Luis',
                'apellido' => 'Lopez',
                'id_tipo_usuario' => 2,
                'id_turno' => 1,
                'id_estado' => 1,
            ],
            [
                'correo' => 'empleado2@example.com',
                'contraseña' => 'contraseña',
                'telefono' => '920531900',
                'nombre' => 'Fabian',
                'apellido' => 'Ambrosio',
                'id_tipo_usuario' => 2,
                'id_turno' => 2,
                'id_estado' => 1,
            ],
            [
                'correo' => 'jeanci.99jb@gmail.com',
                'contraseña' => 'contraseña',
                'telefono' => '918505709',
                'nombre' => 'Jean',
                'apellido' => 'Benedicto',
                'id_tipo_usuario' => 2,
                'id_turno' => 3,
                'id_estado' => 1,
            ],
            [
                'correo' => 'empleado4@example.com',
                'contraseña' => 'contraseña',
                'telefono' => '991702951',
                'nombre' => 'Fabrizzio',
                'apellido' => 'Zambrano',
                'id_tipo_usuario' => 2,
                'id_turno' => 1,
                'id_estado' => 1,
            ],
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_tipo_usuario');
        Schema::dropIfExists('tb_turno');
        Schema::dropIfExists('tb_usuario');
    }
};
