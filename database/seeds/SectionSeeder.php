<?php

use App\Page;
use App\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Home */
        Section::create(['page_id' => Page::where('name', 'inicio')->first()->id, 'name' => 'section_1']);
        Section::create(['page_id' => Page::where('name', 'inicio')->first()->id, 'name' => 'section_2']);
        /** Empresa */
        Section::create(['page_id'   => Page::where('name', 'empresa')->first()->id, 'name' => 'section_1']);
        Section::create(['page_id'   => Page::where('name', 'empresa')->first()->id, 'name' => 'section_2']);
        Section::create(['page_id'   => Page::where('name', 'empresa')->first()->id, 'name' => 'section_3']);
        Section::create(['page_id'   => Page::where('name', 'empresa')->first()->id, 'name' => 'section_4']);
        /** Calidad */
        Section::create(['page_id'   => Page::where('name', 'calidad')->first()->id, 'name' => 'section_1']);
        Section::create(['page_id'   => Page::where('name', 'calidad')->first()->id, 'name' => 'section_2']);
        /** Laboratorio */
        Section::create(['page_id'   => Page::where('name', 'laboratorio')->first()->id, 'name' => 'section_1']);
        Section::create(['page_id'   => Page::where('name', 'laboratorio')->first()->id, 'name' => 'section_2']);
    }
}
