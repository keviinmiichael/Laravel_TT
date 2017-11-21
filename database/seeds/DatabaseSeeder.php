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
        // $this->call(UsersTableSeeder::class);

		\DB::table('categories')->insert([
        ['name' => 'Notebooks'],
        ['name' => 'Netbooks'],
        ['name' => 'Tablets'],
        ['name' => 'Celulares']
      ]);


	  $product = factory(App\Product::class, 20)->create();
	  // esto es lo mismo que
	  //esto factory(App\Product::class)->times(20)->create();

    }
}
