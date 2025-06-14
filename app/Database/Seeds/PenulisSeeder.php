<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PenulisSeeder extends Seeder
{
    public function run()
    {
        //$data = [
        //    [
        //        'name' => 'Willy Achmad Nurani',
        //        'address' => 'Dsn Tumapel Ds Jatirejo',
        //        'created_at' => Time::now(),
        //        'updated_at' => Time::now()
        //    ],
        //    [
        //        'name' => 'Yohan Saka',
        //        'address' => 'Dsn Jati Ds Jatirejo',
        //        'created_at' => Time::now(),
        //        'updated_at' => Time::now()
        //    ],
        //    [
        //        'name' => 'Marcelino Mahven',
        //        'address' => 'Dsn Jetak Ds Jatirejo',
        //        'created_at' => Time::now(),
        //       'updated_at' => Time::now()
        //    ]
        //];

        // Query binding (pastikan key cocok)
        //$this->db->query('INSERT INTO penulis (name, address, created_at, updated_at) VALUES(:name:, :address:, :created_at:, :updated_at:)', $data);

        // Atau cukup pakai query builder
        //$this->db->table('penulis')->insertBatch($data);

        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 100; $i++) {
            $data = [
                'name' => $faker->name,
                'address' => $faker->address,
                'email' => $faker->unique()->safeEmail,
                'phone_number' => '08' . $faker->numerify('##########'), // Hasil: 08xxxxxxxxxx
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];

            $this->db->table('penulis')->insert($data);
        }

    }
}