<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IssuerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        //In alphabetical order
        $issuers = json_decode(file_get_contents(database_path('seeders/data/issuers.json')), true);

        foreach ($issuers as $issuer) {
            DB::table('issuers')->updateOrInsert(
                ['name' => $issuer['name']],
                [
                    'type' => $issuer['type'],
                    'website' => $issuer['website'],
                    'contact_email' => $issuer['contact_email'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
