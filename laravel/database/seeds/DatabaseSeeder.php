<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Model::unguard();
        //$this->call(ProductTableSeeder::class);
        DB::table('user')->insert([
        	'hoten'=>'Nguyen Van A',
        	'tuoi'=>20,
        	'ghichu'=>'da vàng',
        ]);
    }

}
