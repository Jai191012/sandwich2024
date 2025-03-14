<?php
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crear un usuario administrador
        
    // Crear un usuario administrador
    User::factory()->admin()->create();

    // Crear 10 usuarios normales
    User::factory(10)->create();

    }
}
