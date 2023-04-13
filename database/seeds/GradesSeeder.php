<?php

use Illuminate\Database\Seeder;
use App\Models\Grade;

class GradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                'name' => [
                    'ar' => 'المرحلة الابتدائية',
                    'en' => 'Primary stage',
                ],
                'notes' => [
                    'ar' => 'متاح قبول من سن 6 سنوات',
                    'en' => 'Acceptable from 6 years old',
                ],
            ],
            [
                'name' => [
                    'ar' => 'المرحلة الاعدادية',
                    'en' => 'middle School',
                ],

            ],
            [
                'name' => [
                    'ar' => 'المرحلة الثانوية',
                    'en' => 'High school',
                ],
            ],
        ];

        foreach ($data as $row) {
            Grade::create($row);
        }
    }
}
