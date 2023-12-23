-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 08:38 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `divisis`
--

CREATE TABLE `divisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deksripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisis`
--

INSERT INTO `divisis` (`id`, `nama`, `slug`, `deksripsi`, `created_at`, `updated_at`) VALUES
(1, 'Keilmuan', 'keilmuan', 'Divisi ini bertanggung jawab untuk mengembangkan pengetahuan dan keterampilan anggota terkait dengan bidang ilmu sistem informasi. Mereka dapat menyelenggarakan seminar, workshop, atau pelatihan untuk meningkatkan pemahaman anggota terhadap perkembangan terkini dalam dunia sistem informasi.', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(2, 'Komunikasi dan Informasi', 'kominfo', 'Divisi ini fokus pada pengelolaan komunikasi internal dan eksternal organisasi. Tugas utama mereka melibatkan pembuatan dan penyuntingan materi promosi, seperti flyer, untuk keperluan acara dan informasi organisasi. Mereka juga dapat mengelola platform media sosial dan situs web untuk menjaga hubungan baik dengan anggota dan publik.\n            ', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(3, 'Hubungan dan Masyarakat', 'humas', 'Divisi ini bertanggung jawab untuk membangun dan menjaga hubungan baik antara organisasi dan pihak eksternal, seperti perusahaan, institusi pendidikan, dan masyarakat umum. Mereka dapat mengelola kegiatan promosi, bekerja sama dengan mitra eksternal, serta merancang strategi untuk meningkatkan citra organisasi.', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(4, 'Kaderisasi', 'kaderisasi', 'Divisi ini bertujuan untuk membentuk dan mengembangkan kader-kader yang berkualitas di dalam organisasi. Mereka mengelola program pelatihan, mentoring, dan orientasi bagi anggota baru agar dapat berkontribusi secara maksimal dalam organisasi.', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(5, 'Kesektariatan dan Logistik', 'keslog', 'Divisi ini memiliki dua tanggung jawab utama. Pertama, mereka memastikan bahwa semua kegiatan organisasi berjalan dengan lancar melalui manajemen logistik, termasuk pengaturan tempat, peralatan, dan kebutuhan lainnya. Kedua, mereka fokus pada kegiatan yang mendukung kesetaraan dan keadilan di dalam organisasi serta dapat terlibat dalam proyek-proyek sosial yang mendukung nilai-nilai ini.', '2023-12-15 08:07:09', '2023-12-15 08:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeries`
--

CREATE TABLE `galeries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `kegiatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeries`
--

INSERT INTO `galeries` (`id`, `nama`, `kegiatan_id`, `link`, `created_at`, `updated_at`) VALUES
(1, 'halis Jabat tangan ', 1, 'https://cdn.discordapp.com/attachments/1152085105641279519/1180512142340923513/DSC09925.JPG?ex=657db09b&is=656b3b9b&hm=80317ca7f5e87b3c3e8429e38307e602ed99f917f3578fbbd3812f4d14182b95&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(2, NULL, 2, 'https://via.placeholder.com/640x480.png/0088bb?text=ad', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(3, NULL, 3, 'https://via.placeholder.com/640x480.png/0055dd?text=animi', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(4, NULL, 7, 'https://via.placeholder.com/640x480.png/00bbdd?text=omnis', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(5, NULL, 8, 'https://via.placeholder.com/640x480.png/007744?text=quis', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(6, NULL, 1, 'https://via.placeholder.com/640x480.png/006600?text=architecto', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(7, NULL, 3, 'https://via.placeholder.com/640x480.png/007777?text=occaecati', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(8, NULL, 6, 'https://via.placeholder.com/640x480.png/006655?text=sit', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(9, NULL, 7, 'https://via.placeholder.com/640x480.png/0022aa?text=dolores', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(10, NULL, 10, 'https://via.placeholder.com/640x480.png/0033bb?text=sunt', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(11, NULL, 10, 'https://via.placeholder.com/640x480.png/007744?text=possimus', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(12, NULL, 1, 'https://via.placeholder.com/640x480.png/0088ff?text=sit', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(13, NULL, 3, 'https://via.placeholder.com/640x480.png/00cc44?text=deserunt', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(14, NULL, 2, 'https://via.placeholder.com/640x480.png/008833?text=corrupti', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(15, NULL, 10, 'https://via.placeholder.com/640x480.png/006666?text=sunt', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(16, NULL, 5, 'https://via.placeholder.com/640x480.png/002233?text=ipsum', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(17, NULL, 9, 'https://via.placeholder.com/640x480.png/00ff55?text=odio', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(18, NULL, 4, 'https://via.placeholder.com/640x480.png/00ddff?text=voluptas', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(19, NULL, 8, 'https://via.placeholder.com/640x480.png/007777?text=et', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(20, NULL, 8, 'https://via.placeholder.com/640x480.png/007711?text=blanditiis', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(21, NULL, 1, 'https://via.placeholder.com/640x480.png/006655?text=ullam', '2023-12-15 08:07:11', '2023-12-15 08:07:11'),
(22, NULL, NULL, 'gambar-galeri/dc3LOy5AAfv98jHQwOVNM11ueWbunURQHuzLRw2R.png', '2023-12-22 18:42:20', '2023-12-22 18:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatans`
--

CREATE TABLE `kegiatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body_text` text NOT NULL,
  `tanggal` date NOT NULL,
  `excerpt` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `galery_id` bigint(20) UNSIGNED DEFAULT NULL,
  `divisi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatans`
--

INSERT INTO `kegiatans` (`id`, `nama`, `slug`, `body_text`, `tanggal`, `excerpt`, `gambar`, `galery_id`, `divisi_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Qui pariatur quis quaerat sed.', 'temporibus-eum-est-veniam-placeat', '<p>Quia maxime necessitatibus laborum cumque. Est unde sunt earum explicabo atque dolores. Officia non minus quo voluptatum qui molestiae asperiores.</p><p>Eaque ut molestias consectetur ipsa natus eum accusantium. Suscipit eveniet odio maiores laudantium impedit. Repellendus quidem eos aut est.</p><p>Recusandae aliquam quam sed minus dolor sunt quia non. Quod quo et cupiditate. Dignissimos qui aut iste nostrum architecto in ut. Adipisci placeat iusto nihil ex consectetur adipisci.</p><p>Quod impedit velit assumenda. Ut vero illo ut aut corporis facilis necessitatibus. Magnam omnis in repellendus qui.</p><p>Odio quam sint aut explicabo dolorem nisi et. Voluptates sint nostrum quidem eos consequatur quia. Molestias soluta repudiandae quia sapiente omnis molestias laboriosam.</p>', '2021-02-08', 'Ducimus maxime voluptas et reiciendis minima.', 'https://via.placeholder.com/640x480.png/0044ff?text=ut', 9, 4, NULL, '2023-12-15 08:07:10', '2023-12-15 08:07:10'),
(2, 'Rerum aut distinctio rem cumque et totam.', 'maxime-numquam-qui-nostrum-assumenda-officiis', '<p>Et eum eveniet fuga ut maxime enim voluptas. Voluptatem velit omnis id expedita. Adipisci neque quibusdam autem et molestiae.</p><p>Beatae natus et repellendus non illum dolor. Quibusdam non quibusdam debitis. Nulla facere animi distinctio tenetur enim. Nobis provident autem quis similique et impedit.</p><p>Nesciunt quis dolor itaque eum est. Commodi qui totam accusantium repellendus. Eum unde numquam inventore ut et et voluptatum asperiores.</p><p>Ducimus sit aut nobis. Eaque alias provident at harum odit accusantium autem. Accusamus similique rerum nemo quia. Quos itaque aliquid non.</p><p>Molestias eum voluptas qui vero. Eaque beatae assumenda minima voluptate debitis porro explicabo et.</p><p>Enim voluptate quia et ut nobis assumenda. Sequi iste repudiandae eum tempora tempore.</p><p>Ut sed ullam exercitationem autem unde accusantium nam deserunt. Hic placeat consequatur sed odit velit. Rem qui perspiciatis voluptas delectus ad qui aperiam.</p><p>Quam inventore laborum unde amet ipsa voluptas excepturi. Aut aut accusantium et aut quibusdam quasi. Cumque impedit est odit praesentium.</p>', '1983-09-18', 'Nobis nobis eligendi aut dolor sed beatae est.', 'https://via.placeholder.com/640x480.png/00ddee?text=eligendi', 7, 3, NULL, '2023-12-15 08:07:10', '2023-12-15 08:07:10'),
(3, 'Sunt ex inventore perferendis maiores magni.', 'qui-incidunt-eos-perferendis-eius-voluptatem', '<p>Autem sed excepturi laboriosam illo consequatur et. Id velit vel saepe aliquid non qui dignissimos. Voluptatum eaque ea corrupti id rerum voluptas possimus. Illum dolor tempora consequatur et a dolor consequatur suscipit.</p><p>Sed aliquid minima non voluptas blanditiis. Voluptatum dolor doloribus reprehenderit omnis et. Molestiae culpa autem accusantium alias impedit dolorem.</p><p>Dicta qui qui molestias ut quod iure recusandae. Rerum reprehenderit magnam nulla qui laborum maxime consequatur. Sed nesciunt non consequatur. Qui quam magnam rerum vel exercitationem.</p><p>Recusandae a quibusdam laborum nesciunt cupiditate qui. Ad beatae et laboriosam iure accusamus fugit nulla. Dolores sunt sed ea eos quia ex.</p><p>Nemo voluptas est minus quam repellendus. Illo maxime laboriosam voluptatem pariatur quod neque. Amet labore optio deserunt nostrum voluptatem sint. Nesciunt aut at dolorum mollitia.</p><p>Cum qui dolor voluptatem. Totam error debitis sed sed ducimus. Quibusdam illum saepe sunt incidunt perspiciatis error deleniti.</p>', '1994-09-28', 'Officia natus facilis aut repellat fugit officia veritatis.', 'https://via.placeholder.com/640x480.png/004455?text=error', 6, 1, NULL, '2023-12-15 08:07:10', '2023-12-15 08:07:10'),
(4, 'Inventore ex fugiat repudiandae fugiat necessitatibus.', 'voluptatem-odit-aperiam-ex-provident-et', '<p>Minus repudiandae aut mollitia maiores enim aspernatur. Eius rerum qui dolores exercitationem omnis. Nam iste ipsum consequatur necessitatibus ut tenetur voluptatem.</p><p>Officiis sint est qui quas dolores. Voluptas ipsam necessitatibus eaque sit nihil enim. Aut ratione esse deleniti veniam.</p><p>Ut velit autem fugiat nesciunt sint commodi. Ut earum voluptatem ipsam modi maxime perspiciatis vitae. Necessitatibus maxime et et ea vero eum rerum quia.</p><p>Sit odio quia vitae fugit quod enim. Sed incidunt unde earum voluptas vel enim. Tenetur omnis modi minus autem nam. Non exercitationem odio eum tempora possimus omnis.</p><p>Ut voluptas perferendis qui. Autem sed consequatur magni. Veniam assumenda aut consectetur eveniet in.</p><p>Velit fugit distinctio laboriosam omnis possimus ut. Ab ratione vero beatae beatae sint. Necessitatibus nostrum quidem minus ab id et itaque. Quia eligendi ducimus est et nesciunt ut.</p><p>Et qui ea maxime minus nihil sit debitis. Eveniet temporibus est reiciendis modi. Eveniet fugit neque illo at. Doloribus atque totam dolore debitis sed fugit placeat.</p>', '2002-04-10', 'Corporis labore quibusdam officiis consequatur ut sint vel non.', 'https://via.placeholder.com/640x480.png/0022cc?text=recusandae', 4, 2, NULL, '2023-12-15 08:07:10', '2023-12-15 08:07:10'),
(5, 'Ut et sequi sint ex aut.', 'veritatis-est-earum-tenetur-dolores-perferendis', '<p>Distinctio minima quam ut sit iure amet dolore asperiores. Distinctio dolorem qui necessitatibus corrupti temporibus quos voluptatibus voluptatem. Officia fugit omnis enim maiores.</p><p>Provident numquam est quia tempore. Vel nesciunt mollitia debitis odit itaque rerum neque. Voluptatem id saepe eum sed maiores qui ullam.</p><p>Dolorum saepe et qui aut fuga earum nulla occaecati. Vel ipsam voluptate facilis ea neque voluptas. Modi odio libero excepturi tempora odio quia.</p><p>Mollitia sunt labore adipisci est accusamus quia soluta voluptatem. Tempore similique quibusdam dolor eos eveniet qui. Hic ut odio voluptas aspernatur debitis est vero. Ratione nostrum perspiciatis consequatur sunt illo.</p><p>Accusantium earum dicta dolorum aut rem aut eaque. Id modi voluptatum commodi voluptas animi ut quaerat. Deleniti distinctio qui dolores non deleniti.</p><p>Iure deserunt temporibus corrupti non voluptatibus iste. Quia eius nesciunt ut qui. Et id dolorum impedit qui assumenda.</p><p>Soluta ratione iste fuga et unde et. Fugiat laborum dolore dolorem eius. Illum quis sit laborum est eaque placeat dolore et.</p><p>Id esse quaerat sunt alias. Inventore facere omnis unde excepturi. Debitis ut delectus dignissimos aut ut magnam.</p>', '1989-04-02', 'Sequi ducimus qui dolorem autem.', 'https://via.placeholder.com/640x480.png/004422?text=quidem', 5, 2, NULL, '2023-12-15 08:07:10', '2023-12-15 08:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `kritiks`
--

CREATE TABLE `kritiks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `teks` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kritiks`
--

INSERT INTO `kritiks` (`id`, `nama`, `email`, `teks`, `created_at`, `updated_at`) VALUES
(1, 'adsasd', 'asda@gmai', 'asdasd', '2023-12-22 18:43:18', '2023-12-22 18:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_11_23_130833_create_posts_table', 1),
(6, '2023_11_23_163933_create_categories_table', 1),
(7, '2023_11_25_102629_create_penguruses_table', 1),
(8, '2023_11_25_111416_create_divisis_table', 1),
(9, '2023_12_02_135426_create_galeries_table', 1),
(10, '2023_12_02_141113_create_kegiatans_table', 1),
(11, '2023_12_05_031909_create_kritiks_table', 1),
(12, '2023_12_05_032625_create_pages_table', 1),
(13, '2023_12_10_111408_create_pengumumen_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `dekripsi` text DEFAULT NULL,
  `konten` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengumumen`
--

CREATE TABLE `pengumumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumumen`
--

INSERT INTO `pengumumen` (`id`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Porro minima sint vel soluta non autem.', '2023-12-15 08:07:11', '2023-12-15 08:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `penguruses`
--

CREATE TABLE `penguruses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `divisi_id` bigint(20) UNSIGNED NOT NULL,
  `jabatan` int(11) NOT NULL,
  `medsos` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penguruses`
--

INSERT INTO `penguruses` (`id`, `nama`, `divisi_id`, `jabatan`, `medsos`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Adam', 2, 1, 'adam', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744171072200794/Adam.png?ex=654b9a2f&is=6539252f&hm=c70c67c1c2439727abbf1b64ab0225eb6051f2e6edd859febc97b0604f263b23&', '2023-12-15 08:07:08', '2023-12-15 08:07:08'),
(2, 'Nadyah Adawiyah', 2, 2, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744168639504446/Nadya.png?ex=654b9a2e&is=6539252e&hm=0f8a2f2b7d4011160f9f503ae631c2366aec9db426b02eeb51d4abff7d81617d&', '2023-12-15 08:07:08', '2023-12-15 08:07:08'),
(3, 'Ahmad Ghazali', 2, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744168257814588/Ghazali.png?ex=654b9a2e&is=6539252e&hm=c2549eb688a0b900b73342b357e142199a5a77378f8f379c8b1597e4471c9d57&', '2023-12-15 08:07:08', '2023-12-15 08:07:08'),
(4, 'Adam Abdul Majid', 2, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744170526933053/Sopo.png?ex=654b9a2f&is=6539252f&hm=f89520d99b37ea052de964864d3b9289c97c2435e6c16135ecab04e08c99963b&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(5, 'Nur Aisyah Wulandari', 2, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744169037959299/Nana.png?ex=654b9a2e&is=6539252e&hm=a948fddeae49b0e5d3608ab9b9393967f21074fd3933328437ff009aaad66e8f&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(6, 'Nurul Fannisa', 2, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744169553862716/Pani.png?ex=654b9a2f&is=6539252f&hm=f102fff4002faac7743f80962c0847c7748eef3825cd4c9275b0ff6d0ed0726e&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(7, 'Muh Ridha Ilahi', 2, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744170103312506/Rido.png?ex=654b9a2f&is=6539252f&hm=28d0e07286b2c5f7bdb143d7501bb910be7a71da65036b0d25a6d63ecab7895c&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(8, 'Nabila Faqita Masyora', 1, 1, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744232720080958/Nabila.png?ex=654b9a3e&is=6539253e&hm=70815ca2564f7d03fce2e210b90522c797696cd21952bf8063585c57a05991d4&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(9, 'Aswar Fajar', 1, 2, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744231130431538/Aswar.png?ex=654b9a3d&is=6539253d&hm=1c5541080a4411614f1949e7b03ef41f8c1fe09a9ff81da2b05c7753ab2cec1c&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(10, 'Nurhalis', 1, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744232124502136/Cina.png?ex=654b9a3d&is=6539253d&hm=1f9726360d4878e8a5df2342346fc61c7c7bb1a5df0c492e054a0960b847c64c&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(11, 'Alya Ananda Masri', 1, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744230467752046/Alya.png?ex=654b9a3d&is=6539253d&hm=44a54881f14decdd27b08b5f7f63da316aff1aa180229a250af83607adf957b8&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(12, 'Rahmawati', 1, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744233378599024/Rahma.png?ex=654b9a3e&is=6539253e&hm=21d6079392fe703900d2897669d4c2185226aa82e3a23820431bee710b3a1f01&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(13, 'Risal', 1, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744233844154548/Risal.png?ex=654b9a3e&is=6539253e&hm=697b81a62b74deeca23d66af96c927a3bdc36a7cb5552107cbadbb18c6dd7596&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(14, 'Awal Prasetya Jayadi', 3, 1, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744299015245934/Awal.png?ex=654b9a4d&is=6539254d&hm=c01b6fb2a8691e7ae0d63cadc622e7c3ac08257b4ca6eebb190f030110d9c175&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(15, 'Syahrul', 3, 2, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744302051934218/Syahrul.png?ex=654b9a4e&is=6539254e&hm=554a8c67d3cd32b932db27e92433e7fba4d5ee5bf37cd2ac97db890dc7258143&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(16, 'Kurniawan A.Z Rahayaan', 3, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744302546845847/Vey.png?ex=654b9a4e&is=6539254e&hm=dfed71194043c782a77f22c66af43b8d2b3ac61567441c79b0db0694fa329ea9&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(17, 'Ilham Ramadhan', 3, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744299438882887/Bojes.png?ex=654b9a4e&is=6539254e&hm=601ebfe75dc5e0d90a21b517fd1c6e69aba07432c470c88fe7926e49b36dcd2e&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(18, 'Hendrawan H Hery', 3, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744300512612382/Hendra.png?ex=654b9a4e&is=6539254e&hm=6916e2d2a40cae84d04eb4f90f56a531a0f5254d0e1721b01f126a0f8d82978e&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(19, 'Annisa Eka jayanti Santoso', 3, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744299912822844/Chi.png?ex=654b9a4e&is=6539254e&hm=ec04a36b43b2b8800f64e896ec6e91a0c822fcd833212d35c3d0d8bfb122bbc6&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(20, 'Ni\'Matul Fajri', 3, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744301523439617/Nima.png?ex=654b9a4e&is=6539254e&hm=032f15575b5bd5fb7dce8a67e0ead32eca9d08c2a71e56dd9170b87c8087d35a&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(21, 'Ananda Intan Pratiwi', 3, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744301045301288/Intan.png?ex=654b9a4e&is=6539254e&hm=2f456ea7627b81b9643fdeba2f62f756df6bf00aa909c8602b71cb7f431489b9&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(22, 'Alif Daffa Rivai', 4, 1, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744260532518912/Aldaf.png?ex=654b9a44&is=65392544&hm=49c2b8325bec31c566c50f21ccac81bde082fa6ba914ae8f7ccfe2e6223921cd&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(23, 'Hayar Usman', 4, 2, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744262541586503/Hayar.png?ex=654b9a45&is=65392545&hm=0a3f1aac9fb662063d9b5aeccabc73fd423942cb82fd7ad4cf3ade6c737051da&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(24, 'Muh Fajrin', 4, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744261694341161/Fajrin.png?ex=654b9a45&is=65392545&hm=5afc4a967de3b67d0cc609ff856d394da198fd302fb9fa666542063ca293bf55&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(25, ' Nurhidayat', 4, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744262088609922/Genjieh.png?ex=6579bec5&is=656749c5&hm=546794616c54be9a26272cf35694c36600b1635ba1110b5bfb8250bd6233ef0e&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(26, 'Isyal', 4, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744263070072842/Isyal.png?ex=654b9a45&is=65392545&hm=2d2b779e7e1b064c42902893580cf17f420f5d5fc9aa019b8e106dba41d8d92d&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(27, 'Aqilah Nurul Fauziah', 4, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744263971852348/Kila.png?ex=654b9a45&is=65392545&hm=a80fc1ddfc591af4f63525676af40242f4ec715180189c79aa2a7d2edc3c8ae4&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(28, 'Nurul Fadhillah Nur', 4, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744261107134484/Dilot.png?ex=654b9a44&is=65392544&hm=bee53f055b17886d081b74dd720c70fa41ec0372d11e92bd2f8f1998e7d95eaa&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(29, 'Dina', 5, 1, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744202563035177/Dina.png?ex=654b9a36&is=65392536&hm=309f41fcbdf67fc572acb97c4a31fd8c73b0f7777eb6fadb8e4d9278afa2cad1&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(30, 'Amel Krisandaresta', 5, 2, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744205037666454/Amel.png?ex=654b9a37&is=65392537&hm=9d2adfc167ed116d7b18491119fdd7dffc47d84f02b0d9c398864131a02d004b&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(31, 'Murni', 5, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744203993292840/Murni.png?ex=654b9a37&is=65392537&hm=1b913f7241ebdb9931ad43d1ce35188053503400725738a4f4e429c63e76336e&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(32, 'Hilda Safitri', 5, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744203083124758/Ilda.png?ex=654b9a37&is=65392537&hm=0d49c8c7b76e05a1d9de9b3449421695778ca3aa29219438fe90929839175f90&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(33, 'Irmayanti', 5, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744204584685618/Rawr.png?ex=654b9a37&is=65392537&hm=8205f8048faae6a4be940cfdd1782f70156d4ce8528f1e76dd7530bc89a4b3e5&', '2023-12-15 08:07:09', '2023-12-15 08:07:09'),
(34, 'Muhammad Aiman', 5, 3, '', 'https://cdn.discordapp.com/attachments/1152085105641279519/1166744203473191053/Kratos.png?ex=654b9a37&is=65392537&hm=d27bbb77abbc317ead82c0be4996c5dc228cbe44c71149d7240244fb4238998d&', '2023-12-15 08:07:09', '2023-12-15 08:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `title` varchar(255) NOT NULL,
  `divisi_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `excerpt` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `publised_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `divisi_id`, `user_id`, `excerpt`, `slug`, `body`, `publised_at`, `created_at`, `updated_at`) VALUES
(1, 'Ut aperiam impedit modi.', 5, 4, 'Omnis et qui quo tenetur placeat omnis ullam fugiat est impedit tempore.', 'rerum-quia-nostrum-recusandae', '<p>Deleniti ipsa aperiam ut adipisci expedita ducimus. Dolor in illo eum numquam doloribus. Quis velit explicabo cumque vero asperiores.</p><p>Ad ut et similique. Expedita quo totam quidem inventore et ipsum. Quo quis omnis sint aliquam et et sint. Voluptatibus expedita qui quaerat fugiat explicabo.</p><p>Adipisci ex dolor eum fuga dolorem. Eaque nisi voluptate sunt distinctio veniam quo. Explicabo et numquam aut sapiente ipsam a quam. Recusandae accusamus ipsam nam aut at blanditiis harum quas.</p><p>Aut quo cumque saepe aut aut distinctio ut. Quis saepe ipsum voluptatum et. Distinctio magnam dignissimos ea non dolores officia.</p><p>Nisi ut voluptas voluptates ducimus aut at sed. Et eum iure eos laborum ad aspernatur temporibus qui. Nulla vitae officiis laborum et modi perferendis odit.</p><p>Suscipit rerum eum ipsum iusto sunt. Amet aut accusantium et. Repellendus similique nisi aperiam voluptatem voluptatem veritatis veritatis.</p><p>Commodi dolorem sunt rerum voluptatum impedit. Eum tempore repudiandae sunt occaecati quasi ea nemo. Dolores placeat vel hic repellat molestiae pariatur dolorum.</p><p>Minus rerum incidunt occaecati dolorem tempore sunt et. Aut dolorum facilis est vel repellat tenetur. Corporis explicabo velit magnam veniam. Soluta deserunt dolorum doloremque et delectus.</p><p>Ducimus porro est ea. Voluptate distinctio fuga necessitatibus aut harum quisquam maxime consequatur. Voluptate aut sed ducimus earum aut qui. Dicta sapiente nihil fuga est ut saepe dolorum et.</p><p>Voluptatibus voluptates fugit ut accusantium quos ratione. Aliquid autem voluptatem sed corporis omnis fuga officia. Cumque dignissimos commodi autem iusto natus. Dolorem libero quam distinctio voluptas non rerum sapiente ut. Non porro harum mollitia aspernatur nam voluptatem optio.</p>', NULL, '2023-12-15 12:03:20', '2023-12-15 08:07:10'),
(2, 'Dolores nam quibusdam.', 3, 3, 'Cum sed et rem nihil exercitationem voluptatem molestiae.', 'recusandae-aut-aut-enim-ipsum', '<p>Aliquam est et cumque non. Quidem rem est vel voluptatem sunt labore harum. Dolorum porro vel autem reiciendis perferendis. Dicta fuga voluptas saepe quam.</p><p>Neque velit quibusdam velit fuga qui id. Possimus maxime occaecati hic consectetur quas dicta architecto. Nesciunt laborum explicabo quae tempora labore aut provident. Quia recusandae recusandae quia doloremque rerum unde.</p><p>Voluptatem voluptatum dicta necessitatibus in praesentium illum. Odit quos nihil dolorem eaque officia ullam aut. Est ut quasi voluptatem illo. Cumque rerum sed ut fugiat autem qui vitae qui.</p><p>Voluptatem aut voluptas saepe assumenda eveniet. Maiores dolorem officiis ea et aut et. Rem dignissimos nisi iste omnis maiores quidem eaque.</p><p>Placeat ad nihil ipsam exercitationem odit et ratione. Et commodi quis magni. Pariatur sit occaecati ab ullam minima quas. Dolor ea ut dignissimos adipisci dolor iste consequatur.</p>', NULL, '2023-12-15 01:09:02', '2023-12-15 08:07:10'),
(3, 'Quibusdam error ut quia sit blanditiis et doloremque.', 4, 2, 'Ullam ut provident porro dignissimos sapiente dicta harum et eum perspiciatis.', 'culpa-non-iste-et-eos-dolores', '<p>Aperiam incidunt dolores autem sapiente in accusamus aliquid. Qui unde distinctio laborum natus. Aut vero fugiat quis earum odio blanditiis.</p><p>Hic officia animi dolores non sunt ea qui. Accusamus suscipit ipsum quo. Non iure quibusdam dicta qui omnis. Consequatur excepturi voluptatem maiores similique ut.</p><p>Aut pariatur ipsum veniam. Vel optio vel quia. Dolor id fuga nemo libero corrupti. Rerum sint facere vel omnis blanditiis.</p><p>Officia temporibus dolorem dolor accusantium et incidunt. Tenetur et veritatis sit. Magni asperiores voluptas cum ex asperiores aut dicta. Aut architecto velit asperiores voluptates necessitatibus saepe esse. Ut quidem nisi est fugiat qui eum labore.</p><p>Quasi non rem aut quam vel aut in beatae. Dolorum nihil blanditiis vitae. Et vitae praesentium soluta architecto sunt quis quis.</p>', NULL, '2023-12-15 03:44:35', '2023-12-15 08:07:10'),
(4, 'Eos expedita culpa fuga quam voluptates.', 1, 1, 'Velit dolorem est expedita consequatur quo eos doloribus dolores provident aut corrupti ut.', 'dolore-quaerat-pariatur-numquam-et', '<p>Aut pariatur et nemo blanditiis placeat deserunt molestias libero. Recusandae suscipit nobis nisi qui. Quia maxime earum mollitia quis voluptatem.</p><p>Fugit aut expedita dolor reiciendis. Mollitia aut sed quia quia nostrum. Voluptatem et odit tempora voluptatibus quo. Reprehenderit et ratione eaque consequatur non ut.</p><p>Nulla ut non fugiat reiciendis aut. Voluptates soluta magni est id et dolorem. Ut ut molestiae quos inventore quod. Tenetur voluptate voluptate nobis perferendis voluptatem cumque earum.</p><p>Harum aut sit repellendus nam omnis. Qui et atque recusandae. Magnam quod soluta aut exercitationem est. Possimus sapiente voluptatem sint laborum nam voluptatem. Autem est repellendus eius dolorem laudantium quod.</p><p>Officia assumenda itaque consequatur blanditiis. Et ullam delectus amet. Eum maiores qui exercitationem exercitationem voluptatem.</p><p>Est ut nam voluptate eum qui adipisci velit. Adipisci officia est velit aut recusandae doloremque qui. Qui et ut ipsum repellendus est incidunt sit.</p><p>Aliquam deserunt voluptates vero ullam numquam aut recusandae. Rerum occaecati rerum odit magni. Pariatur et sit occaecati earum.</p><p>Accusamus commodi necessitatibus quo praesentium qui harum. Eos debitis nostrum optio ea molestiae laudantium. Doloribus voluptas ut quia laborum voluptatibus voluptas. Fugit molestiae temporibus reprehenderit totam aut.</p>', NULL, '2023-12-14 20:32:15', '2023-12-15 08:07:10'),
(5, 'Dolorem fuga eos qui.', 1, 4, 'Ipsa atque error molestiae sunt eveniet ea aut omnis consectetur doloremque.', 'deleniti-quod-minus-voluptas-commodi-voluptate', '<p>Vero soluta et illum temporibus. Et et et sequi nobis expedita exercitationem quis. Itaque optio voluptate nihil harum et. Quia deleniti quidem autem minima deserunt dolore.</p><p>Unde aut ut quod aspernatur molestiae fugiat qui. Dolores magni quia voluptatum molestias est in est ipsa. Unde repellendus molestias quia laboriosam cumque omnis veritatis molestias.</p><p>Sit deleniti et consectetur aut sunt. Labore exercitationem veritatis ut tempora rem. Velit ratione autem rerum ut velit. Soluta quod repudiandae aut quaerat et.</p><p>Amet ducimus ut porro libero fugit. Ad est quis in impedit ut culpa. Possimus quis animi blanditiis consequatur minima.</p><p>Maiores est fuga possimus. Est animi autem repellat temporibus. Similique et et est autem nulla quas. Modi non itaque in qui atque enim dolorem. Porro aperiam sint ducimus consectetur.</p><p>Ea ut veritatis delectus nulla ullam ad. Similique qui non animi iusto in non harum. Cumque molestias sunt quaerat ducimus in. Non saepe quod quia ea mollitia sed. Laboriosam facere nam eius eum.</p><p>Ea ullam ut laboriosam ratione non doloribus. Minus ut ad in.</p><p>Quo ut quidem excepturi et voluptatum. Quia laboriosam dolor qui quod non iusto eos aut.</p>', NULL, '2023-12-15 12:32:44', '2023-12-15 08:07:10'),
(6, 'Dolore earum aut.', 1, 2, 'Corporis cum sit dolor dignissimos et quis accusamus quae illum necessitatibus saepe aut sunt.', 'dolor-veritatis-voluptas-sed-porro-illo-voluptates-et-ut', '<p>Sed adipisci doloribus consequatur consequatur. Exercitationem est qui possimus repudiandae dolores. In quisquam voluptate vitae id reprehenderit.</p><p>Et rerum fugit eaque. Aut cumque velit et hic blanditiis et illo. Blanditiis enim autem suscipit magnam aliquam. Veniam aperiam ut ratione.</p><p>Quasi dignissimos sint ipsa. Similique praesentium quaerat id rem cupiditate est est.</p><p>Commodi id enim quia. In eum mollitia odio distinctio. Eum sint laudantium sint omnis rerum.</p><p>Consequuntur qui consectetur eius sint delectus. Aspernatur et illo veritatis id. Et eaque quia ut rerum molestias. Et laboriosam ut pariatur iste qui inventore quos.</p><p>Qui reiciendis voluptatum rerum neque ut harum. Consectetur repellat aliquid qui reiciendis. Ea deleniti consequatur tenetur illum nihil sapiente minus. Sint asperiores voluptatem a dolorem rerum assumenda.</p>', NULL, '2023-12-15 12:04:38', '2023-12-15 08:07:10'),
(7, 'Id assumenda molestias accusantium.', 1, 1, 'Error enim sed unde id aut asperiores qui.', 'ut-qui-fuga-eligendi-excepturi-dolorum', '<p>Quia soluta et nobis sed consequatur aliquam vel tempore. Consectetur temporibus expedita quia corrupti molestiae eum. Ad iusto explicabo laboriosam aut pariatur facere totam.</p><p>Exercitationem quisquam deserunt provident tempora nobis quae repudiandae dolorem. Eveniet adipisci aut harum iusto. Facere ut delectus minus rerum qui natus. Consequatur sed dolores quis id eum modi quasi ea.</p><p>Aliquam est quia qui perspiciatis rem aliquam. Culpa eos vel explicabo et enim error.</p><p>Quia ex adipisci molestiae id unde ea. Unde repudiandae qui omnis voluptatem. Sint et non consequatur deleniti maiores id reiciendis aut. Ut temporibus est labore aliquid quod.</p><p>Autem eligendi corrupti veritatis atque ea. Est nesciunt voluptatem sit consectetur. Est et dolorum enim ullam ratione qui dolorem. In saepe qui veritatis voluptatem quia facere.</p><p>Provident praesentium quod non qui. Est dolores nulla commodi aut rem. Voluptas ea officia quo expedita repudiandae ab et.</p>', NULL, '2023-12-14 22:34:43', '2023-12-15 08:07:10'),
(8, 'Fugit reiciendis eos neque.', 5, 2, 'Ea aut harum non expedita aperiam incidunt sapiente.', 'ut-cum-quo-aliquid-dolorem-labore-maiores-aperiam-qui', '<p>Adipisci possimus ut ipsa quidem dolorem eius eos. Sunt omnis voluptatem iste consequatur perferendis. Eaque iusto est veniam non autem non aut. Excepturi qui quia omnis sed.</p><p>Eum quas deleniti consequatur laudantium. Quaerat corporis at et nostrum qui sit sequi. Reiciendis rerum qui unde optio voluptatem.</p><p>Placeat aspernatur omnis sapiente aut dolorem ab occaecati. Quia officia accusantium praesentium quaerat ut voluptas accusantium. Praesentium debitis praesentium dolore expedita placeat autem. Reprehenderit minus quas iure voluptatem deleniti.</p><p>Consequatur delectus perferendis ad a et omnis eveniet. Repellat dignissimos optio a sint quia unde esse. Consequuntur dolor nihil autem omnis aliquam harum officiis. Debitis deleniti aliquid quos corrupti iure nihil ipsam. Porro est hic omnis harum et autem voluptatum.</p><p>Est dolores rem neque et nihil. Quia neque et sint assumenda consequatur qui. Unde id sunt doloribus consequatur iste. Debitis dolor omnis fugiat sit.</p><p>Nostrum accusamus enim non tenetur cum assumenda commodi vero. Illo soluta molestiae labore iste quas quia. Harum est qui ea deleniti accusantium dolor maiores. Commodi molestias velit earum in voluptate tenetur doloremque.</p><p>Voluptates eius alias illum qui quia mollitia nemo at. Dolorem aspernatur quisquam repudiandae hic saepe dolorem consectetur. Est officia voluptas et est.</p><p>Expedita fugit velit asperiores quae eum. Voluptatem mollitia laborum ut sequi fugiat eligendi laborum alias.</p><p>Fugiat fuga explicabo saepe tempore sint. Ut consectetur in dolor omnis laudantium officiis libero. Laboriosam et et dolores incidunt aliquid et suscipit.</p>', NULL, '2023-12-15 06:40:46', '2023-12-15 08:07:10'),
(9, 'Sint explicabo non tempore harum dicta unde sed.', 2, 5, 'Aut vero cum est aspernatur voluptatem ipsa officiis voluptas architecto voluptatibus.', 'et-ad-quia-aut-voluptatum-sunt-libero-deserunt', '<p>Nobis sequi totam id voluptatem quisquam et iste tenetur. Fugit sit quia autem laudantium. Culpa non dignissimos est. Qui quod sed temporibus est earum.</p><p>Et perspiciatis placeat velit. Quae facere facere aliquid corrupti qui tempora debitis. Reprehenderit et aspernatur tenetur reprehenderit. Incidunt distinctio dicta ex qui sint saepe autem. Dolor facere magnam est ut.</p><p>Earum repudiandae fugiat nulla praesentium aut corrupti eveniet. Doloremque omnis fuga aut et consectetur. Labore tempora amet est.</p><p>Et enim voluptas quaerat repellat excepturi doloribus dolores. Et odit est dolor adipisci sit. Doloribus eius officiis est quia nesciunt. Explicabo dolorem asperiores ut a quibusdam.</p><p>Dolor aut inventore vel quod labore. Sed et libero ratione et assumenda aut. Dolorem nihil id aut officia. Aperiam iste ratione recusandae sit laudantium.</p><p>Neque unde omnis labore id consequatur placeat. Sit doloribus consequatur sunt dolor commodi. Natus qui sint temporibus aliquam quibusdam. Autem ut similique quaerat. Natus at facere nam autem et voluptatem laborum.</p><p>Nam pariatur ipsa illum corrupti dolorum. Repudiandae voluptatem et corporis soluta accusamus pariatur velit quia. Nihil harum magnam perspiciatis facere ab.</p><p>Voluptatem ex ut est ex laudantium dolor. Voluptatem odio ab exercitationem minima voluptas architecto est. Earum facilis tempore omnis id suscipit dolorem omnis sed. Dolorem quaerat sunt alias voluptates quisquam velit consequatur illum.</p><p>Dolorem et necessitatibus maxime illo est labore amet quo. Facere maxime enim nisi alias dolores rerum sequi. Architecto vel quia sint molestias sed. Est sed laudantium voluptas quisquam odit. Non consequatur esse odit ut.</p><p>Voluptatem et hic asperiores similique delectus. Doloribus eum dolorem enim accusamus dolorum. Illum deleniti inventore vitae sunt tempore dolorem asperiores fugiat.</p>', NULL, '2023-12-14 19:35:35', '2023-12-15 08:07:10'),
(10, 'At fuga dolores culpa aut voluptas ullam sed.', 3, 5, 'Temporibus assumenda consectetur aliquam et maxime non.', 'minus-officiis-incidunt-nobis-vitae-eligendi', '<p>Doloribus hic sunt eos eum nemo. Minima placeat et quia iste omnis odio.</p><p>Culpa doloremque reiciendis accusantium repudiandae libero voluptas. Ab vero rerum iste non ea sequi. Deleniti non iste error et unde impedit. Vel ut distinctio ut error sit.</p><p>Non vitae hic repellendus facilis. Et dolorem reiciendis sunt modi doloribus magnam et. Illo sit quo blanditiis enim provident. Quia tempora id et nisi.</p><p>Et neque esse tenetur doloribus tempore ut accusantium. Quia laborum minima nisi ipsa numquam odio. Cupiditate impedit quod iste commodi.</p><p>Sit corrupti blanditiis ut. Quae aut sed quas.</p><p>Officia nemo ea accusamus deleniti neque. Dolorum nisi necessitatibus et esse. Ut dolor mollitia cupiditate. Rerum tenetur voluptatem beatae vero.</p><p>Ut ut quod vitae tenetur aut nihil sit. Dolores ratione sunt velit cumque enim ut perferendis est. Id eum explicabo aut.</p><p>Magnam alias est ipsam similique sed sapiente. Consequatur harum placeat nobis vitae aliquid. Nihil nisi a explicabo non illum corrupti.</p>', NULL, '2023-12-15 12:37:03', '2023-12-15 08:07:10'),
(11, 'Repudiandae soluta dolorum qui cum est aut.', 2, 1, 'Et ut nobis occaecati nisi doloribus odio.', 'labore-et-libero-ut-autem-natus-vel-atque', '<p>Repudiandae necessitatibus ea numquam voluptatem. Qui aut nihil dolorem. Ratione est amet sunt. Minima sequi rem adipisci et.</p><p>Occaecati est commodi nihil aut consectetur harum. Ipsam sit et cupiditate tenetur repellendus esse impedit. Necessitatibus eos cum libero aspernatur eveniet.</p><p>Ex saepe dolor sed nam non. Qui unde delectus sapiente aspernatur. Magnam blanditiis quasi et magnam hic aliquid. Libero corrupti hic dolores at minus et quod quia.</p><p>Laboriosam eaque hic sit molestiae vel excepturi qui ipsa. Officia mollitia id non non magnam. Ea et nihil reiciendis sed dolorem veritatis voluptatem.</p><p>Sed qui ut et repellat sint repellat aut. Facilis quia qui quo facere excepturi nihil qui.</p><p>Unde at mollitia vel. Expedita sint eaque dolores.</p><p>Dignissimos repellat harum velit voluptatem architecto neque architecto. Impedit quod velit odit quos ipsum doloremque tempore. Est ad recusandae totam molestiae culpa et odit.</p><p>Dicta modi doloremque ut aspernatur ipsum explicabo. Harum veritatis dolorem porro ut consequatur excepturi explicabo. Et mollitia voluptatum quibusdam optio quod ut.</p><p>Earum quam esse vero aspernatur facilis molestiae. Dolores eius enim sequi non natus voluptatem reiciendis. Officia et odio molestias non. Quia quam inventore porro reiciendis corrupti maxime aut.</p>', NULL, '2023-12-15 03:11:42', '2023-12-15 08:07:10'),
(12, 'Fugiat perspiciatis quidem suscipit reprehenderit tenetur ut.', 3, 1, 'Iste vel veritatis unde vitae dolores sint consectetur odio et officia nihil possimus esse.', 'dolorum-quae-illum-provident-labore-voluptatem-similique-dicta-et', '<p>Ipsa sapiente cum vel. Ea qui iure aut ut omnis ad eius. Qui totam nihil nihil sunt nisi ut quisquam.</p><p>Quaerat qui laborum atque saepe. Voluptatum similique eum voluptatum quia illo sed. Molestias iusto dolor dolor quia qui ab enim possimus.</p><p>Quae deleniti quos dolor ipsam quia molestiae. Quae quae assumenda nisi laudantium. Et natus iste aut. Explicabo necessitatibus eos quod optio quo esse ut.</p><p>Et magni qui velit odit beatae. Voluptates aut est nobis porro. Quo natus est corrupti rerum illo rerum sed. Exercitationem in ut sed.</p><p>Iusto ut sequi nulla ut cum ut et dolorem. Aliquam architecto sed qui non laborum. Magnam eos eum deleniti molestias incidunt. Deleniti magni aperiam officia illum libero.</p><p>Qui nostrum minus non qui consequuntur. Aut non accusantium non repellat. Incidunt eaque dolorem aut minus tenetur. Nisi voluptas dolorem voluptate possimus sit accusamus modi.</p><p>Eaque quibusdam ut voluptas numquam perspiciatis minima explicabo. Rem itaque ratione animi sequi. Harum quo dignissimos similique aut sint consequatur deserunt. Et nemo repellendus dolorum consequuntur commodi quo ea.</p><p>Voluptatem eaque cum nam placeat. Omnis sint ipsa iste ut molestiae. Esse earum ut iste officia et voluptas non.</p>', NULL, '2023-12-14 20:00:04', '2023-12-15 08:07:10'),
(13, 'Libero non suscipit nihil ut recusandae consequatur et est.', 4, 2, 'Sequi asperiores quaerat ipsa cupiditate voluptatum quis et eos fuga laborum.', 'enim-at-illum-nesciunt-dolorem', '<p>Enim nulla quis vero. Dolores sapiente qui et quia voluptatem quia et molestiae. Minima ratione hic repellendus aut voluptatem. Amet voluptates in quo minima rerum.</p><p>Similique aut iusto error ut sit optio. Cumque deserunt rerum odio recusandae aspernatur quas mollitia. Eaque animi fuga impedit odit. Nobis inventore eos quia ullam quibusdam.</p><p>Maxime delectus qui amet ut eveniet laborum quibusdam. Aut est et qui illum dolorum ut. Iste nisi sint laborum ducimus temporibus. Et ipsa et quia ducimus. Voluptatem praesentium a a perspiciatis occaecati aut.</p><p>Ipsum mollitia vitae porro blanditiis possimus dolorem. Sit rerum est ipsa est consequuntur dolores. Officia porro perferendis quos dolores cupiditate ipsam. Corrupti id minus est aliquid accusantium quis et.</p><p>Quia nihil quia eum autem necessitatibus iusto quo sit. Quasi alias assumenda ut ducimus soluta fugit. Eum ducimus architecto natus ut.</p><p>Ipsam magni repudiandae veniam libero est. Repellat aut porro placeat magni magni fugiat. Unde iure voluptas explicabo doloribus id ut vitae. Atque voluptate ut ut itaque.</p><p>Molestiae consequatur quae quia corporis magnam quos cumque. Illo voluptatum aliquam sint praesentium. Doloremque commodi eveniet sed maiores dolor labore doloremque.</p><p>Perspiciatis aut id nam autem quos sed minima. Laborum rerum sunt ullam nostrum. Voluptates minima illo ipsum qui.</p><p>Reprehenderit quia qui in voluptatem et quibusdam. Blanditiis vitae commodi voluptatem nostrum consequatur recusandae architecto. Sit autem dolorem qui eum pariatur voluptatem.</p>', NULL, '2023-12-14 20:16:18', '2023-12-15 08:07:10'),
(14, 'Iusto a.', 2, 5, 'Maxime molestiae qui ea labore ipsa fugit occaecati.', 'quo-iure-adipisci-eos-impedit', '<p>Optio autem vel hic doloremque molestiae quibusdam provident iure. Molestias provident quo rem hic. Error dolorem inventore est.</p><p>In in qui accusantium quod illum mollitia. Et illum et cupiditate vero fuga nobis. Voluptatem nihil libero maiores porro.</p><p>Culpa sint molestiae aliquid nesciunt eveniet et. Velit deleniti quam sed quo quis. Sapiente placeat magnam molestiae sint sed. Aut est ut eos sed saepe.</p><p>Et corporis repudiandae nemo maxime non. Dolores reprehenderit adipisci incidunt.</p><p>Aliquid architecto sunt accusamus voluptas tempore. Voluptates non delectus voluptatem. Labore tempore perspiciatis recusandae cupiditate dolorem sed et recusandae. Qui libero illum voluptas aut autem velit eos.</p><p>Nesciunt dolorum qui id quibusdam. Et optio vel veniam vitae et quia illo eaque. Quia velit voluptatem soluta ut. Cupiditate occaecati distinctio blanditiis quibusdam dignissimos.</p><p>Doloremque est doloribus ipsum. Voluptatem et libero modi autem facere nemo. Sed voluptatem sit qui ab soluta nobis debitis. Et voluptas sit minus sit.</p><p>Facilis pariatur et voluptatem voluptates. Cumque velit sit incidunt repellendus repellendus et. Sint dolorem nobis esse illo dignissimos ratione consectetur.</p><p>Porro provident nobis mollitia qui voluptate. Architecto quia tempora et ut dicta qui suscipit. Deserunt repudiandae excepturi explicabo magnam animi doloremque esse.</p>', NULL, '2023-12-15 13:26:45', '2023-12-15 08:07:10'),
(15, 'Id corporis ea reprehenderit sed perferendis odit dolorum itaque iste.', 3, 5, 'Dolore labore eveniet porro culpa id non beatae accusamus facere voluptates modi facilis.', 'magni-qui-repudiandae-velit-vel', '<p>Alias sed illo omnis. Beatae culpa aut voluptatem et nesciunt. Cumque sit sed culpa non eos consequuntur consequatur voluptas.</p><p>Velit ab consequatur voluptatem ex. Ut nisi eos pariatur natus exercitationem officiis. Et et provident consequatur doloremque voluptas ducimus qui laborum.</p><p>Expedita voluptatem maxime sequi quas. Impedit voluptatem architecto quia dolorem minima iure. Quia dicta quo modi temporibus ab voluptatum rerum. Id ab corrupti aut quibusdam ex suscipit odio. Quam eius quasi itaque non et qui distinctio.</p><p>Quas molestiae quia quia saepe pariatur velit et. Commodi corrupti in enim ipsum qui. Corporis impedit dolorem ea molestias qui facere.</p><p>Eius non repellendus dolorem tempore. Consequatur numquam vero illum ut architecto ducimus. Impedit eum adipisci architecto totam nam et minima sapiente.</p><p>Fugit ipsa consequatur voluptatem nobis. Quasi nemo quae earum error natus deleniti. Autem numquam voluptatem quisquam facilis.</p><p>Quia quo molestias eum nobis qui. Sapiente saepe error iure et nihil illo sequi.</p><p>Exercitationem veniam in minima quam. Provident voluptas a quam voluptatibus magnam officia. Laborum eum veritatis iusto quas voluptas. Magnam aliquam nihil nisi quis et.</p><p>Voluptatum magni id voluptate sed. Perspiciatis ullam adipisci debitis ad possimus. Voluptatum voluptas perspiciatis doloribus nobis fuga.</p>', NULL, '2023-12-15 04:40:53', '2023-12-15 08:07:10'),
(16, 'Recusandae dolorem alias iure dolore qui reprehenderit.', 5, 4, 'Et perferendis quos nisi id inventore adipisci quia.', 'nobis-est-dicta-tempore', '<p>Sunt a praesentium debitis magnam ullam vero autem aspernatur. Vitae laborum aspernatur aut temporibus. Ipsam recusandae reprehenderit voluptatem ut omnis accusantium qui.</p><p>Inventore illo voluptas accusantium velit. Ut sunt exercitationem est totam omnis debitis. Eos earum explicabo ducimus. Nisi delectus rerum asperiores delectus architecto.</p><p>Cupiditate at fugit magnam sequi. Ut qui dolor qui enim ab. Error quae quia eos quia.</p><p>Voluptatem nihil molestias vel non quam. Quia ullam beatae et quod. Quidem ipsam neque accusamus est culpa quod sit. Ipsum ut et exercitationem non.</p><p>Quia earum et soluta. Dolorum consequatur sed repellendus voluptas corporis. Id odio veritatis id quam. Sunt quo eos enim et iste sunt natus.</p><p>Quidem et qui animi officiis odio tempore. Nemo tempore consequatur reprehenderit consequatur maiores. Fugiat eius rerum neque quas.</p><p>Repellat est fuga dolorum dolorem quas et qui sint. Error et fugit quos eos consequatur soluta. Dignissimos sit illo quas odit.</p><p>Molestiae ut soluta et alias debitis officia perferendis aperiam. Esse eveniet esse eius amet in a magnam. Quisquam tempore qui itaque. Accusantium aut molestiae occaecati et et dignissimos numquam. Magni expedita impedit suscipit doloremque.</p><p>Debitis sunt magni quas. Praesentium dolores magnam laboriosam dolore vero vero. Ipsa quod quasi deserunt deserunt at occaecati.</p><p>In nam laboriosam earum est. Consequatur provident qui quia soluta ab. Modi suscipit omnis ducimus et dolorum ducimus qui. Repellendus sit dolores animi eos alias aperiam. Quis enim libero pariatur culpa nam molestias commodi.</p>', NULL, '2023-12-14 22:09:35', '2023-12-15 08:07:10'),
(17, 'Voluptatibus porro.', 3, 3, 'Tenetur aut dolore amet iusto temporibus non similique ut ut in.', 'distinctio-aut-eos-consequatur', '<p>Unde deserunt veniam incidunt tenetur odit. Sed a aspernatur cum esse ab. Sequi quae id necessitatibus aut asperiores.</p><p>Corrupti aut atque est velit rerum minus unde. Impedit nesciunt enim laboriosam ut pariatur distinctio incidunt sit. Impedit vitae et quia iusto.</p><p>Laborum dolorum ut nesciunt sequi veniam et suscipit. Et quibusdam sed et est maiores perspiciatis modi. Quasi omnis sed in consequatur rerum nobis.</p><p>Et fugiat nobis dolorem rerum. Aut aut commodi omnis aut voluptatem sed iure iste. Sed quia ea sunt provident.</p><p>Sed recusandae repudiandae quo voluptatem. Eligendi mollitia qui dolor architecto deserunt quia. Explicabo quis quia quidem qui possimus aut enim.</p>', NULL, '2023-12-15 12:47:41', '2023-12-15 08:07:10'),
(18, 'Necessitatibus veniam.', 5, 4, 'Et aut eaque praesentium dignissimos reiciendis molestiae tempore voluptates.', 'sed-velit-quia-facere-architecto', '<p>Architecto dolor odit architecto illo. Nesciunt fugit libero placeat alias tempore aliquam nobis. Distinctio in enim consectetur inventore. Eius in autem accusamus dolorem.</p><p>Qui optio aut inventore ipsam consequatur eum ipsam. Placeat blanditiis reiciendis et aliquid enim. Sit aut quo sit doloribus eum in ullam. Inventore fugiat eum qui consequatur velit. Soluta qui sed cupiditate cumque.</p><p>Et accusamus explicabo unde. Deleniti eum error voluptates recusandae hic.</p><p>Ut animi reprehenderit et sit unde. Ut ut ipsum temporibus nesciunt minus soluta aliquam. Nostrum sequi soluta quasi quia quibusdam cupiditate. Repudiandae architecto possimus accusantium eveniet eius.</p><p>Laboriosam iure nulla est et dolor. Quia est et delectus. Quibusdam nemo id repellendus. At deserunt voluptas cupiditate quo qui voluptatem incidunt in.</p><p>Reprehenderit occaecati cumque ut facilis. Ratione odit possimus inventore culpa. Similique doloremque illum fugiat nemo dolores optio.</p><p>Rerum tempore et perferendis eos. Est quis dolorum dolor. Cum distinctio cum esse ducimus autem sunt. Qui perferendis modi ea aut omnis quia sit quisquam.</p>', NULL, '2023-12-15 02:37:52', '2023-12-15 08:07:10'),
(19, 'Vel occaecati ipsa quo natus dolores aut aut suscipit sed.', 1, 4, 'Alias atque beatae quia molestiae voluptatem corrupti earum nulla.', 'expedita-et-error-ducimus-nobis-deleniti', '<p>Laboriosam voluptas eos dolorem officia ut nisi quis. Illum laborum molestias voluptate nam nobis. Sed tempora sit ea aliquam. Dignissimos consequatur est amet sint quia.</p><p>Est assumenda deserunt nesciunt facilis animi nam. Totam nihil consectetur quibusdam ullam. Omnis facilis quam sequi nisi. Ea eum sint voluptatem eum.</p><p>Tempore blanditiis debitis molestias saepe. Ratione deserunt debitis autem autem saepe occaecati rerum. Illum soluta ullam earum a. Debitis dolor ea in molestias ut.</p><p>Aspernatur consequuntur praesentium corporis qui reiciendis sed voluptatem libero. Architecto maiores mollitia et est non. Aut harum aut dolorem illo. Perferendis ipsum aut numquam saepe.</p><p>Nostrum amet voluptas modi quam qui. At commodi sit repudiandae. Rerum ad inventore dolores dolores blanditiis. Incidunt possimus sed voluptates ut et.</p>', NULL, '2023-12-15 06:33:18', '2023-12-15 08:07:10'),
(20, 'Et fugit reiciendis ipsum modi ab.', 1, 3, 'Corrupti explicabo consequatur provident accusamus necessitatibus non nemo voluptatem itaque quis sed ullam.', 'cum-incidunt-harum-facilis-voluptas-voluptatem-nemo-voluptatibus', '<p>Aut odit repellat delectus expedita. Et odio cupiditate et.</p><p>Dolore qui ea dignissimos non rem quia odit. Possimus consequatur totam non sint ipsam officiis.</p><p>Rerum deleniti at et rem molestiae itaque aut pariatur. Voluptas officia ipsam ut explicabo qui. Ipsam est corporis tempore et est. Quis nostrum amet consequatur aut.</p><p>Ut aut ea odio eius. Est debitis sint ipsa qui laudantium ab quia. Non est ut optio. Voluptatem doloremque incidunt harum in nostrum consequuntur exercitationem.</p><p>Quo pariatur perspiciatis esse blanditiis quae aut. Sint recusandae reiciendis aut nulla voluptates eveniet soluta. Et aut explicabo adipisci. Sapiente corrupti dolorem ut explicabo provident.</p><p>Voluptates autem consequatur in sint. Mollitia molestiae error nostrum repellendus laudantium qui aut. Exercitationem ea sit officia dignissimos. Totam voluptatum consectetur sunt labore est dignissimos maiores quae.</p><p>Nihil repudiandae quo aut ut. Voluptatum harum velit nihil accusantium. Quam aut vel labore reprehenderit laborum voluptates. Corporis magnam eos saepe provident minima assumenda voluptas.</p><p>Consequatur ipsam dolorem ut eos. Corporis qui quia a rerum doloremque veritatis eligendi. Accusamus ut est eos consectetur sunt sit.</p>', NULL, '2023-12-14 22:16:24', '2023-12-15 08:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kominfo', 'kominfo', '60900121064@uin-alauddin.ac.id', NULL, '$2y$10$fUuMnDeKrW.zenEdbtKfjOLj6Lxnm/kW1tVachgrqEQPRO0XrZVqS', NULL, '2023-12-15 08:07:08', '2023-12-15 08:07:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_nama_unique` (`nama`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `divisis`
--
ALTER TABLE `divisis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `divisis_nama_unique` (`nama`),
  ADD UNIQUE KEY `divisis_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatans`
--
ALTER TABLE `kegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kritiks`
--
ALTER TABLE `kritiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengumumen`
--
ALTER TABLE `pengumumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penguruses`
--
ALTER TABLE `penguruses`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `divisis`
--
ALTER TABLE `divisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kegiatans`
--
ALTER TABLE `kegiatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kritiks`
--
ALTER TABLE `kritiks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengumumen`
--
ALTER TABLE `pengumumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penguruses`
--
ALTER TABLE `penguruses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
