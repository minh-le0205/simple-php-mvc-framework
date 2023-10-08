<?php

// ======== PATHS =========
define('DS', DIRECTORY_SEPARATOR); // Định nghĩa dấu "\" để đồng bộ path, khi up lên host tránh sai sót.
define('ROOT_PATH', dirname(__FILE__)); // định nghĩa đường dẫn thư mục gốc
define('LIBRARY_PATH', ROOT_PATH . DS . 'libs' . DS); // định nghĩa đường dẫn thư mục libs
define('CONTROLLER_PATH', ROOT_PATH . DS . 'controllers' . DS); // định nghĩa đường dẫn thư mục controllers
define('MODEL_PATH', ROOT_PATH . DS . 'models' . DS); // định nghĩa đường dẫn thư mục models
define('VIEW_PATH', ROOT_PATH . DS . 'views' . DS); // định nghĩa đường dẫn thư mục views
define('PUBLIC_PATH', ROOT_PATH . DS . 'public' . DS); // định nghĩa đường dẫn thư mục public

// Đường dẫn tương đối : thường dùng cho khai script, css, ...
define('ROOT_URL', '');
define('PUBLIC_URL', ROOT_URL . 'public' . DS);


// ======== DATABASE =========
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'Minh@123');
define('DB_NAME', 'manage_user');
