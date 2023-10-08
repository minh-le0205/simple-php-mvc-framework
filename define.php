<?php

// ======== PATHS =========
define('DS', DIRECTORY_SEPARATOR); // Định nghĩa dấu "\" để đồng bộ path, khi up lên host tránh sai sót.
define('ROOT_PATH', dirname(__FILE__)); // định nghĩa đường dẫn thư mục gốc
define('LIBRARY_PATH', ROOT_PATH . DS . 'libs' . DS); // định nghĩa đường dẫn thư mục libs


// ======== DATABASE =========
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'Minh@123');
define('DB_NAME', 'manage_user');
