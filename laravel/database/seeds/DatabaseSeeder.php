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
         $this->call(ProductTableSeeder::class);
    }
}
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('product')->insert([
        	'name'=>'Áo thun',
        	'price'=>'5000',
        	'cate_id'=>1),
        	]);
    }
}
