<?php
declare(strict_types=1);
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Soursesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        \DB::table('sourses')->insert($this->getData());
    }
        private function getData():array
        {
            $data=[];
            for ($i=0; $i<10; $i++) {
                $data[] = [
                    'sourse' => \fake()->jobTitle(),
                    'url' => \fake()->url(),
                    'created_at' => now(),
                    'updated_at'=> now(),
                ];
            }
            return $data;
        }
    }
