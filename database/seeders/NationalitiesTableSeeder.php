<?php
namespace Database\Seeders;
use App\Models\Nationalitie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NationalitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nationalities')->delete();

        $nationals = [

            [
                'en'=> 'Egyptian',
                'ar'=> 'مصري'
            ],

            [

                'en'=> 'Algerian',
                'ar'=> 'جزائري'
            ],
            [

                'en'=> 'American ',
                'ar'=> 'أمريكي '
            ],
            [

                'en'=> 'saudian',
                'ar'=> 'سعودي'
            ],
            [

                'en'=> 'Yemeni',
                'ar'=> 'يمني'
            ],
            [

                'en'=> 'surian',
                'ar'=> 'سوري'
            ],
            [

                'en'=> 'libnan',
                'ar'=> 'لبناني'
            ]
        ];

        foreach ($nationals as $n) {
            Nationalitie::create(['Name' => $n]);
        }

    }
}
