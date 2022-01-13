-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 06:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 07:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movieweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `movie_id`, `image`, `status`) VALUES
(6, 21, 'slider26173.jpg', 1),
(8, 24, 'slider18440.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `status`, `slug`) VALUES
(7, 'Phim Chiếu Rạp', 'Phim Chiếu Rạp', 1, 'phim-chieu-rap'),
(9, 'Phim Lẻ', 'Phim Lẻ', 0, 'phim-le');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `title`, `description`, `status`, `slug`) VALUES
(2, 'Việt Nam', 'Phim Việt Nam', 1, 'phim-viet-nam'),
(3, 'Hàn Quốc', 'Phim Hàn Quốc', 1, 'phim-han-quoc'),
(4, 'Mỹ', 'Phim Mỹ', 1, 'my');

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE `episodes` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `link_movie` varchar(255) DEFAULT NULL,
  `episode` varchar(255) DEFAULT NULL,
  `slug_episode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`id`, `movie_id`, `link_movie`, `episode`, `slug_episode`) VALUES
(1, 21, 'MudJaFFMrTU', 'tập 1', 'tap-1'),
(10, 21, 'uNaSgCBiyTs', 's', 's'),
(11, 21, 'MudJaFFMrTU', 'tập 1', 'tap-1'),
(12, 28, 'uNaSgCBiyTs', 's', 's'),
(13, 52, '7yc-V0HPwPQ', 'acb tập 1', 'acb-tap-1'),
(14, 52, '4DwcOjhHrPQ', 'abc tập 2', 'abc-tap-2'),
(15, 21, '4DwcOjhHrPQ', 'ma trận tâp 4', 'ma-tran-tap-4');

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
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `title`, `description`, `status`, `slug`) VALUES
(2, 'Hành Động', 'Hành Động', 1, 'hanh-dong'),
(3, 'Viễn Tưởng', 'Phim Viễn Tưởng', 1, 'vien-tuong'),
(4, 'Tâm Lý', 'Phim Tâm Lý', 1, 'tam-ly');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `age` varchar(3) NOT NULL,
  `trailer_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `status`, `image`, `category_id`, `genre_id`, `country_id`, `slug`, `time`, `age`, `trailer_link`) VALUES
(21, 'Ma Trận: Hồi Sinh', 'Ma Trận: Hồi Sinhw', 1, 'comedy copy8335.jpg', 7, 2, 2, 'ma-tran-hoi-sinh', 0, '13+', ''),
(23, 'f', 'f', 1, 'got8543.jpg', 7, 2, 2, 'f', 0, '0', ''),
(24, 'a', 'a', 1, 'funny copy9921.jpeg', 7, 2, 2, 'a', 0, '0', ''),
(25, 'v', 'v', 1, '041900.jpg', 7, 2, 2, 'v', 0, '0', ''),
(28, 'Resident Evil: Quỷ Dữ Trỗi Dậy', 'Resident Evil: Quỷ dữ trỗi dậy - Resident Evil: Welcome to Raccoon City là bộ phim thuộc thể loại kinh dị, hành động của Mỹ. Tác phẩm do đạo diễn Johannes Roberts chịu trách nhiệm chỉ đạo, với sự tham gia của các diễn viên Kaya Scodelario, Hannah John-Kamen, Robbie Amell, Tom Hopper, Avan jogia và Donal Logue. Bộ phim đưa chúng ta theo chân nhóm cảnh sát của thành phố Raccoon cùng các thành viên của đội cứu hộ và tác chiến đặc biệt. Họ bị mắc kẹt ở một thị trấn nhỏ và phải đối mặt với đợt bùng phát dịch Zombie lớn chưa từng thấy do tập đoàn Umbrella, một siêu công ty dược phẩm mờ ám đứng đằng sau thao túng. Cả nhóm đã phải lên kế hoạch và tìm mọi cách để có thể thoát khỏi thành phố Raccoon. Lúc mà cuộc hỗn loạn nổ ra, Claire Redfield (Kaya Scodelario) đã trở lại thị trấn để cảnh báo anh trai cô là Chris (Robbie Amell) rằng Umbrella là một tổ chức không hề tốt đẹp một chút nào. Và từ đó, chúng ta được theo dõi hành trình của những nhân vật quen thuộc bước ra từ trong series game nổi tiếng, gồm bộ đôi chị em Claire và Chris Redfield, cảnh sát tân binh Leon S. Kennedy (Avan Jogia), đặc vụ Jill Valentine (Hannah John-Kamen) và Albert Wesker (Tom Hopper), đối đầu với thủ lĩnh của Công ty Umbrella là William Birkin (Neal McDonough). Phần phim mới có nhiều điểm khác biệt so với thương hiệu phim Resident Evil của Paul W. S. Anderson, bản chuyển thể lần này của Roberts bám sát hơn so với bản gốc từ game. Và điều này cũng mang đến sự quen thuộc với các game thủ của trò chơi cũng như những ai yêu thích trò chơi này. Phần trò chơi đầu tiên của loạt game Resident Evil đã được gọi là kinh dị sinh tồn, và roberts đã triển khai bộ phim theo hướng như vậy, một bộ phim kinh dị sinh tồn với nhiều phân cảnh máu me trong phim. Tác phẩm lấy bối cảnh phim vào năm 1998, thì bộ phim cũng bày tỏ sự tôn trọng với hai trò chơi đầu tiên của loạt game. Kỹ xảo của Maxime Alexandre trong phim cũng mang đến một sự sắc nét và chân thật, đặc biệt là các hình ảnh Iconic, với những mảng màu đỏ bao trùm cả bộ phim, với một cơn mưa bất tận trông như máu. Khác với những bộ phim Resident Evil khác trước đây, Welcome to Raccoon City không lạm dụng nhiều về số lượng Zombie trong các cảnh phim. Thay vào đó, phim xây dựng sự kịch tính bằng cách tăng từ từ số lượng zombie khi các nhân vật cận kề hiểm nguy. Trong lúc Roberts làm rất tốt việc truyền tải bản chất của trò chơi vào câu chuyện chính trên màn ảnh, thì dàn nhân vật lại được xây dựng một cách khá khó chịu. Việc mọi người liên tục sử dụng các từ ngữ thô tục liên tục không làm cho câu chuyện trở nên thú vị mà lại khiến người xem cảm thấy khó chịu. Bên cảnh đó, những nhân vật trông như những kẻ ngốc, đặc biệt là các phân cảnh đối diện với các tình huống cực kỳ tồi tệ, nhưng họ lại đáp lại bằng ánh mắt vô hồn đầy bối rối. Tuy nhiên cốt truyện chặt chẽ đã phần nào gỡ gạc cho sự nhàm chán của nhân vật.', 1, '067062.jpg', 7, 2, 4, 'resident-evil-quy-du-troi-day', 0, '13+', ''),
(29, 'sd', '3', 1, '032596.jpg', 7, 2, 2, 'sd', 3, '0', ''),
(30, '31', '3', 1, '028765.jpg', 7, 2, 2, '31', 3, '13+', ''),
(31, 'Ma Trận: Hồi Sinh', 'Ma Trận: Hồi Sinhw', 1, 'comedy copy8335.jpg', 7, 2, 2, 'ma-tran-hoi-sinh', 0, '0', ''),
(32, 'f', 'f', 1, 'got8543.jpg', 7, 2, 2, 'f', 0, '0', ''),
(33, 'a', 'a', 1, 'funny copy9921.jpeg', 7, 2, 2, 'a', 0, '0', ''),
(34, 'v', 'v', 1, '041900.jpg', 7, 2, 2, 'v', 0, '0', ''),
(35, 'Resident Evil: Quỷ Dữ Trỗi Dậy', 'Resident Evil: Quỷ dữ trỗi dậy - Resident Evil: Welcome to Raccoon City là bộ phim thuộc thể loại kinh dị, hành động của Mỹ. Tác phẩm do đạo diễn Johannes Roberts chịu trách nhiệm chỉ đạo, với sự tham gia của các diễn viên Kaya Scodelario, Hannah John-Kamen, Robbie Amell, Tom Hopper, Avan jogia và Donal Logue. Bộ phim đưa chúng ta theo chân nhóm cảnh sát của thành phố Raccoon cùng các thành viên của đội cứu hộ và tác chiến đặc biệt. Họ bị mắc kẹt ở một thị trấn nhỏ và phải đối mặt với đợt bùng phát dịch Zombie lớn chưa từng thấy do tập đoàn Umbrella, một siêu công ty dược phẩm mờ ám đứng đằng sau thao túng. Cả nhóm đã phải lên kế hoạch và tìm mọi cách để có thể thoát khỏi thành phố Raccoon. Lúc mà cuộc hỗn loạn nổ ra, Claire Redfield (Kaya Scodelario) đã trở lại thị trấn để cảnh báo anh trai cô là Chris (Robbie Amell) rằng Umbrella là một tổ chức không hề tốt đẹp một chút nào. Và từ đó, chúng ta được theo dõi hành trình của những nhân vật quen thuộc bước ra từ trong series game nổi tiếng, gồm bộ đôi chị em Claire và Chris Redfield, cảnh sát tân binh Leon S. Kennedy (Avan Jogia), đặc vụ Jill Valentine (Hannah John-Kamen) và Albert Wesker (Tom Hopper), đối đầu với thủ lĩnh của Công ty Umbrella là William Birkin (Neal McDonough). Phần phim mới có nhiều điểm khác biệt so với thương hiệu phim Resident Evil của Paul W. S. Anderson, bản chuyển thể lần này của Roberts bám sát hơn so với bản gốc từ game. Và điều này cũng mang đến sự quen thuộc với các game thủ của trò chơi cũng như những ai yêu thích trò chơi này. Phần trò chơi đầu tiên của loạt game Resident Evil đã được gọi là kinh dị sinh tồn, và roberts đã triển khai bộ phim theo hướng như vậy, một bộ phim kinh dị sinh tồn với nhiều phân cảnh máu me trong phim. Tác phẩm lấy bối cảnh phim vào năm 1998, thì bộ phim cũng bày tỏ sự tôn trọng với hai trò chơi đầu tiên của loạt game. Kỹ xảo của Maxime Alexandre trong phim cũng mang đến một sự sắc nét và chân thật, đặc biệt là các hình ảnh Iconic, với những mảng màu đỏ bao trùm cả bộ phim, với một cơn mưa bất tận trông như máu. Khác với những bộ phim Resident Evil khác trước đây, Welcome to Raccoon City không lạm dụng nhiều về số lượng Zombie trong các cảnh phim. Thay vào đó, phim xây dựng sự kịch tính bằng cách tăng từ từ số lượng zombie khi các nhân vật cận kề hiểm nguy. Trong lúc Roberts làm rất tốt việc truyền tải bản chất của trò chơi vào câu chuyện chính trên màn ảnh, thì dàn nhân vật lại được xây dựng một cách khá khó chịu. Việc mọi người liên tục sử dụng các từ ngữ thô tục liên tục không làm cho câu chuyện trở nên thú vị mà lại khiến người xem cảm thấy khó chịu. Bên cảnh đó, những nhân vật trông như những kẻ ngốc, đặc biệt là các phân cảnh đối diện với các tình huống cực kỳ tồi tệ, nhưng họ lại đáp lại bằng ánh mắt vô hồn đầy bối rối. Tuy nhiên cốt truyện chặt chẽ đã phần nào gỡ gạc cho sự nhàm chán của nhân vật.', 1, '067062.jpg', 7, 2, 4, 'resident-evil-quy-du-troi-day', 0, '0', ''),
(36, 'sd', '3', 1, '032596.jpg', 7, 2, 2, 'sd', 3, '0', ''),
(37, '31', '3', 1, '028765.jpg', 7, 2, 2, '31', 3, '13+', ''),
(38, 'Ma Trận: Hồi Sinh', 'Ma Trận: Hồi Sinhw', 1, 'comedy copy8335.jpg', 7, 2, 2, 'ma-tran-hoi-sinh', 0, '0', ''),
(39, 'f', 'f', 1, 'got8543.jpg', 7, 2, 2, 'f', 0, '0', ''),
(40, 'a', 'a', 1, 'funny copy9921.jpeg', 7, 2, 2, 'a', 0, '0', ''),
(41, 'v', 'v', 1, '041900.jpg', 7, 2, 2, 'v', 0, '0', ''),
(42, 'Resident Evil: Quỷ Dữ Trỗi Dậy', 'Resident Evil: Quỷ dữ trỗi dậy - Resident Evil: Welcome to Raccoon City là bộ phim thuộc thể loại kinh dị, hành động của Mỹ. Tác phẩm do đạo diễn Johannes Roberts chịu trách nhiệm chỉ đạo, với sự tham gia của các diễn viên Kaya Scodelario, Hannah John-Kamen, Robbie Amell, Tom Hopper, Avan jogia và Donal Logue. Bộ phim đưa chúng ta theo chân nhóm cảnh sát của thành phố Raccoon cùng các thành viên của đội cứu hộ và tác chiến đặc biệt. Họ bị mắc kẹt ở một thị trấn nhỏ và phải đối mặt với đợt bùng phát dịch Zombie lớn chưa từng thấy do tập đoàn Umbrella, một siêu công ty dược phẩm mờ ám đứng đằng sau thao túng. Cả nhóm đã phải lên kế hoạch và tìm mọi cách để có thể thoát khỏi thành phố Raccoon. Lúc mà cuộc hỗn loạn nổ ra, Claire Redfield (Kaya Scodelario) đã trở lại thị trấn để cảnh báo anh trai cô là Chris (Robbie Amell) rằng Umbrella là một tổ chức không hề tốt đẹp một chút nào. Và từ đó, chúng ta được theo dõi hành trình của những nhân vật quen thuộc bước ra từ trong series game nổi tiếng, gồm bộ đôi chị em Claire và Chris Redfield, cảnh sát tân binh Leon S. Kennedy (Avan Jogia), đặc vụ Jill Valentine (Hannah John-Kamen) và Albert Wesker (Tom Hopper), đối đầu với thủ lĩnh của Công ty Umbrella là William Birkin (Neal McDonough). Phần phim mới có nhiều điểm khác biệt so với thương hiệu phim Resident Evil của Paul W. S. Anderson, bản chuyển thể lần này của Roberts bám sát hơn so với bản gốc từ game. Và điều này cũng mang đến sự quen thuộc với các game thủ của trò chơi cũng như những ai yêu thích trò chơi này. Phần trò chơi đầu tiên của loạt game Resident Evil đã được gọi là kinh dị sinh tồn, và roberts đã triển khai bộ phim theo hướng như vậy, một bộ phim kinh dị sinh tồn với nhiều phân cảnh máu me trong phim. Tác phẩm lấy bối cảnh phim vào năm 1998, thì bộ phim cũng bày tỏ sự tôn trọng với hai trò chơi đầu tiên của loạt game. Kỹ xảo của Maxime Alexandre trong phim cũng mang đến một sự sắc nét và chân thật, đặc biệt là các hình ảnh Iconic, với những mảng màu đỏ bao trùm cả bộ phim, với một cơn mưa bất tận trông như máu. Khác với những bộ phim Resident Evil khác trước đây, Welcome to Raccoon City không lạm dụng nhiều về số lượng Zombie trong các cảnh phim. Thay vào đó, phim xây dựng sự kịch tính bằng cách tăng từ từ số lượng zombie khi các nhân vật cận kề hiểm nguy. Trong lúc Roberts làm rất tốt việc truyền tải bản chất của trò chơi vào câu chuyện chính trên màn ảnh, thì dàn nhân vật lại được xây dựng một cách khá khó chịu. Việc mọi người liên tục sử dụng các từ ngữ thô tục liên tục không làm cho câu chuyện trở nên thú vị mà lại khiến người xem cảm thấy khó chịu. Bên cảnh đó, những nhân vật trông như những kẻ ngốc, đặc biệt là các phân cảnh đối diện với các tình huống cực kỳ tồi tệ, nhưng họ lại đáp lại bằng ánh mắt vô hồn đầy bối rối. Tuy nhiên cốt truyện chặt chẽ đã phần nào gỡ gạc cho sự nhàm chán của nhân vật.', 1, '067062.jpg', 7, 2, 4, 'resident-evil-quy-du-troi-day', 0, '0', ''),
(43, 'sd', '3', 1, '032596.jpg', 7, 2, 2, 'sd', 3, '0', ''),
(44, '31', '3', 1, '028765.jpg', 7, 2, 2, '31', 3, '13+', ''),
(45, 'Ma Trận: Hồi Sinh', 'Ma Trận: Hồi Sinhw', 1, 'comedy copy8335.jpg', 7, 2, 2, 'ma-tran-hoi-sinh', 0, '0', ''),
(46, 'f', 'f', 1, 'got8543.jpg', 7, 2, 2, 'f', 0, '0', ''),
(47, 'a', 'a', 1, 'funny copy9921.jpeg', 7, 2, 2, 'a', 0, '0', ''),
(48, 'v', 'v', 1, '041900.jpg', 7, 2, 2, 'v', 0, '0', ''),
(49, 'Resident Evil: Quỷ Dữ Trỗi Dậy', 'Resident Evil: Quỷ dữ trỗi dậy - Resident Evil: Welcome to Raccoon City là bộ phim thuộc thể loại kinh dị, hành động của Mỹ. Tác phẩm do đạo diễn Johannes Roberts chịu trách nhiệm chỉ đạo, với sự tham gia của các diễn viên Kaya Scodelario, Hannah John-Kamen, Robbie Amell, Tom Hopper, Avan jogia và Donal Logue. Bộ phim đưa chúng ta theo chân nhóm cảnh sát của thành phố Raccoon cùng các thành viên của đội cứu hộ và tác chiến đặc biệt. Họ bị mắc kẹt ở một thị trấn nhỏ và phải đối mặt với đợt bùng phát dịch Zombie lớn chưa từng thấy do tập đoàn Umbrella, một siêu công ty dược phẩm mờ ám đứng đằng sau thao túng. Cả nhóm đã phải lên kế hoạch và tìm mọi cách để có thể thoát khỏi thành phố Raccoon. Lúc mà cuộc hỗn loạn nổ ra, Claire Redfield (Kaya Scodelario) đã trở lại thị trấn để cảnh báo anh trai cô là Chris (Robbie Amell) rằng Umbrella là một tổ chức không hề tốt đẹp một chút nào. Và từ đó, chúng ta được theo dõi hành trình của những nhân vật quen thuộc bước ra từ trong series game nổi tiếng, gồm bộ đôi chị em Claire và Chris Redfield, cảnh sát tân binh Leon S. Kennedy (Avan Jogia), đặc vụ Jill Valentine (Hannah John-Kamen) và Albert Wesker (Tom Hopper), đối đầu với thủ lĩnh của Công ty Umbrella là William Birkin (Neal McDonough). Phần phim mới có nhiều điểm khác biệt so với thương hiệu phim Resident Evil của Paul W. S. Anderson, bản chuyển thể lần này của Roberts bám sát hơn so với bản gốc từ game. Và điều này cũng mang đến sự quen thuộc với các game thủ của trò chơi cũng như những ai yêu thích trò chơi này. Phần trò chơi đầu tiên của loạt game Resident Evil đã được gọi là kinh dị sinh tồn, và roberts đã triển khai bộ phim theo hướng như vậy, một bộ phim kinh dị sinh tồn với nhiều phân cảnh máu me trong phim. Tác phẩm lấy bối cảnh phim vào năm 1998, thì bộ phim cũng bày tỏ sự tôn trọng với hai trò chơi đầu tiên của loạt game. Kỹ xảo của Maxime Alexandre trong phim cũng mang đến một sự sắc nét và chân thật, đặc biệt là các hình ảnh Iconic, với những mảng màu đỏ bao trùm cả bộ phim, với một cơn mưa bất tận trông như máu. Khác với những bộ phim Resident Evil khác trước đây, Welcome to Raccoon City không lạm dụng nhiều về số lượng Zombie trong các cảnh phim. Thay vào đó, phim xây dựng sự kịch tính bằng cách tăng từ từ số lượng zombie khi các nhân vật cận kề hiểm nguy. Trong lúc Roberts làm rất tốt việc truyền tải bản chất của trò chơi vào câu chuyện chính trên màn ảnh, thì dàn nhân vật lại được xây dựng một cách khá khó chịu. Việc mọi người liên tục sử dụng các từ ngữ thô tục liên tục không làm cho câu chuyện trở nên thú vị mà lại khiến người xem cảm thấy khó chịu. Bên cảnh đó, những nhân vật trông như những kẻ ngốc, đặc biệt là các phân cảnh đối diện với các tình huống cực kỳ tồi tệ, nhưng họ lại đáp lại bằng ánh mắt vô hồn đầy bối rối. Tuy nhiên cốt truyện chặt chẽ đã phần nào gỡ gạc cho sự nhàm chán của nhân vật.', 1, '067062.jpg', 7, 2, 4, 'resident-evil-quy-du-troi-day', 0, '0', ''),
(50, 'sd', '3', 1, '032596.jpg', 7, 2, 2, 'sd', 3, '0', ''),
(51, '31', '3', 1, '028765.jpg', 7, 2, 2, '31', 3, '13+', ''),
(52, 'phim 1', 'sdasdsadasdsa', 1, 'LOTR1013.jpg', 7, 2, 3, 'phim-1', 75, '13+', NULL),
(53, 'd', 'd', 1, 'unnamed6778.jpg', 7, 2, 2, 'd', 2, '13+', '2O-Nn6lPS8w'),
(54, '1', '1', 1, 'ww843382.jpg', 7, 2, 2, '1', 1, '13+', 'ld4PppiZJWE');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('khalongtvh@gmail.com', '$2y$10$D0QbUpK2WplOE7BCJIdqs.JNBeH6efO9GpwpCR0KgRCt7YgaEoCDe', '2022-01-12 06:45:44');

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
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `movie_id`, `rating`) VALUES
(1, 21, 5),
(2, 21, 4),
(3, 21, 1),
(4, 21, 3),
(5, 21, 5),
(6, 21, 1),
(7, 21, 5),
(8, 21, 3),
(9, 24, 5),
(10, 24, 1),
(11, 21, 5),
(12, 21, 5),
(13, 21, 4),
(14, 28, 5),
(15, 21, 5),
(16, 21, 5),
(17, 21, 5),
(18, 21, 1),
(19, 21, 5),
(20, 21, 1),
(21, 21, 4),
(22, 21, 3),
(23, 52, 5),
(24, 52, 4),
(25, 52, 1),
(26, 52, 5),
(27, 52, 5),
(28, 52, 5),
(29, 52, 1),
(30, 52, 5),
(31, 52, 1),
(32, 52, 5),
(33, 21, 1),
(34, 21, 1),
(35, 54, 5);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'khalongtvh@gmail.com', NULL, '$2y$10$tt2Ze2se3EKB8riCQQcK/upnWa3c5DQu8xZrpbD7paIMot7gWUaPq', 'Rf9lP6NiCHJU6i4FD08R0TMKCwwN7FU8m9DGQKeNvM6lmoYpUrfQMwLN1MqT', '2022-01-02 09:14:35', '2022-01-02 09:14:35'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$tt2Ze2se3EKB8riCQQcK/upnWa3c5DQu8xZrpbD7paIMot7gWUaPq', 'V6uDTopBSOM484GQOQ0BZleEwbhcXQVrZznLMp9TKosojE10XgQmkI46KtV8', '2022-01-02 09:14:35', '2022-01-02 09:14:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
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
-- Indexes for table `rates`
--
ALTER TABLE `rates`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

  `category_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `age` varchar(3) NOT NULL,
  `trailer_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `description`, `status`, `image`, `category_id`, `genre_id`, `country_id`, `slug`, `time`, `age`, `trailer_link`) VALUES
(21, 'Ma Trận: Hồi Sinh', 'Ma Trận: Hồi Sinhw', 1, 'comedy copy8335.jpg', 7, 2, 2, 'ma-tran-hoi-sinh', 0, '13+', ''),
(23, 'f', 'f', 1, 'got8543.jpg', 7, 2, 2, 'f', 0, '0', ''),
(24, 'a', 'a', 1, 'funny copy9921.jpeg', 7, 2, 2, 'a', 0, '0', ''),
(25, 'v', 'v', 1, '041900.jpg', 7, 2, 2, 'v', 0, '0', ''),
(28, 'Resident Evil: Quỷ Dữ Trỗi Dậy', 'Resident Evil: Quỷ dữ trỗi dậy - Resident Evil: Welcome to Raccoon City là bộ phim thuộc thể loại kinh dị, hành động của Mỹ. Tác phẩm do đạo diễn Johannes Roberts chịu trách nhiệm chỉ đạo, với sự tham gia của các diễn viên Kaya Scodelario, Hannah John-Kamen, Robbie Amell, Tom Hopper, Avan jogia và Donal Logue. Bộ phim đưa chúng ta theo chân nhóm cảnh sát của thành phố Raccoon cùng các thành viên của đội cứu hộ và tác chiến đặc biệt. Họ bị mắc kẹt ở một thị trấn nhỏ và phải đối mặt với đợt bùng phát dịch Zombie lớn chưa từng thấy do tập đoàn Umbrella, một siêu công ty dược phẩm mờ ám đứng đằng sau thao túng. Cả nhóm đã phải lên kế hoạch và tìm mọi cách để có thể thoát khỏi thành phố Raccoon. Lúc mà cuộc hỗn loạn nổ ra, Claire Redfield (Kaya Scodelario) đã trở lại thị trấn để cảnh báo anh trai cô là Chris (Robbie Amell) rằng Umbrella là một tổ chức không hề tốt đẹp một chút nào. Và từ đó, chúng ta được theo dõi hành trình của những nhân vật quen thuộc bước ra từ trong series game nổi tiếng, gồm bộ đôi chị em Claire và Chris Redfield, cảnh sát tân binh Leon S. Kennedy (Avan Jogia), đặc vụ Jill Valentine (Hannah John-Kamen) và Albert Wesker (Tom Hopper), đối đầu với thủ lĩnh của Công ty Umbrella là William Birkin (Neal McDonough). Phần phim mới có nhiều điểm khác biệt so với thương hiệu phim Resident Evil của Paul W. S. Anderson, bản chuyển thể lần này của Roberts bám sát hơn so với bản gốc từ game. Và điều này cũng mang đến sự quen thuộc với các game thủ của trò chơi cũng như những ai yêu thích trò chơi này. Phần trò chơi đầu tiên của loạt game Resident Evil đã được gọi là kinh dị sinh tồn, và roberts đã triển khai bộ phim theo hướng như vậy, một bộ phim kinh dị sinh tồn với nhiều phân cảnh máu me trong phim. Tác phẩm lấy bối cảnh phim vào năm 1998, thì bộ phim cũng bày tỏ sự tôn trọng với hai trò chơi đầu tiên của loạt game. Kỹ xảo của Maxime Alexandre trong phim cũng mang đến một sự sắc nét và chân thật, đặc biệt là các hình ảnh Iconic, với những mảng màu đỏ bao trùm cả bộ phim, với một cơn mưa bất tận trông như máu. Khác với những bộ phim Resident Evil khác trước đây, Welcome to Raccoon City không lạm dụng nhiều về số lượng Zombie trong các cảnh phim. Thay vào đó, phim xây dựng sự kịch tính bằng cách tăng từ từ số lượng zombie khi các nhân vật cận kề hiểm nguy. Trong lúc Roberts làm rất tốt việc truyền tải bản chất của trò chơi vào câu chuyện chính trên màn ảnh, thì dàn nhân vật lại được xây dựng một cách khá khó chịu. Việc mọi người liên tục sử dụng các từ ngữ thô tục liên tục không làm cho câu chuyện trở nên thú vị mà lại khiến người xem cảm thấy khó chịu. Bên cảnh đó, những nhân vật trông như những kẻ ngốc, đặc biệt là các phân cảnh đối diện với các tình huống cực kỳ tồi tệ, nhưng họ lại đáp lại bằng ánh mắt vô hồn đầy bối rối. Tuy nhiên cốt truyện chặt chẽ đã phần nào gỡ gạc cho sự nhàm chán của nhân vật.', 1, '067062.jpg', 7, 2, 4, 'resident-evil-quy-du-troi-day', 0, '13+', ''),
(29, 'sd', '3', 1, '032596.jpg', 7, 2, 2, 'sd', 3, '0', ''),
(30, '31', '3', 1, '028765.jpg', 7, 2, 2, '31', 3, '13+', ''),
(31, 'Ma Trận: Hồi Sinh', 'Ma Trận: Hồi Sinhw', 1, 'comedy copy8335.jpg', 7, 2, 2, 'ma-tran-hoi-sinh', 0, '0', ''),
(32, 'f', 'f', 1, 'got8543.jpg', 7, 2, 2, 'f', 0, '0', ''),
(33, 'a', 'a', 1, 'funny copy9921.jpeg', 7, 2, 2, 'a', 0, '0', ''),
(34, 'v', 'v', 1, '041900.jpg', 7, 2, 2, 'v', 0, '0', ''),
(35, 'Resident Evil: Quỷ Dữ Trỗi Dậy', 'Resident Evil: Quỷ dữ trỗi dậy - Resident Evil: Welcome to Raccoon City là bộ phim thuộc thể loại kinh dị, hành động của Mỹ. Tác phẩm do đạo diễn Johannes Roberts chịu trách nhiệm chỉ đạo, với sự tham gia của các diễn viên Kaya Scodelario, Hannah John-Kamen, Robbie Amell, Tom Hopper, Avan jogia và Donal Logue. Bộ phim đưa chúng ta theo chân nhóm cảnh sát của thành phố Raccoon cùng các thành viên của đội cứu hộ và tác chiến đặc biệt. Họ bị mắc kẹt ở một thị trấn nhỏ và phải đối mặt với đợt bùng phát dịch Zombie lớn chưa từng thấy do tập đoàn Umbrella, một siêu công ty dược phẩm mờ ám đứng đằng sau thao túng. Cả nhóm đã phải lên kế hoạch và tìm mọi cách để có thể thoát khỏi thành phố Raccoon. Lúc mà cuộc hỗn loạn nổ ra, Claire Redfield (Kaya Scodelario) đã trở lại thị trấn để cảnh báo anh trai cô là Chris (Robbie Amell) rằng Umbrella là một tổ chức không hề tốt đẹp một chút nào. Và từ đó, chúng ta được theo dõi hành trình của những nhân vật quen thuộc bước ra từ trong series game nổi tiếng, gồm bộ đôi chị em Claire và Chris Redfield, cảnh sát tân binh Leon S. Kennedy (Avan Jogia), đặc vụ Jill Valentine (Hannah John-Kamen) và Albert Wesker (Tom Hopper), đối đầu với thủ lĩnh của Công ty Umbrella là William Birkin (Neal McDonough). Phần phim mới có nhiều điểm khác biệt so với thương hiệu phim Resident Evil của Paul W. S. Anderson, bản chuyển thể lần này của Roberts bám sát hơn so với bản gốc từ game. Và điều này cũng mang đến sự quen thuộc với các game thủ của trò chơi cũng như những ai yêu thích trò chơi này. Phần trò chơi đầu tiên của loạt game Resident Evil đã được gọi là kinh dị sinh tồn, và roberts đã triển khai bộ phim theo hướng như vậy, một bộ phim kinh dị sinh tồn với nhiều phân cảnh máu me trong phim. Tác phẩm lấy bối cảnh phim vào năm 1998, thì bộ phim cũng bày tỏ sự tôn trọng với hai trò chơi đầu tiên của loạt game. Kỹ xảo của Maxime Alexandre trong phim cũng mang đến một sự sắc nét và chân thật, đặc biệt là các hình ảnh Iconic, với những mảng màu đỏ bao trùm cả bộ phim, với một cơn mưa bất tận trông như máu. Khác với những bộ phim Resident Evil khác trước đây, Welcome to Raccoon City không lạm dụng nhiều về số lượng Zombie trong các cảnh phim. Thay vào đó, phim xây dựng sự kịch tính bằng cách tăng từ từ số lượng zombie khi các nhân vật cận kề hiểm nguy. Trong lúc Roberts làm rất tốt việc truyền tải bản chất của trò chơi vào câu chuyện chính trên màn ảnh, thì dàn nhân vật lại được xây dựng một cách khá khó chịu. Việc mọi người liên tục sử dụng các từ ngữ thô tục liên tục không làm cho câu chuyện trở nên thú vị mà lại khiến người xem cảm thấy khó chịu. Bên cảnh đó, những nhân vật trông như những kẻ ngốc, đặc biệt là các phân cảnh đối diện với các tình huống cực kỳ tồi tệ, nhưng họ lại đáp lại bằng ánh mắt vô hồn đầy bối rối. Tuy nhiên cốt truyện chặt chẽ đã phần nào gỡ gạc cho sự nhàm chán của nhân vật.', 1, '067062.jpg', 7, 2, 4, 'resident-evil-quy-du-troi-day', 0, '0', ''),
(36, 'sd', '3', 1, '032596.jpg', 7, 2, 2, 'sd', 3, '0', ''),
(37, '31', '3', 1, '028765.jpg', 7, 2, 2, '31', 3, '13+', ''),
(38, 'Ma Trận: Hồi Sinh', 'Ma Trận: Hồi Sinhw', 1, 'comedy copy8335.jpg', 7, 2, 2, 'ma-tran-hoi-sinh', 0, '0', ''),
(39, 'f', 'f', 1, 'got8543.jpg', 7, 2, 2, 'f', 0, '0', ''),
(40, 'a', 'a', 1, 'funny copy9921.jpeg', 7, 2, 2, 'a', 0, '0', ''),
(41, 'v', 'v', 1, '041900.jpg', 7, 2, 2, 'v', 0, '0', ''),
(42, 'Resident Evil: Quỷ Dữ Trỗi Dậy', 'Resident Evil: Quỷ dữ trỗi dậy - Resident Evil: Welcome to Raccoon City là bộ phim thuộc thể loại kinh dị, hành động của Mỹ. Tác phẩm do đạo diễn Johannes Roberts chịu trách nhiệm chỉ đạo, với sự tham gia của các diễn viên Kaya Scodelario, Hannah John-Kamen, Robbie Amell, Tom Hopper, Avan jogia và Donal Logue. Bộ phim đưa chúng ta theo chân nhóm cảnh sát của thành phố Raccoon cùng các thành viên của đội cứu hộ và tác chiến đặc biệt. Họ bị mắc kẹt ở một thị trấn nhỏ và phải đối mặt với đợt bùng phát dịch Zombie lớn chưa từng thấy do tập đoàn Umbrella, một siêu công ty dược phẩm mờ ám đứng đằng sau thao túng. Cả nhóm đã phải lên kế hoạch và tìm mọi cách để có thể thoát khỏi thành phố Raccoon. Lúc mà cuộc hỗn loạn nổ ra, Claire Redfield (Kaya Scodelario) đã trở lại thị trấn để cảnh báo anh trai cô là Chris (Robbie Amell) rằng Umbrella là một tổ chức không hề tốt đẹp một chút nào. Và từ đó, chúng ta được theo dõi hành trình của những nhân vật quen thuộc bước ra từ trong series game nổi tiếng, gồm bộ đôi chị em Claire và Chris Redfield, cảnh sát tân binh Leon S. Kennedy (Avan Jogia), đặc vụ Jill Valentine (Hannah John-Kamen) và Albert Wesker (Tom Hopper), đối đầu với thủ lĩnh của Công ty Umbrella là William Birkin (Neal McDonough). Phần phim mới có nhiều điểm khác biệt so với thương hiệu phim Resident Evil của Paul W. S. Anderson, bản chuyển thể lần này của Roberts bám sát hơn so với bản gốc từ game. Và điều này cũng mang đến sự quen thuộc với các game thủ của trò chơi cũng như những ai yêu thích trò chơi này. Phần trò chơi đầu tiên của loạt game Resident Evil đã được gọi là kinh dị sinh tồn, và roberts đã triển khai bộ phim theo hướng như vậy, một bộ phim kinh dị sinh tồn với nhiều phân cảnh máu me trong phim. Tác phẩm lấy bối cảnh phim vào năm 1998, thì bộ phim cũng bày tỏ sự tôn trọng với hai trò chơi đầu tiên của loạt game. Kỹ xảo của Maxime Alexandre trong phim cũng mang đến một sự sắc nét và chân thật, đặc biệt là các hình ảnh Iconic, với những mảng màu đỏ bao trùm cả bộ phim, với một cơn mưa bất tận trông như máu. Khác với những bộ phim Resident Evil khác trước đây, Welcome to Raccoon City không lạm dụng nhiều về số lượng Zombie trong các cảnh phim. Thay vào đó, phim xây dựng sự kịch tính bằng cách tăng từ từ số lượng zombie khi các nhân vật cận kề hiểm nguy. Trong lúc Roberts làm rất tốt việc truyền tải bản chất của trò chơi vào câu chuyện chính trên màn ảnh, thì dàn nhân vật lại được xây dựng một cách khá khó chịu. Việc mọi người liên tục sử dụng các từ ngữ thô tục liên tục không làm cho câu chuyện trở nên thú vị mà lại khiến người xem cảm thấy khó chịu. Bên cảnh đó, những nhân vật trông như những kẻ ngốc, đặc biệt là các phân cảnh đối diện với các tình huống cực kỳ tồi tệ, nhưng họ lại đáp lại bằng ánh mắt vô hồn đầy bối rối. Tuy nhiên cốt truyện chặt chẽ đã phần nào gỡ gạc cho sự nhàm chán của nhân vật.', 1, '067062.jpg', 7, 2, 4, 'resident-evil-quy-du-troi-day', 0, '0', ''),
(43, 'sd', '3', 1, '032596.jpg', 7, 2, 2, 'sd', 3, '0', ''),
(44, '31', '3', 1, '028765.jpg', 7, 2, 2, '31', 3, '13+', ''),
(45, 'Ma Trận: Hồi Sinh', 'Ma Trận: Hồi Sinhw', 1, 'comedy copy8335.jpg', 7, 2, 2, 'ma-tran-hoi-sinh', 0, '0', ''),
(46, 'f', 'f', 1, 'got8543.jpg', 7, 2, 2, 'f', 0, '0', ''),
(47, 'a', 'a', 1, 'funny copy9921.jpeg', 7, 2, 2, 'a', 0, '0', ''),
(48, 'v', 'v', 1, '041900.jpg', 7, 2, 2, 'v', 0, '0', ''),
(49, 'Resident Evil: Quỷ Dữ Trỗi Dậy', 'Resident Evil: Quỷ dữ trỗi dậy - Resident Evil: Welcome to Raccoon City là bộ phim thuộc thể loại kinh dị, hành động của Mỹ. Tác phẩm do đạo diễn Johannes Roberts chịu trách nhiệm chỉ đạo, với sự tham gia của các diễn viên Kaya Scodelario, Hannah John-Kamen, Robbie Amell, Tom Hopper, Avan jogia và Donal Logue. Bộ phim đưa chúng ta theo chân nhóm cảnh sát của thành phố Raccoon cùng các thành viên của đội cứu hộ và tác chiến đặc biệt. Họ bị mắc kẹt ở một thị trấn nhỏ và phải đối mặt với đợt bùng phát dịch Zombie lớn chưa từng thấy do tập đoàn Umbrella, một siêu công ty dược phẩm mờ ám đứng đằng sau thao túng. Cả nhóm đã phải lên kế hoạch và tìm mọi cách để có thể thoát khỏi thành phố Raccoon. Lúc mà cuộc hỗn loạn nổ ra, Claire Redfield (Kaya Scodelario) đã trở lại thị trấn để cảnh báo anh trai cô là Chris (Robbie Amell) rằng Umbrella là một tổ chức không hề tốt đẹp một chút nào. Và từ đó, chúng ta được theo dõi hành trình của những nhân vật quen thuộc bước ra từ trong series game nổi tiếng, gồm bộ đôi chị em Claire và Chris Redfield, cảnh sát tân binh Leon S. Kennedy (Avan Jogia), đặc vụ Jill Valentine (Hannah John-Kamen) và Albert Wesker (Tom Hopper), đối đầu với thủ lĩnh của Công ty Umbrella là William Birkin (Neal McDonough). Phần phim mới có nhiều điểm khác biệt so với thương hiệu phim Resident Evil của Paul W. S. Anderson, bản chuyển thể lần này của Roberts bám sát hơn so với bản gốc từ game. Và điều này cũng mang đến sự quen thuộc với các game thủ của trò chơi cũng như những ai yêu thích trò chơi này. Phần trò chơi đầu tiên của loạt game Resident Evil đã được gọi là kinh dị sinh tồn, và roberts đã triển khai bộ phim theo hướng như vậy, một bộ phim kinh dị sinh tồn với nhiều phân cảnh máu me trong phim. Tác phẩm lấy bối cảnh phim vào năm 1998, thì bộ phim cũng bày tỏ sự tôn trọng với hai trò chơi đầu tiên của loạt game. Kỹ xảo của Maxime Alexandre trong phim cũng mang đến một sự sắc nét và chân thật, đặc biệt là các hình ảnh Iconic, với những mảng màu đỏ bao trùm cả bộ phim, với một cơn mưa bất tận trông như máu. Khác với những bộ phim Resident Evil khác trước đây, Welcome to Raccoon City không lạm dụng nhiều về số lượng Zombie trong các cảnh phim. Thay vào đó, phim xây dựng sự kịch tính bằng cách tăng từ từ số lượng zombie khi các nhân vật cận kề hiểm nguy. Trong lúc Roberts làm rất tốt việc truyền tải bản chất của trò chơi vào câu chuyện chính trên màn ảnh, thì dàn nhân vật lại được xây dựng một cách khá khó chịu. Việc mọi người liên tục sử dụng các từ ngữ thô tục liên tục không làm cho câu chuyện trở nên thú vị mà lại khiến người xem cảm thấy khó chịu. Bên cảnh đó, những nhân vật trông như những kẻ ngốc, đặc biệt là các phân cảnh đối diện với các tình huống cực kỳ tồi tệ, nhưng họ lại đáp lại bằng ánh mắt vô hồn đầy bối rối. Tuy nhiên cốt truyện chặt chẽ đã phần nào gỡ gạc cho sự nhàm chán của nhân vật.', 1, '067062.jpg', 7, 2, 4, 'resident-evil-quy-du-troi-day', 0, '0', ''),
(50, 'sd', '3', 1, '032596.jpg', 7, 2, 2, 'sd', 3, '0', ''),
(51, '31', '3', 1, '028765.jpg', 7, 2, 2, '31', 3, '13+', ''),
(52, 'phim 1', 'sdasdsadasdsa', 1, 'LOTR1013.jpg', 7, 2, 3, 'phim-1', 75, '13+', NULL),
(53, 'd', 'd', 1, 'unnamed6778.jpg', 7, 2, 2, 'd', 2, '13+', '2O-Nn6lPS8w'),
(54, '1', '1', 1, 'ww843382.jpg', 7, 2, 2, '1', 1, '13+', 'ld4PppiZJWE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
