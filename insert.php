<?php
$conn = mysqli_connect('localhost', 'root', '', 'mydb');
$age = rand(18, 99);
$query = "INSERT INTO `user` (`id`, `firstName`, `lastName`, `age`, `gender`, `department`, `date_of_join`, `salary`, `email`, `password`, `hobby`, `photo`) VALUES (NULL, 'jay', 'makwana', $age, 'female', 'hd', '22-22-2022', '21000', 'jay@gmail.com', '123', 'hd', 'no')";
$rslt = mysqli_query($conn, $query);
