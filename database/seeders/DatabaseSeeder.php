<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

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


        Category::create([
            'nama' => 'Keilmuan',
            'slug' => 'keilmuan',
        ]);
        Category::create([
            'nama' => 'Komunikasi dan Informasi',
            'slug' => 'kominfo',
        ]);
        Category::create([
            'nama' => 'Hubungan dan Masyarakat',
            'slug' => 'humas',
        ]);
        Category::create([
            'nama' => 'Kaderisasi',
            'slug' => 'kaderisasi',
        ]);
        Category::create([
            'nama' => 'Kesektariatan dan Logistik',
            'slug' => 'keslog',
        ]);

        Post::factory(20)->create();

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


