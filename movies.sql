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
