<?php

use Illuminate\Database\Seeder;
use App\Mensagem;

class mensagemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagem::create([
            'titulo' => 'Prova de Matemática',
            'texto' => 'Prova',
            'autor' => 'Felipe'
        ]);

        Mensagem::create([
            'titulo' => 'Prova',
            'texto' => 'Prova',
            'autor' => 'Felipe'
        ]);
    }
}
