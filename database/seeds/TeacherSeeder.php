<?php

use Illuminate\Database\Seeder;
use App\Models\TeacherModel as MainModel;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MainModel::class, 20)->create();
    }
}
