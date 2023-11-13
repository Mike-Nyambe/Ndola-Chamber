<?php
// ? Database Functions
function create_mysql_connection() {
  $host = "localhost";
  $username = "root";
  $password = "";

  $connection = new mysqli($host, $username, $password);
  if (!$connection) {
    die("MySQL connection failed!" . $connection->connect_error);
  }

  return $connection;
}

function create_database($database_name) {
  $connection = create_mysql_connection();
  $query = "CREATE DATABASE IF NOT EXISTS {$database_name}";
  $result = $connection->query($query);

  if (!$result) {
    die("Create database query failed!" . $connection->connect_error);
  }

  return $result;
}

function connect_to_database($database_name) {
  $host = "localhost";
  $username = "root";
  $password = "";

  $connection = new mysqli($host, $username, $password, $database_name);
  if (!$connection) {
    die("Database connection failed!" . $connection->error);
  }

  return $connection;
}

function create_table($table_name, $table_columns) {
  $connection = connect_to_database("ndolaChamber");
  $query = "CREATE TABLE IF NOT EXISTS {$table_name}({$table_columns})";
  $result = $connection->query($query);

  if (!$result) {
    die("Create table query failed." . $connection->error);
  }

  return $result;
}

function insert_news() {
  $connection = connect_to_database("ndolachamber_db");

  if (isset($_POST["submit"])) {
      $news_title = $connection->real_escape_string($_POST["title"]);
      $news_content = $connection->real_escape_string($_POST["content"]); // Corrected the input name to "editor"
      $news_date = $connection->real_escape_string($_POST["date"]);

      // File Upload Handling
      $news_image = $_FILES["image"]["name"];
      $news_image_temp = $_FILES["image"]["tmp_name"];
      $destination_directory = "images/news/"; // Replace with the actual absolute path
      $destination_path = $destination_directory . $news_image;

      // Define the allowed file extensions and maximum file size
      $allowed_extensions = array("png", "jpg", "jpeg");
      $max_file_size = 100 * 1024 * 1024; // 100MB in bytes

      // Get the file extension of the uploaded file
      $file_extension = strtolower(pathinfo($news_image, PATHINFO_EXTENSION));

      if (!in_array($file_extension, $allowed_extensions)) {
          echo ("<p class='text-danger text-center'>File type not allowed. Please upload a PNG, JPG, or  JPEG file.</p>");
          return false; // Return false to indicate failure
      }

      if ($_FILES["image"]["size"] > $max_file_size) {
        echo ("<p class='text-danger text-center'>File size exceeds the maximum allowed size (100MB)</p>");
          return false; // Return false to indicate failure
      }

      if (move_uploaded_file($news_image_temp, $destination_path)) {

          echo ("<p class='text-success text-center'>File uploaded successfully</p>");
          
      } else {
        echo ("<p class='text-success text-center'>File uploaded successfully</p>");
          return false; // Return false to indicate failure
      }

      $query = "INSERT INTO news(news_title, news_image, news_date, news_content)";
      $query .= " VALUES('$news_title', '$news_image', '$news_date', '$news_content')"; // Use single quotes

      $result = $connection->query($query);

      if ($result) {
          return true; // Return true to indicate success
      } else {
          die("Insert news query failed: " . $connection->error);
      }
  }
  return false; // Return false if the "submit" button wasn't clicked
}

function select_news($condition_1 = "", $condition_2 = "", $condition_3 = "") {
  $connection = connect_to_database("ndolachamber_db");
  $query = "SELECT * FROM news " . $condition_1 . " " . $condition_2 . " " . $condition_3;
  $result = $connection->query($query);

  if (!$result) {
    die("Select news query failed." . $connection->error);
  }

  return $result;
}

function delete_news($news_id) {
  $connection = connect_to_database("ndolachamber_db");

  $query = "DELETE FROM news";
  $query .= " WHERE news_id = {$news_id}";

  $result = $connection->query($query);

  if (!$result) {
    die("Delete news query failed. " . $connection->error);
  }

  return $result;
}

// function update_news($news_id) {
//   $connection = connect_to_database("ndolaChamber");

//   if (isset($_POST["update-news"])) {
//     $news_title = $connection->real_escape_string($_POST["news-title"]);
//     $news_content = $connection->real_escape_string($_POST["news-content"]);

//     $news_image = $_FILES["news-image"]["name"];
//     $news_image_temp = $_FILES["news-image"]["tmp_name"];
//     move_uploaded_file($news_image_temp, "../assets/images/posts/{$news_image}");

//     $query = "UPDATE news SET";
//     $query .= " news_title = '{$news_title}',";
//     $query .= " news_image = '{$news_image}',";
//     $query .= " news_date = NOW(),";
//     $query .= " news_content = '{$news_content}'";
//     $query .= " WHERE news_id = {$news_id}";

//     $result = $connection->query($query);

//     if (!$result) {
//       die("Insert News query failed. " . $connection->error);
//     }

//     return $result;
//   }
// }
 