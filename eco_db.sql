SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `text` int(11) NOT NULL,
  `img_id` int(11) NOT NULL
);

CREATE TABLE `img` (
  `img_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
);

CREATE TABLE `like` (
  `like_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL
);

CREATE TABLE `person` (
  `person_id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `session_token` varchar(255) NOT NULL,
  `person_status_id` int(11) NOT NULL DEFAULT '1'
);

INSERT INTO `person` (`person_id`, `login`, `email`, `password`, `img`, `session_token`, `person_status_id`) VALUES
(1, 'login', 'rostik057@gmail.com', '$2y$10$vy2F.d4DwftMZpUcMPXe9Ooiaa9IS46MnACzZza.EiF1FnfA52Vee', NULL, '41063acfda4289f15243894da271999a', 1);

CREATE TABLE `person_status` (
  `person_status_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
);

INSERT INTO `person_status` (`person_status_id`, `name`) VALUES
(1, 'available'),
(2, 'deleted'),
(3, 'banned');

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author_id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL
);

INSERT INTO `post` (`post_id`, `title`, `text`, `date`, `author_id`, `img`) VALUES
(1, 'Почему экология важна?', 'Почему экология важна?', '2022-05-19 14:07:17', 1, NULL),
(2, 'Почему экология важна?', 'Почему экология важна?', '2022-05-19 15:52:51', 1, NULL),
(4, 'Почему экология важна?', 'Почему экология важна?', '2022-05-19 16:26:45', 1, '1'),
(5, 'Почему экология важна?', 'Почему экология важна?', '2022-05-19 16:27:12', 1, ''),
(6, 'Почему экология важна?', 'Почему экология важна?', '2022-05-19 16:27:37', 1, '');

ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

ALTER TABLE `img`
  ADD PRIMARY KEY (`img_id`);

ALTER TABLE `like`
  ADD PRIMARY KEY (`like_id`);

ALTER TABLE `person`
  ADD PRIMARY KEY (`person_id`),
  ADD KEY `person_status_id` (`person_status_id`);

ALTER TABLE `person_status`
  ADD PRIMARY KEY (`person_status_id`);

ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `author_id` (`author_id`);

ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `like`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `person`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `person_status`
  MODIFY `person_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`person_status_id`) REFERENCES `person_status` (`person_status_id`);

ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_3` FOREIGN KEY (`author_id`) REFERENCES `person` (`person_id`);
COMMIT;