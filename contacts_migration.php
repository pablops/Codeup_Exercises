<?
define("DB_HOST", "127.0.0.1");
define("DB_NAME", "contacts_db");
define("DB_USER", "contacts_user");
define("DB_PASS", "codeup");

require 'db_connect.php';

$query = 'DROP TABLE IF EXISTS contacts;

	CREATE TABLE contacts (
    id INT     UNSIGNED     NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(100) NOT NULL,
    last_name  VARCHAR(100) NOT NULL,
    email      VARCHAR(100) NOT NULL,
    birth_date DATE,
    PRIMARY KEY (id),
    UNIQUE KEY username(email)
);';

// Run query, if there are errors they will be thrown as PDOExceptions
$dbc->exec($query);
?>