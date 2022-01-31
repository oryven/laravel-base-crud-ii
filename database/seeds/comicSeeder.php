<?php

use Illuminate\Database\Seeder;

use App\comic;

class comicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(comic::class, 50) -> create();
    }
}
