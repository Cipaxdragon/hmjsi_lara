<?php

namespace Database\Seeders;

use App\Models\Pengurus;

use Illuminate\Database\Seeder;

class PengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Pengurus::create([
            'nama' => 'Adam',
            'divisi_id' => 2,
            'jabatan' => 1,
            'medsos' => "adam",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744171072200794/Adam.png?ex=654b9a2f&is=6539252f&hm=c70c67c1c2439727abbf1b64ab0225eb6051f2e6edd859febc97b0604f263b23&',
        ]);
        Pengurus::create([
            'nama' => 'Nadyah Adawiyah',
            'divisi_id' => 2,
            'jabatan' => 2,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744168639504446/Nadya.png?ex=654b9a2e&is=6539252e&hm=0f8a2f2b7d4011160f9f503ae631c2366aec9db426b02eeb51d4abff7d81617d&',
        ]);
        Pengurus::create([
            'nama' => 'Ahmad Ghazali',
            'divisi_id' => 2,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744168257814588/Ghazali.png?ex=654b9a2e&is=6539252e&hm=c2549eb688a0b900b73342b357e142199a5a77378f8f379c8b1597e4471c9d57&',
        ]);


    }
}
