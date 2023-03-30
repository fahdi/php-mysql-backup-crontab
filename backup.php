<?php
// MySQL database credentials
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';

// Backup filename
$date = date('Y-m-d_H-i-s');
$filename = $database . '_' . $date . '.sql';

// MySQL dump command
$command = "mysqldump --host=$host --user=$username --password=$password $database > $filename";

// Execute command
system($command);
