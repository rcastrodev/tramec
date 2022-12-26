<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'          => 'CADENAS PARA EXPLORACIONES PETROLÍFERAS',
            'description'   => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia reprehenderit facilis ex quam aspernatur alias vitae debitis quae nisi non molestias rem illo, earum minima architecto perferendis quis corporis dolorem.</p>',
            'img1'          => 'images/products/Mask_Group_230.png',
            'order'         => 'AA' 
        ]);

        Product::create([
            'name'          => 'CADENAS PARA ZANJADORAS',
            'description'   => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia reprehenderit facilis ex quam aspernatur alias vitae debitis quae nisi non molestias rem illo, earum minima architecto perferendis quis corporis dolorem.</p>',
            'img1'          => 'images/products/Mask_Group_229.png',
            'order'         => 'BB' 
        ]);

        Product::create([
            'name'          => 'CADENAS PARA EQUIPOS CARTERPILLAER',
            'description'   => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia reprehenderit facilis ex quam aspernatur alias vitae debitis quae nisi non molestias rem illo, earum minima architecto perferendis quis corporis dolorem.</p>',
            'img1'          => 'images/products/Mask_Group_228.png',
            'order'         => 'CC' 
        ]);

        Product::create([
            'name'          => 'CADENAS PARA AUTOELEVADORES Y ESTIBAJE PUERTARIOS',
            'description'   => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia reprehenderit facilis ex quam aspernatur alias vitae debitis quae nisi non molestias rem illo, earum minima architecto perferendis quis corporis dolorem.</p>',
            'img1'          => 'images/products/Mask_Group_231.png',
            'order'         => 'CC' 
        ]);
    }
    
}
