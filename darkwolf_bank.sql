SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Pranit', 'joel', 200, '2021-06-17 18:58:27'),
(2, 'Shaam', 'Leo', 200, '2021-04-17 19:00:31'),
(3, 'Pratik', 'Abhishek', 5000, '2021-05-17 19:01:32'),
(4, 'Trevor', 'Aditya', 5000, '2021-07-17 19:06:15'),
(5, 'Leander', 'Pranit', 500, '2021-10-17 19:28:24'),
(6, 'Abhishek', 'Leo', 500, '2021-04-17 19:30:31'),
(7, 'Leo', 'Joel', 200, '2021-04-17 19:31:22'),
(8, 'Pratik', 'Joel', 520, '2021-03-18 07:39:58'),
(9, 'Leo', 'Pranit', 500, '2021-04-11 09:37:08'),
(10, 'Abhishek', 'Aditya', 100, '2021-10-11 11:52:18');


CREATE TABLE `users` (
   `id` int(3) NOT NULL,
   `name` text NOT NULL,
   `email` varchar(30) NOT NULL,
   `balance` int(8) NOT NULL)
    -- ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO  users (`id`, `name`, `email`, `balance`) VALUES
(1087, 'Pranit', 'pranit@gmail.com', 46600),
(2654, 'Pratik', 'pratik@gmail.com', 30620),
(3624, 'Joel', 'joel@gmail.com', 40000),
(4542, 'Leo', 'leo@gmail.com', 48800),
(5345, 'Aditya', 'aditya@gmail.com', 35000),
(5465, 'Abhishek', 'abhishek@gmail.com', 49500),
(6554, 'Trevor', 'trevor@gmail.com', 40000),
(7875, 'Leander', 'leander@gmail.com', 49480),
(8877, 'Shaam', 'shaam@gmail.com', 40000),



ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54655;
COMMIT;

