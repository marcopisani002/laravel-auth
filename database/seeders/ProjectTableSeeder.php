<?php

namespace Database\Seeders;

use App\Models\project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dati = ["Laravel", "PHP", "vue+vite", "Bootstrap "];

       
        foreach ($dati as $cat) {
            
            project::create([
                "name" => $cat
            ]);
        }
        $descrizione = ["progetto con validation", "ciclo foreach", "implementazione API", "d-flex "];

       
        foreach ($descrizione as $desc) {
            
            project::create([
                "description" => $desc
            ]);
        }
    }
}
