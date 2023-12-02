<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\divisi;
use App\Models\Pengurus;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
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
            'nama' => 'Awal Prasetya Jayadi',
            'divisi_id' => 3,
            'jabatan' => 1,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744299015245934/Awal.png?ex=654b9a4d&is=6539254d&hm=c01b6fb2a8691e7ae0d63cadc622e7c3ac08257b4ca6eebb190f030110d9c175&',
        ]);
        Pengurus::create([
            'nama' => 'Syahrul',
            'divisi_id' => 3,
            'jabatan' => 2,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744302051934218/Syahrul.png?ex=654b9a4e&is=6539254e&hm=554a8c67d3cd32b932db27e92433e7fba4d5ee5bf37cd2ac97db890dc7258143&',
        ]);
        Pengurus::create([
            'nama' => 'Kurniawan A.Z Rahayaan',
            'divisi_id' => 3,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744302546845847/Vey.png?ex=654b9a4e&is=6539254e&hm=dfed71194043c782a77f22c66af43b8d2b3ac61567441c79b0db0694fa329ea9&',
        ]);
       Pengurus::create([
            'nama' => 'Ilham Ramadhan',
            'divisi_id' => 3,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744299438882887/Bojes.png?ex=654b9a4e&is=6539254e&hm=601ebfe75dc5e0d90a21b517fd1c6e69aba07432c470c88fe7926e49b36dcd2e&',
        ]);
        Pengurus::create([
            'nama' => 'Hendrawan H Hery',
            'divisi_id' => 3,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744300512612382/Hendra.png?ex=654b9a4e&is=6539254e&hm=6916e2d2a40cae84d04eb4f90f56a531a0f5254d0e1721b01f126a0f8d82978e&',
        ]);
        Pengurus::create([
            'nama' => 'Annisa Eka jayanti Santoso',
            'divisi_id' => 3,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744299912822844/Chi.png?ex=654b9a4e&is=6539254e&hm=ec04a36b43b2b8800f64e896ec6e91a0c822fcd833212d35c3d0d8bfb122bbc6&',
        ]);
        Pengurus::create([
            'nama' => 'Ni\'Matul Fajri',
            'divisi_id' => 3,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744301523439617/Nima.png?ex=654b9a4e&is=6539254e&hm=032f15575b5bd5fb7dce8a67e0ead32eca9d08c2a71e56dd9170b87c8087d35a&',
        ]);

        Pengurus::create([
            'nama' => 'Ananda Intan Pratiwi',
            'divisi_id' => 3,
            'jabatan' => 3,
            'medsos' => "",
            'gambar' => 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744301045301288/Intan.png?ex=654b9a4e&is=6539254e&hm=2f456ea7627b81b9643fdeba2f62f756df6bf00aa909c8602b71cb7f431489b9&',
        ]);




        divisi::create([
            'nama' => 'Keilmuan',
            'slug' => 'keilmuan',
            'deksripsi' => 'Divisi ini bertanggung jawab untuk mengembangkan pengetahuan dan keterampilan anggota terkait dengan bidang ilmu sistem informasi. Mereka dapat menyelenggarakan seminar, workshop, atau pelatihan untuk meningkatkan pemahaman anggota terhadap perkembangan terkini dalam dunia sistem informasi.',
        ]);

        divisi::create([
            'nama' => 'Komunikasi dan Informasi',
            'slug' => 'kominfo',
            'deksripsi' => 'Divisi ini fokus pada pengelolaan komunikasi internal dan eksternal organisasi. Tugas utama mereka melibatkan pembuatan dan penyuntingan materi promosi, seperti flyer, untuk keperluan acara dan informasi organisasi. Mereka juga dapat mengelola platform media sosial dan situs web untuk menjaga hubungan baik dengan anggota dan publik.
            ',
        ]);

        divisi::create([
            'nama' => 'Hubungan dan Masyarakat',
            'slug' => 'humas',
            'deksripsi' => 'Divisi ini bertanggung jawab untuk membangun dan menjaga hubungan baik antara organisasi dan pihak eksternal, seperti perusahaan, institusi pendidikan, dan masyarakat umum. Mereka dapat mengelola kegiatan promosi, bekerja sama dengan mitra eksternal, serta merancang strategi untuk meningkatkan citra organisasi.',
        ]);
        divisi::create([
            'nama' => 'Kaderisasi',
            'slug' => 'kaderisasi',
            'deksripsi' => 'Divisi ini bertujuan untuk membentuk dan mengembangkan kader-kader yang berkualitas di dalam organisasi. Mereka mengelola program pelatihan, mentoring, dan orientasi bagi anggota baru agar dapat berkontribusi secara maksimal dalam organisasi.',
        ]);
        divisi::create([
            'nama' => 'Kesektariatan dan Logistik',
            'slug' => 'keslog',
            'deksripsi' => 'Divisi ini memiliki dua tanggung jawab utama. Pertama, mereka memastikan bahwa semua kegiatan organisasi berjalan dengan lancar melalui manajemen logistik, termasuk pengaturan tempat, peralatan, dan kebutuhan lainnya. Kedua, mereka fokus pada kegiatan yang mendukung kesetaraan dan keadilan di dalam organisasi serta dapat terlibat dalam proyek-proyek sosial yang mendukung nilai-nilai ini.',
        ]);



        Post::factory(20)->create();
        // Pengurus::factory(20)->create();

        // Post::create([
        //     'title' => 'HMJ ta beku',
        //     'slug' => 'hmj-beku',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, dicta ea delectus reiciendis harum quidem ipsum quibusdam id laboriosam maiores consectetur repudiandae enim totam debitis earum tenetur ullam nisi! Odit.',
        //     'body' => ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, vel neque! Ad libero sint quaerat omnis earum nesciunt, suscipit, placeat temporibus dolorum nisi facere veniam rem adipisci? Libero, sequi quis? Quidem distinctio, iure consequuntur iste repudiandae, officiis perspiciatis, pariatur molestias iusto non consequatur aliquid illum voluptas dignissimos laborum vero dolores repellat magni fuga numquam! Ad non obcaecati ipsa temporibus labore? Unde ratione natus ex reiciendis praesentium id, nulla sequi officiis. Quam dolorum id necessitatibus illum inventore totam nesciunt culpa in, nisi praesentium enim ipsa similique quisquam nostrum deleniti perferendis dolorem. Eligendi nulla, eos voluptas excepturi nobis nemo molestiae ut similique aut ullam quod modi perferendis alias accusantium maxime quia beatae officia voluptatem error provident quo magnam! Voluptas assumenda exercitationem eaque? Iste pariatur facere maxime. Voluptate officiis necessitatibus numquam ea nam odio a perferendis culpa, magni ipsum labore consectetur. Aliquam hic dolor veniam quod nostrum odio est nesciunt dolorum, repudiandae iste? Reprehenderit eligendi hic voluptates. Recusandae est perspiciatis culpa sed tempore incidunt. Ab iure temporibus ullam dolores debitis delectus dicta, distinctio, necessitatibus, molestiae ipsum iusto accusantium pariatur sed reprehenderit similique incidunt? Vero praesentium nam provident saepe, numquam id maxime eaque atque nesciunt dolorem obcaecati rem sed facere illum nobis explicabo ipsum hic omnis repellat. Odit dicta perspiciatis minus culpa iusto magni. Corrupti quia vel facilis exercitationem recusandae, sed nostrum molestias cupiditate harum quam quas, laborum sequi possimus fugit assumenda id enim! Earum, aliquid quia cumque voluptatum neque dolore ex mollitia commodi! Nihil amet sapiente accusamus commodi quaerat maxime nam quo doloribus nostrum, error rerum unde nesciunt vel praesentium eveniet. Nesciunt pariatur ducimus debitis minus sequi numquam doloribus eius quia harum praesentium. Velit id totam ex recusandae enim quos nemo magni dignissimos veniam beatae molestias temporibus, ipsum, itaque quo accusantium. Illum, deserunt est! Unde, harum doloremque! Amet velit doloremque earum dolor ullam.'
        // ]);

        // Post::create([
        //     'title' => 'HMJ Kembali',
        //     'slug' => 'hmj-kembali',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, dicta ea delectus reiciendis harum quidem ipsum quibusdam id laboriosam maiores consectetur repudiandae enim totam debitis earum tenetur ullam nisi! Odit.',
        //     'body' => ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint, vel neque! Ad libero sint quaerat omnis earum nesciunt, suscipit, placeat temporibus dolorum nisi facere veniam rem adipisci? Libero, sequi quis? Quidem distinctio, iure consequuntur iste repudiandae, officiis perspiciatis, pariatur molestias iusto non consequatur aliquid illum voluptas dignissimos laborum vero dolores repellat magni fuga numquam! Ad non obcaecati ipsa temporibus labore? Unde ratione natus ex reiciendis praesentium id, nulla sequi officiis. Quam dolorum id necessitatibus illum inventore totam nesciunt culpa in, nisi praesentium enim ipsa similique quisquam nostrum deleniti perferendis dolorem. Eligendi nulla, eos voluptas excepturi nobis nemo molestiae ut similique aut ullam quod modi perferendis alias accusantium maxime quia beatae officia voluptatem error provident quo magnam! Voluptas assumenda exercitationem eaque? Iste pariatur facere maxime. Voluptate officiis necessitatibus numquam ea nam odio a perferendis culpa, magni ipsum labore consectetur. Aliquam hic dolor veniam quod nostrum odio est nesciunt dolorum, repudiandae iste? Reprehenderit eligendi hic voluptates. Recusandae est perspiciatis culpa sed tempore incidunt. Ab iure temporibus ullam dolores debitis delectus dicta, distinctio, necessitatibus, molestiae ipsum iusto accusantium pariatur sed reprehenderit similique incidunt? Vero praesentium nam provident saepe, numquam id maxime eaque atque nesciunt dolorem obcaecati rem sed facere illum nobis explicabo ipsum hic omnis repellat. Odit dicta perspiciatis minus culpa iusto magni. Corrupti quia vel facilis exercitationem recusandae, sed nostrum molestias cupiditate harum quam quas, laborum sequi possimus fugit assumenda id enim! Earum, aliquid quia cumque voluptatum neque dolore ex mollitia commodi! Nihil amet sapiente accusamus commodi quaerat maxime nam quo doloribus nostrum, error rerum unde nesciunt vel praesentium eveniet. Nesciunt pariatur ducimus debitis minus sequi numquam doloribus eius quia harum praesentium. Velit id totam ex recusandae enim quos nemo magni dignissimos veniam beatae molestias temporibus, ipsum, itaque quo accusantium. Illum, deserunt est! Unde, harum doloremque! Amet velit doloremque earum dolor ullam.'
        // ]);



    }
}
