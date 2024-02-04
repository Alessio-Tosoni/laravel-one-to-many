<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'pubblico',
                'description' => 'lavoro finito e pubblicato',
                
                
            ],
            [
                'name' => 'privato',
                'description' => 'lavoro finito ma in revisione',
                
            ],
            [
                'name' => 'incompleto',
                'description' => 'da completare',
                
            ]
        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->fill($type);
            $newType->save();
        }
    
    }
}
