<?php include("functions.php"); ?>

<?php
// Create database
create_database("ndolachamber_db");

$news_table_columns = "
news_id INT(11) NOT NULL AUTO_INCREMENT,
news_image VARCHAR(255) NOT NULL,
news_title VARCHAR(255) NOT NULL,
news_content LONGTEXT NOT NULL,
news_date DATE NOT NULL,
PRIMARY KEY (news_id)";

create_table("news", $news_table_columns);

$accounts_table_columns = "
id INT(11) NOT NULL AUTO_INCREMENT,
email varchar(250) NOT NULL,
first_name varchar(250) NOT NULL,
last_name varchar(250) NOT NULL,
username text NOT NULL,
password text NOT NULL,

PRIMARY KEY (id)";

create_table("accounts", $accounts_table_columns);

echo "<h1>Tables created successfully</h1>";
?>