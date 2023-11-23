-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 02:53 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hayemje`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_23_130833_create_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publised_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `excerpt`, `body`, `publised_at`, `created_at`, `updated_at`) VALUES
(1, 'Hmj Beku', 'Pada hari Senin lalu, pengumuman mengejutkan dari pihak administrasi kampus mengguncang mahasiswa. Organisasi Himpunan Mahasiswa Jurusan (HMJ) yang telah lama menjadi wadah aktivitas akademik dan sosial di lingkungan kampus resmi dibekukan. ', '\n<b>Kontroversi Pembekuan Organisasi HMJ di Kampus: Dampak dan Implikasi</b>\n<p>\n        Pada hari Senin lalu, pengumuman mengejutkan dari pihak administrasi kampus mengguncang mahasiswa. Organisasi Himpunan Mahasiswa Jurusan (HMJ) yang telah lama menjadi wadah aktivitas akademik dan sosial di lingkungan kampus resmi dibekukan. Keputusan ini menimbulkan gelombang perdebatan di kalangan mahasiswa, dengan banyaknya pendapat dan pandangan yang berbeda terkait implikasi dan keputusan tersebut.\n</p>\n<p>\n    Pembekuan HMJ yang dilakukan oleh pihak universitas didasarkan pada sejumlah alasan yang disebutkan dalam pernyataan resmi. Salah satunya adalah kekhawatiran akan terjadinya aktivitas yang bertentangan dengan peraturan kampus dan adanya konflik internal yang tidak terselesaikan dalam organisasi tersebut. Keputusan ini pun memunculkan reaksi beragam dari berbagai pihak di lingkungan kampus.\n</p>\n<p>\n    Salah satu dampak yang langsung terasa adalah kevakuman terhadap wadah bagi mahasiswa untuk menyalurkan minat dan bakat mereka di bidang akademik maupun non-akademik. HMJ selama ini menjadi salah satu wadah yang aktif dalam mengadakan kegiatan seperti seminar, workshop, serta kegiatan sosial dan kemanusiaan. Pembekuan ini berpotensi menghambat kemungkinan pengembangan diri mahasiswa di luar ranah akademik formal.\n</p>\n<div class=\"my-1\">\n    <img src=\"https://cdn.discordapp.com/attachments/1152085105641279519/1177242058143039519/images.png?ex=6571cb1a&is=655f561a&hm=a324e2b6f7402ab4cf7b57b39d032447cd1de7a68ab0b02dd7f4d6a53a0256cd&\" class=\"w-100\" alt=\"\">\n</div>\n<p>\n    Namun, di sisi lain, ada pula yang mendukung keputusan ini dengan alasan bahwa pembekuan HMJ merupakan langkah tegas untuk menjaga ketertiban dan keselamatan di lingkungan kampus. Mereka berpendapat bahwa langkah ini diperlukan untuk menyelesaikan konflik yang telah berlarut-larut dan memastikan bahwa aktivitas mahasiswa tetap berjalan sesuai dengan peraturan yang telah ditetapkan.\n</p>\n<p>\n    Sementara mahasiswa dan pihak terkait saling menunjukkan pandangan berbeda terkait keputusan ini, kini perdebatan dan dialog antara pihak universitas dan mahasiswa menjadi penting. Langkah-langkah untuk menyelesaikan konflik internal, memberikan klarifikasi terkait alasan pembekuan, dan membuka ruang diskusi untuk mencari solusi yang adil dan berkelanjutan perlu segera diambil.\n</p>\n<p>\n    Pembekuan HMJ bukanlah akhir dari segalanya. Sebaliknya, inilah saatnya bagi seluruh pihak untuk bersatu dalam merumuskan solusi yang dapat memberikan wadah yang lebih baik bagi mahasiswa untuk berkontribusi dan berkembang. Dialog terbuka, kesediaan untuk mendengarkan, dan semangat untuk mencari jalan keluar bersama menjadi kunci untuk menciptakan lingkungan kampus yang harmonis dan mendukung pertumbuhan akademik serta sosial mahasiswa.\n</p>\n<p>\n    Tetaplah terhubung dengan berbagai pihak yang terlibat, jadikan perdebatan ini sebagai momen untuk belajar dan berkembang. Meskipun pembekuan HMJ mungkin memberikan tantangan baru bagi mahasiswa, namun juga merupakan peluang untuk membangun sesuatu yang lebih baik di masa depan.\n</p>', NULL, NULL, NULL),
(2, 'hmj beku coy', 'awokaowkaow', 'kawokaowkaowkaowkaokwaokwaowkaowkaowkaokwoakwoak', NULL, '2023-11-23 05:14:17', '2023-11-23 05:14:17'),
(3, 'hmj kemali coy', 'auuu', 'auuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', NULL, '2023-11-23 05:15:09', '2023-11-23 05:15:09'),
(4, 'HMj Bisa', 'asdkaowdka', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis aliquid quia, blanditiis accusamus minima maiores similique adipisci modi, dolorem soluta illum, impedit iusto suscipit. Architecto esse rerum autem amet fuga! Cum sequi aliquid laborum magni? Sit, sint assumenda eum quaerat voluptas atque ducimus, porro ipsam accusantium at error, nam placeat sed. Enim quis maxime in officiis est exercitationem iure assumenda. Adipisci mollitia, hic est labore animi consectetur ipsa ducimus voluptatem deleniti maiores maxime dolorem tempora. Consectetur, iste, corrupti sint ducimus harum neque, vero suscipit dolor enim earum labore aliquid debitis! Esse accusantium tempora quia quae laboriosam officia maiores cumque, quo atque, nisi fuga quod voluptates, recusandae aut suscipit eveniet non nulla. Harum magni veritatis deserunt quasi officiis delectus similique ea. Et doloremque quia alias itaque, illo explicabo quis labore aspernatur fugiat vel at magnam esse, nihil nobis amet eos harum odit animi. Laborum impedit iure ipsam eveniet sequi alias consectetur! Dolorem maiores, consequuntur ad veritatis delectus illum, esse dignissimos reiciendis culpa dolore velit odit repellendus nisi nemo debitis vel mollitia et voluptate id voluptatibus incidunt quas! Consequuntur dolores mollitia alias! Possimus dolore esse id repellendus minus, voluptatibus quasi suscipit nisi assumenda saepe perspiciatis sapiente facilis dolor animi sequi? Laudantium inventore tempora numquam, placeat est ipsa tempore. Totam blanditiis temporibus sapiente? Alias et nisi modi excepturi itaque? Aperiam mollitia nemo sint dolor saepe, amet laborum fuga accusantium ut. Excepturi corrupti quibusdam neque nostrum deserunt, suscipit consequuntur quia omnis illum accusamus totam! Quam assumenda laudantium modi doloribus illum. Numquam doloremque consectetur iste mollitia vitae a animi at dicta, veritatis pariatur aperiam neque et, excepturi laborum voluptatem error esse, corrupti modi inventore rerum. Qui, aspernatur! Ab, beatae consequuntur, vel doloremque minima, atque cumque illum autem ullam omnis cupiditate facere id voluptatum ipsam est sed? Error doloribus fugit odit qui quam suscipit dolor tempora? Totam esse voluptates dolorum, quas vel quod nihil praesentium. Recusandae, sit. Libero, tempore, ullam optio, itaque iure iusto nostrum obcaecati quo illo voluptatibus quisquam repellendus ut doloribus sequi nam? Porro. Maiores modi praesentium impedit iure quia incidunt reprehenderit alias assumenda laborum, mollitia rerum aperiam, fuga quasi adipisci commodi quam debitis quidem ea ab odit, beatae saepe. Numquam nihil quasi blanditiis. Accusamus ullam, sit quia veritatis, quibusdam quis necessitatibus magnam ab officia asperiores libero obcaecati nostrum itaque doloribus consectetur? Temporibus iusto placeat eveniet atque ipsa ratione aspernatur eum sed tempora assumenda! Numquam perspiciatis deleniti amet. Possimus totam, officia voluptate quam autem magnam tempora libero quia. Ab optio, nisi dignissimos ut enim cum, inventore ducimus ipsum maxime repellendus necessitatibus fugiat! Distinctio, magnam. Asperiores, quibusdam numquam voluptatum, sed sunt fugit molestias magni nobis laborum cupiditate porro dolorum consequuntur voluptate omnis architecto non vitae modi aut tempore accusantium distinctio possimus saepe cumque! Eveniet, repudiandae! Reiciendis perferendis unde magnam nihil consectetur autem, libero ipsam tenetur dignissimos nesciunt architecto atque culpa? Quod nemo corporis ratione recusandae fuga cupiditate id voluptatem aspernatur aut quia, accusamus, animi laborum. Illum sit optio dolorem aperiam, sint, maxime repellat et iure laudantium commodi voluptatum sunt iste itaque quibusdam eius fuga corrupti aut neque? Earum nihil ea, ab esse quasi pariatur reiciendis. Laborum autem beatae fugiat dolores maxime, eum velit explicabo incidunt ad, adipisci odio porro est omnis, pariatur eius distinctio? Alias ullam harum voluptate reiciendis eaque laboriosam consectetur quas. Culpa, obcaecati. Expedita alias, ullam praesentium qui quod nam mollitia nihil sit laborum tenetur assumenda obcaecati facere totam ducimus enim dolore voluptatum veniam. Ea, officiis nisi libero quidem commodi cumque hic eos. Temporibus cum at explicabo ipsum omnis quae sed ex deleniti illo animi vel nesciunt, dolor consequatur blanditiis pariatur possimus veritatis itaque quam. Labore odit cupiditate nesciunt debitis similique sunt deleniti. Laudantium nemo doloribus temporibus hic fugiat! Corrupti necessitatibus, inventore aspernatur quod iusto unde odit consequatur tempora officia reiciendis velit saepe qui! Sit pariatur quo mollitia itaque. Minima, temporibus culpa! Architecto? Distinctio facilis accusantium tempora labore laborum accusamus aperiam sunt esse velit, inventore fuga aliquid maxime rem reiciendis adipisci incidunt soluta, exercitationem veniam eligendi vitae quasi quo ut? Nam, esse sapiente! Debitis assumenda magni, consequuntur voluptas velit culpa, cum minus officia ab, ipsa laboriosam voluptates nostrum magnam dolore labore! Distinctio neque odio quis, labore consequuntur eligendi. Ut deserunt voluptas sapiente nisi! Explicabo aspernatur quis voluptates at fuga, cumque ipsum quibusdam voluptate molestias tempora, quasi repudiandae ducimus nemo nostrum recusandae maiores quaerat accusantium ipsa culpa dolores! Explicabo numquam nam blanditiis? Eos, et! Incidunt praesentium reprehenderit accusamus libero. Excepturi reprehenderit, omnis recusandae aut accusamus animi sed natus! Molestiae ipsam adipisci ex possimus dolorum doloribus et distinctio saepe totam excepturi optio, iusto sapiente rem! Voluptatum molestiae necessitatibus culpa soluta provident. Quasi excepturi minima est velit itaque similique corporis sapiente ea officia praesentium. Eos, doloremque natus. Fuga iusto voluptate quis, in nostrum rerum illum similique! Error ad quidem soluta officia fuga illo ipsa commodi libero id molestias in perspiciatis consectetur impedit, ipsum quas totam atque necessitatibus pariatur numquam. Maxime doloremque alias illum dolores! Animi, nesciunt! Et, itaque architecto quis laudantium, quidem odio molestias quisquam aliquid libero ullam possimus, necessitatibus facilis illo quo quae velit commodi ex corporis mollitia nemo? Fuga, ab tempore! Corrupti, delectus temporibus. Et est debitis ipsum, a magni commodi delectus architecto sunt veritatis? Eveniet, libero accusantium. Vero et fugit cum ex tempore deleniti ipsam expedita aperiam, eligendi, maiores voluptates eos alias consequatur? Veniam, cum possimus! Repudiandae fuga esse quae dolores sint assumenda doloremque omnis officiis? A reiciendis placeat tempore at numquam vel, sunt itaque sapiente quod nihil assumenda qui corporis amet veniam? Et sed accusamus aliquam enim obcaecati veritatis, necessitatibus fugit quis neque nesciunt tempora tenetur, odio quasi dolores aut porro iure excepturi perferendis doloribus? Numquam incidunt tempore quam quod culpa ducimus? Debitis nulla illo natus obcaecati corrupti eos atque recusandae dicta voluptas, corporis laudantium quae porro provident dolorem quidem reprehenderit ipsa sequi accusamus laborum, hic ea? Voluptatum, architecto nisi! Id, incidunt. Optio dolor placeat doloribus quis culpa corrupti eligendi error modi quibusdam id voluptate repellat odio magnam assumenda aperiam, dignissimos unde ipsa quod impedit saepe maxime expedita sit corporis vero! Saepe. Ducimus explicabo hic tempore amet repellat ex ea libero, tempora laudantium distinctio ullam et fugiat consequatur voluptatibus perspiciatis nihil commodi eligendi animi deleniti. A at totam exercitationem magni repudiandae veniam. Iure tenetur, delectus aliquam esse consectetur harum minima accusantium at odio placeat aperiam explicabo ipsum fuga repellendus modi saepe provident necessitatibus perspiciatis, veniam ullam iusto ex nemo fugiat ea. Magnam. Ipsam laboriosam ducimus earum itaque error voluptatum accusantium sed rerum, perferendis exercitationem, non dignissimos? Laboriosam earum facere praesentium sit commodi quo inventore accusamus! Laborum qui quae explicabo distinctio, eius unde. Consectetur aut nisi, iure hic nam quia itaque soluta. Nostrum quod nam quisquam accusamus autem voluptates sequi itaque perferendis hic similique, laboriosam impedit, quidem animi, officia soluta iure ad natus! Animi fugit dolorum architecto natus eveniet vitae. Necessitatibus corrupti eveniet expedita laboriosam, et voluptate sunt sapiente tenetur vel nostrum. Blanditiis iure temporibus cumque est pariatur dolores suscipit reiciendis fugit possimus? Incidunt nulla dolor facere rem tenetur soluta asperiores quos vel dolore fugit ullam debitis sunt, quia ab voluptate eius necessitatibus. Tempore molestias qui explicabo earum. Voluptate laudantium nobis ullam nemo! Harum est laudantium dolores, cupiditate facilis nam optio quas assumenda quisquam veritatis suscipit sint? Enim magnam incidunt tempora ex aliquid modi quia mollitia libero nesciunt laborum corporis, molestiae dignissimos dolore. Assumenda cupiditate rem ullam quod praesentium, saepe dolorum dolor quisquam amet, incidunt aliquam nam quos. Perspiciatis magni excepturi ad recusandae autem, vero amet placeat aut accusantium iste minus quia esse! Alias fuga quibusdam consequuntur fugit quisquam autem quam, corrupti, a quo accusamus praesentium necessitatibus eligendi temporibus earum labore asperiores ea excepturi tempore perferendis enim. Eos ipsum dolor rerum doloribus quisquam. Ratione eligendi cumque provident quasi voluptate nam corporis asperiores distinctio eum, sunt vitae quae possimus voluptas? Alias facere ipsam assumenda aperiam aut. Saepe magni alias repellendus sequi officiis excepturi explicabo. Tempora repellendus nam voluptatibus eos, a voluptates ut sed consequuntur. Reprehenderit error unde totam in! Perspiciatis consequatur nam sapiente quaerat quo doloribus in non repudiandae provident? Modi laboriosam consectetur ipsum. Autem eum aspernatur fugiat exercitationem sint deserunt tempora adipisci obcaecati nam fugit ratione temporibus eius animi quibusdam voluptatem unde delectus, mollitia ullam dolorum. Est assumenda aut tempore possimus quibusdam sint. Sit sapiente dolorem molestiae dolor veritatis et beatae ipsum, delectus unde corrupti. Quisquam provident saepe exercitationem nemo sed illo quia nulla excepturi modi numquam incidunt praesentium, harum, corporis totam aliquid. Quisquam, eum amet a magnam veritatis repellat aliquid nesciunt nulla voluptas error commodi. Minus perspiciatis nisi eligendi adipisci, enim deserunt aperiam consequuntur! Voluptas aspernatur, alias dolorum placeat incidunt maiores deserunt! Perferendis nostrum sapiente at corrupti facilis. In ex eveniet sapiente tempore tenetur! Odio iure ex itaque quisquam maxime in minus. Reprehenderit saepe architecto pariatur neque dolorum itaque sint reiciendis! Temporibus! Accusamus ab, voluptatem quisquam error sed voluptatum quidem cumque architecto et enim mollitia dicta quis eaque distinctio at? Repellendus maiores minima ut tempore suscipit soluta odit natus aperiam magnam ullam. Unde voluptatibus facere quos necessitatibus quo, consectetur rerum. Blanditiis beatae, earum facilis tempora aspernatur reiciendis quasi expedita culpa accusamus eveniet corporis numquam quidem adipisci commodi libero magnam nesciunt molestiae minus. Nihil vero, quod alias eaque illo rem! Illum nesciunt sunt dolorem ipsa, voluptatum officia nemo iure qui, earum nisi architecto, nihil magni odio adipisci commodi dignissimos perferendis aspernatur rem quos? Eligendi porro nam iusto facilis exercitationem provident, ullam alias officia deleniti vitae libero veniam inventore. Tenetur, perspiciatis repudiandae. Facere nam, non est harum obcaecati ut quisquam error molestias repudiandae ratione. Recusandae qui aut, ullam error corrupti placeat voluptatibus sunt voluptas quasi. Tempore optio qui neque, fuga eius libero deserunt rem officia consectetur delectus corrupti architecto sed impedit non voluptas repellat. Quidem, eius officiis nulla itaque aperiam ex laboriosam suscipit, deleniti voluptatum ullam sequi dignissimos possimus quas maxime optio quisquam. Earum repellendus nisi blanditiis ullam veniam illo praesentium odio quasi molestiae. Maxime beatae cumque in numquam soluta sequi! Totam eveniet vero, aspernatur, laboriosam ea possimus mollitia ut commodi unde quos praesentium culpa enim nihil officia modi perspiciatis vitae saepe, velit error. Quasi temporibus odio, doloribus unde, blanditiis labore aliquid nostrum cupiditate accusantium dolor tenetur. Officia necessitatibus nemo dolores? Maiores praesentium minus repellat? Repellendus velit incidunt est asperiores? Recusandae repellendus odit illum. Expedita praesentium veniam voluptatum. Ea, commodi eaque porro labore veritatis perspiciatis voluptatibus debitis iure odio assumenda molestias aliquid, dolorum molestiae incidunt facilis aspernatur consectetur error ex laudantium officiis nam sint. Reiciendis, suscipit, dolorum eaque ad quaerat odio aut esse perferendis recusandae voluptatem fuga quidem sint voluptates consectetur. Laborum iste quia ad modi natus, distinctio minus sequi debitis beatae error quibusdam. Eaque deserunt possimus natus animi voluptatum facilis tenetur eum. Reprehenderit qui ea nemo alias animi ad perspiciatis dolore quam ex odio dicta consequuntur, autem pariatur iusto distinctio ab est quibusdam? Magnam doloremque, ex quis atque accusantium velit, quibusdam fugiat maiores quisquam eius totam, laborum error ipsum? Saepe, quidem eveniet nemo nulla rem dignissimos ullam quis reiciendis optio eius at incidunt! Non tempora ipsa fugiat consequuntur ex quasi velit, soluta culpa modi voluptas. Vero odit eum nam adipisci, omnis dicta modi dolorem fugiat quisquam qui cum, fuga quia quod dolorum alias? Culpa asperiores quod animi nisi. Quasi deserunt commodi in sequi, veritatis delectus fuga a harum dolore repellendus, aspernatur id asperiores odio hic ducimus accusamus consequatur eius eligendi perferendis aperiam laborum? Recusandae vel id provident sapiente ipsa officiis atque, quas voluptatum velit, dolore laborum repellat eum culpa placeat tempora animi voluptates architecto eos quae beatae molestias odit? Modi vel consequatur nesciunt! Reprehenderit deserunt aliquid repudiandae. Nisi fugiat debitis fuga, neque esse aliquam non pariatur dolores nulla. Tempora voluptates, eum laboriosam quam harum quia, hic fugiat accusantium, atque soluta porro inventore nostrum. Illum a cum cupiditate, neque excepturi ea ad laudantium inventore dolor quibusdam dolorum, nobis quod ex exercitationem minima voluptas corrupti placeat quas animi impedit laboriosam ut. Porro nisi magni quo. Ab itaque aliquam, quis eaque et non, veniam quaerat expedita rerum porro quisquam debitis quam nostrum cumque saepe beatae amet voluptates id accusamus quasi minima neque laudantium voluptatem? Eligendi, pariatur! Voluptates, quae ea! Esse, magnam quibusdam culpa aliquid saepe alias eius atque ratione repudiandae earum sapiente? Quo, voluptas ut iste perspiciatis necessitatibus, voluptatibus nihil commodi perferendis deserunt ad delectus nemo. Tenetur voluptates, sint reiciendis magnam esse hic alias quos quam nobis maiores quas culpa laudantium neque natus, ullam nihil voluptatibus. Id sed quasi veritatis perferendis quo reprehenderit iure beatae a. Maiores distinctio consequuntur esse in voluptates accusamus soluta odit quisquam, quis, quos exercitationem magnam harum pariatur autem odio impedit nam quae dolor nulla, fuga quod! Nisi cum optio est tempore! In similique numquam, adipisci aliquid beatae nobis consequatur consectetur fugiat fugit fuga sit recusandae harum explicabo voluptatibus ipsum ullam soluta natus aspernatur minus. Adipisci, laborum. Ut optio dicta esse reiciendis? Eius quasi recusandae neque, voluptatibus nostrum nulla ad nihil id molestiae incidunt animi reiciendis natus quidem maxime accusamus nisi ducimus quia architecto repudiandae fugiat blanditiis nobis fugit laborum? Vero, possimus! At velit aut quo inventore natus alias? Delectus at illum perspiciatis necessitatibus aspernatur, eius, nisi asperiores nesciunt tenetur quo ullam esse sapiente iure commodi ab totam voluptatibus vero eum earum. Nostrum impedit nesciunt saepe sint magnam sed vel facilis. Quos officiis quas nesciunt ipsum accusamus consequuntur odit labore commodi aut nemo, sunt numquam cupiditate suscipit atque, saepe, nobis quae pariatur? Minus recusandae debitis optio perferendis reiciendis itaque illo temporibus eius non quis, labore iure explicabo quod obcaecati magni nisi quibusdam atque? Vero omnis recusandae hic assumenda a voluptates tempora distinctio? Odio ea necessitatibus repudiandae ab deserunt aliquid, vero dignissimos ipsum voluptate veritatis expedita nulla mollitia ullam delectus? Doloremque inventore, porro doloribus unde, optio deleniti voluptatem numquam perspiciatis corporis accusamus ab. Maxime, ex eligendi temporibus animi iste illo modi, nulla distinctio nisi laborum repudiandae obcaecati quas vero ratione soluta sequi sunt rerum explicabo dolorem assumenda possimus! Ullam neque commodi nesciunt quis. Dolor iusto distinctio sapiente. Nostrum expedita dolorum porro hic aperiam tempore voluptatum sit et iure cum, earum veritatis. Inventore natus enim earum exercitationem voluptatibus porro amet nihil quas a unde? Quaerat accusantium saepe fugiat reiciendis sequi nam, rem exercitationem. Asperiores fuga architecto sequi perferendis, libero ea alias consectetur fugit, sunt adipisci pariatur iusto quibusdam suscipit quasi! Quas laboriosam ut delectus. Incidunt molestias non cumque rem consequuntur placeat alias dolores tempora laboriosam ipsam adipisci, excepturi ducimus eos ea nisi dicta odio reprehenderit dolorum assumenda, fugit eius sint? Molestias corrupti cumque corporis? Officiis accusamus ipsam ducimus laborum ipsum hic iste a facilis cupiditate, officia ad animi culpa optio, esse eaque perferendis dignissimos natus temporibus? Repellendus reiciendis ullam laborum rerum debitis dolores libero? Provident beatae neque sint perspiciatis similique, ipsum mollitia voluptates aperiam nam dolore labore temporibus assumenda eaque sunt velit repudiandae accusantium. Deserunt facilis fugit obcaecati ab recusandae unde blanditiis esse vitae! Molestias beatae eos repellat eum! Eius molestias nisi aperiam sed odio maxime impedit quia magni omnis quidem totam pariatur repellendus unde tenetur neque eveniet eaque id dicta, deserunt voluptatum et? Officiis accusantium animi nobis hic, asperiores quos doloremque, deserunt, inventore architecto dolores fugit! Qui dolore rem quibusdam libero aliquid! Rerum officiis repudiandae incidunt aspernatur ipsum velit, esse beatae? Qui, expedita? Dignissimos fugiat ipsum sit voluptatibus, nesciunt veritatis! Itaque fugit aliquid deserunt iste dolorum inventore, repudiandae natus at asperiores hic consectetur amet, assumenda deleniti odio tenetur minima harum ad rerum velit? Consectetur animi, temporibus alias numquam tempore ullam pariatur voluptatem harum, enim id ducimus? Unde, incidunt nostrum laborum doloremque quisquam beatae dolore, odio libero corporis, fuga quis sunt sapiente voluptatibus quam? Quas, dolorum repudiandae? Fugiat nemo vero facere consectetur quidem blanditiis architecto perspiciatis, nulla reiciendis enim vitae iste nisi ex asperiores quo culpa odit magnam quibusdam sunt itaque! Nesciunt, eum tempore. Aliquid magnam magni nesciunt accusantium similique neque natus architecto dignissimos consequuntur ea corrupti praesentium excepturi sunt quidem cum voluptate, ab ipsum quibusdam iusto. Tenetur illo nulla ipsum laborum excepturi facere? Dolorum iure sunt minima atque debitis dolore dolor voluptates voluptas doloremque culpa nobis omnis, temporibus optio, at error blanditiis necessitatibus voluptatum! Facere modi dolor corrupti possimus porro quod sint assumenda! Iste, delectus iure error perspiciatis odio a. Voluptates quos quisquam aut dolor adipisci ut quia similique, magni recusandae hic error quo inventore atque quas deleniti odio quasi corporis. Nesciunt, perspiciatis! Sapiente, inventore? Repellat, possimus temporibus eveniet vel porro sed, ratione blanditiis, ea reiciendis in est! Ducimus labore exercitationem quis neque quod at tempora quidem sunt! Fugiat laboriosam cupiditate quidem tempore! Quas minus perspiciatis mollitia, inventore nobis aut minima ipsum officiis debitis quasi voluptatem unde numquam soluta, voluptas quo! Aut voluptatum repellendus possimus natus, unde mollitia voluptatibus beatae amet nulla quod. Distinctio doloremque officiis cumque nulla quidem labore ea, architecto quibusdam amet soluta. Architecto earum, velit est quis id blanditiis, odio nostrum adipisci, officiis recusandae quo ut illum aliquid nobis. Numquam. Magni voluptatibus eligendi iusto quas harum ullam vitae numquam. Rerum doloribus ipsum, beatae corrupti eveniet suscipit incidunt dolore dolor consequatur fugiat est odit facere necessitatibus recusandae perspiciatis obcaecati laudantium saepe! Quae provident facilis tempora assumenda. Necessitatibus, aliquid consectetur? Quod reprehenderit ducimus deleniti, autem sunt omnis sapiente quisquam quibusdam dolores dignissimos animi aspernatur laboriosam molestias, consectetur blanditiis. Blanditiis facere quibusdam amet. Illo dolor placeat nisi, voluptatum reprehenderit adipisci aliquam laborum. Ad veritatis reprehenderit ipsa quibusdam saepe quam laudantium illum assumenda hic mollitia, ea quaerat suscipit voluptate tenetur? Suscipit unde dolore voluptas. Repellendus recusandae temporibus eum dignissimos non iste quod, dicta hic aliquid laboriosam odio saepe ab velit nesciunt blanditiis ratione magni sequi provident perferendis debitis beatae cupiditate! Aspernatur quas consequatur fugiat. Unde officia quod et adipisci minima, aspernatur aperiam asperiores explicabo consectetur itaque? Aliquam, laboriosam cumque! Maiores quod necessitatibus quis ab delectus esse reiciendis consequatur molestiae cumque earum. Ab, culpa magnam? Delectus nam ipsam nihil commodi necessitatibus ea, vero magni officiis harum? Quisquam qui mollitia veritatis ea itaque similique dolorum, veniam quasi rerum maiores voluptate vitae voluptas aspernatur, commodi a? Dicta. Ullam labore, architecto facere quisquam ipsam, ducimus quos error itaque odit dolores placeat perferendis dolore voluptatem consectetur et commodi hic molestiae autem. Maxime possimus autem alias consequuntur nisi corrupti numquam! Pariatur laborum magni laboriosam tempore similique eius aliquid explicabo natus sapiente? Consequuntur officia non, unde nam nostrum, placeat adipisci voluptatum cum officiis expedita itaque mollitia velit veritatis fugiat, doloremque maiores.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
