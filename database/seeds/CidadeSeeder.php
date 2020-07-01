<?php

use Illuminate\Database\Seeder;
use App\Cidade;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cidade::create(['nome'=>'São Paulo']);
        Cidade::create(['nome'=>'Rio de Janeiro']);
        Cidade::create(['nome'=>'Salvador']);
        Cidade::create(['nome'=>'Brasília']);
        Cidade::create(['nome'=>'Fortaleza']);
        Cidade::create(['nome'=>'Belo Horizonte']);
        Cidade::create(['nome'=>'Manaus']);
        Cidade::create(['nome'=>'Curitiba']);
        Cidade::create(['nome'=>'Recife']);
        Cidade::create(['nome'=>'Belém']);
        Cidade::create(['nome'=>'Goiânia']);
        Cidade::create(['nome'=>'Guarulhos']);
        Cidade::create(['nome'=>'Campinas']);
        Cidade::create(['nome'=>'Uberlândia']);
    }
}
