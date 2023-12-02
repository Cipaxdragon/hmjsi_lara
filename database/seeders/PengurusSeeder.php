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
        Pengurus::create([
            'nama' => 'Adam Abdul Majid',
            'divisi_id' => 2,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744170526933053/Sopo.png?ex=654b9a2f&is=6539252f&hm=f89520d99b37ea052de964864d3b9289c97c2435e6c16135ecab04e08c99963b&',
        ]);
        Pengurus::create([
            'nama' => 'Nur Aisyah Wulandari',
            'divisi_id' => 2,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744169037959299/Nana.png?ex=654b9a2e&is=6539252e&hm=a948fddeae49b0e5d3608ab9b9393967f21074fd3933328437ff009aaad66e8f&',
        ]);

        Pengurus::create([
            'nama' => 'Nurul Fannisa',
            'divisi_id' => 2,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744169553862716/Pani.png?ex=654b9a2f&is=6539252f&hm=f102fff4002faac7743f80962c0847c7748eef3825cd4c9275b0ff6d0ed0726e&',
        ]);
        Pengurus::create([
            'nama' => 'Muh Ridha Ilahi',
            'divisi_id' => 2,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744170103312506/Rido.png?ex=654b9a2f&is=6539252f&hm=28d0e07286b2c5f7bdb143d7501bb910be7a71da65036b0d25a6d63ecab7895c&',
        ]);
        Pengurus::create([
            'nama' => 'Nabila Faqita Masyora',
            'divisi_id' => 1,
            'jabatan' => 1,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744232720080958/Nabila.png?ex=654b9a3e&is=6539253e&hm=70815ca2564f7d03fce2e210b90522c797696cd21952bf8063585c57a05991d4&',
        ]);
        Pengurus::create([
            'nama' => 'Aswar Fajar',
            'divisi_id' => 1,
            'jabatan' => 2,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744231130431538/Aswar.png?ex=654b9a3d&is=6539253d&hm=1c5541080a4411614f1949e7b03ef41f8c1fe09a9ff81da2b05c7753ab2cec1c&',
        ]);

        Pengurus::create([
            'nama' => 'Nurhalis',
            'divisi_id' => 1,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744232124502136/Cina.png?ex=654b9a3d&is=6539253d&hm=1f9726360d4878e8a5df2342346fc61c7c7bb1a5df0c492e054a0960b847c64c&',
        ]);

        Pengurus::create([
            'nama' => 'Alya Ananda Masri',
            'divisi_id' => 1,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744230467752046/Alya.png?ex=654b9a3d&is=6539253d&hm=44a54881f14decdd27b08b5f7f63da316aff1aa180229a250af83607adf957b8&',
        ]);

        Pengurus::create([
            'nama' => 'Rahmawati',
            'divisi_id' => 1,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744233378599024/Rahma.png?ex=654b9a3e&is=6539253e&hm=21d6079392fe703900d2897669d4c2185226aa82e3a23820431bee710b3a1f01&',
        ]);
        Pengurus::create([
            'nama' => 'Risal',
            'divisi_id' => 1,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744233844154548/Risal.png?ex=654b9a3e&is=6539253e&hm=697b81a62b74deeca23d66af96c927a3bdc36a7cb5552107cbadbb18c6dd7596&',
        ]);
        Pengurus::create([
            'nama' => 'Dina',
            'divisi_id' => 1,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744233844154548/Risal.png?ex=654b9a3e&is=6539253e&hm=697b81a62b74deeca23d66af96c927a3bdc36a7cb5552107cbadbb18c6dd7596&',
        ]);


    }
}
