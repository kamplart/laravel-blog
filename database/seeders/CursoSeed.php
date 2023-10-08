<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /*
        $data[] = array('name'=>'Laravel','description' => 'El mejor FrameWork', 'categoria'=>'web' );
        $data[] = array('name'=>'Laravel','description' => 'El mejor FrameWork', 'categoria'=>'web' );
        $data[] = array('name'=>'Laravel','description' => 'El mejor FrameWork', 'categoria'=>'web' );
        $data[] = array('name'=>'Laravel','description' => 'El mejor FrameWork', 'categoria'=>'web' );

        foreach($data as $val){

            $curso = new Curso();
            $curso->name = $val['Laravel'];
            $curso->description = $val['description'];
            $curso->categoria = $val['categoria'];
            $curso->save();
        }*/

        $curso = new Curso();
        $curso->name = 'Laravel';
        $curso->description = 'El mejor FrameWork';
        $curso->categoria = 'Web';
        $curso->save();

        $curso = new Curso();
        $curso->name = 'Laravel';
        $curso->description = 'El mejor FrameWork';
        $curso->categoria = 'Web';
        $curso->save();


        $curso = new Curso();
        $curso->name = 'Laravel';
        $curso->description = 'El mejor FrameWork';
        $curso->categoria = 'Web';
        $curso->save();

    }
}
