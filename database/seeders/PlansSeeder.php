<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $system_plans = array(
            "Basic (Mobile app only)",
            "Standard",
            "Enterprises"
        );
        foreach( $system_plans as $system_plan )
        {
            $pln = new Plan();
            $pln->plan = $system_plan;
            $pln->created_at = now();
            $pln->updated_at = now();
            $pln->save();
        }
    }
}
