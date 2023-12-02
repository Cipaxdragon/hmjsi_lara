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


