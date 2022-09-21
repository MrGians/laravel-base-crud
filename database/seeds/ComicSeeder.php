<?php

use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('data.comics');

        foreach($comics as $comic) {
            $new_comic = new Comic;
            $new_comic->fill($comic);
            $new_comic->save();
        }
    }
}
