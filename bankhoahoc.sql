-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 02, 2024 lúc 02:01 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bankhoahoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_price` varchar(255) NOT NULL,
  `pttt` varchar(255) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `classname` varchar(255) NOT NULL,
  `thoigian` varchar(100) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trangthai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`bill_id`, `user_id`, `full_name`, `email`, `phone`, `course_name`, `course_price`, `pttt`, `instructor`, `classname`, `thoigian`, `time_start`, `time_end`, `timestamp`, `trangthai`) VALUES
(28, 16, 'hung ', 'hung@gmail.com', '0918526165', 'NodeJS ', '9000000', 'Thanh toán Ví VNPAY', 'Nguyễn Văn Hưng', 'H201', '01/10/2023', '14:00:00', '16:00:00', '2023-12-12 07:24:17', 'Đã thanh toán'),
(29, 18, 'quynh ', 'quynh@gmail.com', '0972345234', ' ExpressJS', '15000000', 'Thanh toán Ví VNPAY', 'Nguyễn Văn Hưng', 'H101', '20/12/2023', '09:00:00', '11:00:00', '2023-12-12 07:48:20', 'Đã thanh toán'),
(32, 16, 'hung ', 'hung@gmail.com', '012937273', 'Javascript nâng cao', '12000000', 'Thanh toán Ví VNPAY', 'Trần Văn Hương', 'P208', '10/09/2023', '14:00:00', '16:00:00', '2023-12-12 09:30:58', 'Đã thanh toán'),
(33, 16, 'hung ', 'hung@gmail.com', '01823623', 'Javascript nâng cao', '12000000', 'Thanh toán tại Trung tâm', 'Trần Văn Hương', 'P208', '10/09/2023', '14:00:00', '16:00:00', '2023-12-12 09:33:14', 'Chưa thanh toán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(12, 'HTML + CSS '),
(13, 'NodeJS & ExpressJS'),
(14, 'ReactJS 2022'),
(15, 'Javascript cơ bản'),
(16, 'Javascript nâng cao'),
(17, 'Java');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `course_id`, `content`, `timestamp`) VALUES
(24, 15, 54, 'khoá học quá hay', '2023-12-12 03:23:51'),
(25, 15, 54, 'tuyệt vời', '2023-12-12 03:24:03'),
(26, 15, 50, 'quá tuyệt vời', '2023-12-12 03:24:11'),
(27, 15, 50, 'thật bổ x', '2023-12-12 03:24:18'),
(28, 15, 51, 'uy tín quá ạ', '2023-12-12 03:24:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(50) NOT NULL,
  `instructor` varchar(100) DEFAULT NULL,
  `price` decimal(20,0) NOT NULL,
  `category_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `thoigian` varchar(100) NOT NULL,
  `intro` varchar(1000) NOT NULL,
  `time_start` time NOT NULL,
  `classname` text NOT NULL,
  `time_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `description`, `image`, `instructor`, `price`, `category_id`, `lesson_id`, `thoigian`, `intro`, `time_start`, `classname`, `time_end`) VALUES
(44, 'HTML CSS cơ bản', 'Khoá học kéo dài trong 3 tháng sẽ giúp bạn nâng cao khả năng lập trình', 'htmlcss  2.png', 'Nguyễn Sỹ Đạo', 12000000, 12, 1, '15/12/2023', 'Học HTML và CSS Cơ Bản: Tạo Nền Tảng Cho Sự Hiểu Biết Vững Chắc về Web DevelopmentBạn đang bắt đầu hành trình của mình trong thế giới phức tạp nhưng thú vị của lập trình web? Học HTML và CSS là bước quan trọng đầu tiên để xây dựng nền tảng cơ bản cho sự thành công trong lĩnh vực này.', '08:00:00', 'P201', '10:00:00'),
(48, 'HTML CSS cơ bản', 'Khoá học kéo dài trong 3 tháng sẽ giúp bạn nâng cao khả năng lập trình ', 'htmlcss.png', 'Nguyễn Sỹ Đạo', 6000000, 12, 2, '10/11/2013', 'Học HTML và CSS Cơ Bản: Tạo Nền Tảng Cho Sự Hiểu Biết Vững Chắc về Web DevelopmentBạn đang bắt đầu hành trình của mình trong thế giới phức tạp nhưng thú vị của lập trình web? Học HTML và CSS là bước quan trọng đầu tiên để xây dựng nền tảng cơ bản cho sự thành công trong lĩnh vực này.', '13:00:00', 'P203', '15:00:00'),
(49, ' ExpressJS', 'Trong vòng 4 tháng bạn sẽ nâng cao được kiến thức NodeJS & ExpressJS', '4.png', 'Nguyễn Văn Hưng', 15000000, 13, 1, '20/12/2023', 'Express.js: Express.js là một framework web cho Node.js, được thiết kế để xây dựng ứng dụng web và API một cách nhanh chóng và dễ dàng. Express cung cấp một loạt các tính năng và chức năng giúp giảm độ phức tạp của việc xây dựng ứng dụng web.', '09:00:00', 'H101', '11:00:00'),
(50, 'NodeJS ', 'Trong vòng 6 tháng bạn sẽ nâng cao được kiến thức NodeJS & ExpressJS', '3.png', 'Nguyễn Văn Hưng', 9000000, 13, 2, '01/10/2023', 'Node.js: Node.js là một nền tảng phát triển dựa trên JavaScript, được xây dựng trên JavaScript runtime V8 của Google Chrome. Node.js cho phép chạy mã JavaScript ở phía máy chủ, không chỉ ở môi trường trình duyệt. Điều này mở ra cánh cửa cho việc xây dựng ứng dụng máy chủ hiệu suất cao, độ mở rộng tốt và dễ quản lý.\r\n', '14:00:00', 'H201', '16:00:00'),
(51, 'ReactJS cơ bản', 'Trong vòng 3 tháng bạn sẽ nâng cao được kiến thức ReactJS', 'ReactJS 1.png', 'Vũ Minh Thuận', 7000000, 14, 1, '01/12/2023', 'ReactJS:\r\nReactJS là một thư viện JavaScript được phát triển bởi Facebook, được sử dụng để xây dựng giao diện người dùng (UI) cho các ứng dụng web đơn trang (Single Page Applications - SPAs). ReactJS giúp tạo ra các giao diện người dùng tương tác một cách dễ dàng và hiệu quả.\r\nReact Router: Thư viện React Router được sử dụng để quản lý điều hướng và định tuyến trong ứng dụng React, giúp người phát triển xây dựng các ứng dụng đơn trang với nhiều trang.\r\n', '09:00:00', 'F101', '11:00:00'),
(52, 'ReactJS nâng cao', 'Trong vòng 6 tháng bạn sẽ nâng cao được kiến thức ReactJS', 'ReactJS 5.png', 'Vũ Minh Thuận', 18000000, 14, 2, '10/10/2023', 'Components (Thành phần): React ứng dụng mô hình lập trình hướng thành phần. Mỗi thành phần đại diện cho một phần nhỏ của giao diện người dùng và có thể chứa nhiều thành phần con. Điều này giúp tái sử dụng mã và quản lý trạng thái của ứng dụng một cách hiệu quả.\r\n\r\nVirtual DOM (DOM Ảo): React sử dụng một biểu diễn ảo của DOM để tối ưu hóa hiệu suất. Thay vì cập nhật trực tiếp DOM mỗi khi có thay đổi, React so sánh DOM ảo với DOM thực tế và chỉ cập nhật những phần thay đổi. Điều này giúp giảm tải cho trình duyệt và làm tăng hiệu suất ứng dụng.\r\n\r\nJSX (JavaScript XML): JSX là một phần quan trọng của React, cho phép viết mã HTML bên trong JavaScript. JSX giúp tạo ra mã nguồn dễ đọc và dễ hiểu hơn, đồng thời cung cấp sức mạnh của JavaScript để xử lý logic.', '14:00:00', 'F204', '16:00:00'),
(53, 'Javascript Cơ Bản', 'Trong vòng 3 tháng bạn sẽ nâng cao được kiến thức Javascript Cơ Bản', 'js cơ bản.png', 'Trần Văn Hương', 5000000, 15, 1, '01/12/2023', 'JavaScript là một ngôn ngữ lập trình đa năng thường được sử dụng để thêm tính tương tác vào các trang web. Dưới đây là mô tả về các khái niệm và cú pháp cơ bản của JavaScript:', '10:00:00', 'P205', '00:00:00'),
(54, 'Javascript nâng cao', 'Trong vòng 6 tháng bạn sẽ nâng cao được kiến thức Javascript nâng cao', 'js nâng cao 2.png', 'Trần Văn Hương', 12000000, 16, 2, '10/09/2023', 'JavaScript Nâng Cao:\r\n\r\nJavaScript không chỉ là ngôn ngữ lập trình cơ bản, mà còn cung cấp một loạt các tính năng và khái niệm nâng cao để xử lý các tình huống phức tạp hơn. Dưới đây là mô tả về một số khái niệm JavaScript nâng cao:\r\nWeb APIs và Fetch API:\r\n\r\nSử dụng Web APIs để tương tác với trình duyệt và môi trường. Ví dụ: DOM API để thao tác với cấu trúc HTML, và Fetch API để làm việc với các yêu cầu HTTP.', '14:00:00', 'P208', '16:00:00'),
(55, 'test', 'frfe', 'js cơ bản.png', 'Hưng', 6000000, 15, 1, '19/10/2912', 'frfer', '00:00:00', 'P201', '00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lessons`
--

CREATE TABLE `lessons` (
  `lesson_id` int(11) NOT NULL,
  `lesson_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `lesson_name`) VALUES
(1, 'Buổi sáng'),
(2, 'Buổi chiều'),
(3, 'Buổi tối');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`, `registration_date`, `role`) VALUES
(15, 'thuan', '123', 'thuan@gmail.com', 'THUAN', '2023-12-05 11:15:01', 'admin'),
(16, 'hung', '123', 'hung@gmail.com', 'hung', '2023-12-05 11:22:13', 'user'),
(18, 'quynh', '123', 'quynh@gmail.com', 'quynh', '2023-12-08 02:33:13', 'user'),
(28, 'dao1', '123', 'dawo@gmail.com', 'sỹ đạo', '2023-12-12 09:29:00', 'user');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `lesson_id` (`lesson_id`);

--
-- Chỉ mục cho bảng `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Các ràng buộc cho bảng `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
