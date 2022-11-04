<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = \App\Models\User::create([
            'name'              => 'Ramy Mohamed',
            'username'          => 'Ramy',
            'phone'             => '010658583855',
            'bio'               => 'Web Developer',
            'email'             => 'baraa@app.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password'          => bcrypt('12345678'),
            'gender'            => 'male',
            'dob'               => '1998-05-22',
            'user_type'         => 'dashboard',
            'address'           => 'Egypt, Alex',
            'postal_code'       => '123456',
            'state_province'    => '7ay 7',
            'country_id'        => '1',
            'governorate_id'    => '1',
            'city_id'           => '1',
            'facebook'          => 'facebook',
            'twitter'           => 'twitter',
            'instagram'         => 'instagram',
            'whatsApp'          => '010658583855',
            'telegram'          => 'telegram',
        ]);

        $user = \App\Models\User::create([
            'name'              => 'Mohamed Essam',
            'username'          => 'Mohamed',
            'phone'             => '010658583855',
            'bio'               => 'Web Developer',
            'email'             => 'mohamed@app.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password'          => bcrypt('12345678'),
            'gender'            => 'male',
            'dob'               => '1998-02-21',
            'user_type'         => 'dashboard',
            'address'           => 'Egypt, Cairo',
            'postal_code'       => '123456',
            'state_province'    => '7ay 7',
            'country_id'        => '1',
            'governorate_id'    => '1',
            'city_id'           => '1',
            'facebook'          => 'facebook',
            'twitter'           => 'twitter',
            'instagram'         => 'instagram',
            'whatsApp'          => '010658583855',
            'telegram'          => 'telegram',
        ]);

        $user = \App\Models\User::create([
            'name'              => 'Ahmed Sabry',
            'username'          => 'Ahmed',
            'phone'             => '010658583855',
            'bio'               => 'Web Developer',
            'email'             => 'ahmed@app.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password'          => bcrypt('12345678'),
            'gender'            => 'male',
            'dob'               => '1997-02-21',
            'user_type'         => 'dashboard',
            'address'           => 'Egypt, Cairo',
            'postal_code'       => '123456',
            'state_province'    => '7ay 7',
            'country_id'        => '1',
            'governorate_id'    => '1',
            'city_id'           => '1',
            'facebook'          => 'facebook',
            'twitter'           => 'twitter',
            'instagram'         => 'instagram',
            'whatsApp'          => '010658583855',
            'telegram'          => 'telegram',
        ]);

        $user = \App\Models\User::create([
            'name'              => 'Kareem Ali',
            'username'          => 'Kareem',
            'phone'             => '010658583855',
            'bio'               => 'Web Developer',
            'email'             => 'kareem@app.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password'          => bcrypt('12345678'),
            'gender'            => 'male',
            'dob'               => '1999-02-21',
            'user_type'         => 'dashboard',
            'address'           => 'Egypt, Cairo',
            'postal_code'       => '123456',
            'state_province'    => '7ay 7',
            'country_id'        => '1',
            'governorate_id'    => '1',
            'city_id'           => '1',
            'facebook'          => 'facebook',
            'twitter'           => 'twitter',
            'instagram'         => 'instagram',
            'whatsApp'          => '010658583855',
            'telegram'          => 'telegram',
        ]);

        $user = \App\Models\User::create([
            'name'              => 'Omar El-Shazly',
            'username'          => 'Omar',
            'phone'             => '010658583855',
            'bio'               => 'Web Developer',
            'email'             => 'omar@app.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password'          => bcrypt('12345678'),
            'gender'            => 'male',
            'dob'               => '1999-02-21',
            'user_type'         => 'dashboard',
            'address'           => 'Egypt, Cairo',
            'postal_code'       => '123456',
            'state_province'    => '7ay 7',
            'country_id'        => '1',
            'governorate_id'    => '1',
            'city_id'           => '1',
            'facebook'          => 'facebook',
            'twitter'           => 'twitter',
            'instagram'         => 'instagram',
            'whatsApp'          => '010658583855',
            'telegram'          => 'telegram',
        ]);

        $user = \App\Models\User::create([
            'name'              => 'Abdelrahman Alaa',
            'username'          => 'Abdelrahman',
            'phone'             => '010658583855',
            'bio'               => 'Web Developer',
            'email'             => 'abdelrahman@app.com',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password'          => bcrypt('12345678'),
            'gender'            => 'male',
            'dob'               => '1999-02-21',
            'user_type'         => 'dashboard',
            'address'           => 'Egypt, Cairo',
            'postal_code'       => '123456',
            'state_province'    => '7ay 7',
            'country_id'        => '1',
            'governorate_id'    => '1',
            'city_id'           => '1',
            'facebook'          => 'facebook',
            'twitter'           => 'twitter',
            'instagram'         => 'instagram',
            'whatsApp'          => '010658583855',
            'telegram'          => 'telegram',
        ]);
    }
}
