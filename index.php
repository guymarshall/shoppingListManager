<?php

/**
 * A basic shopping list manager.
 * Each item has date-times of creation and last edit, a description, and an optional quantity.
 * The user can enter a command to create, edit or delete a line item. There should also be a command to list all line items in order of entry creation or edit date-time descending or ascending.
 * The line items should be persisted, so that all details are available when the program is next restarted.
 * Each line item should also have an automatically-generated ID for the user to use for edit and delete.
 */

// include the SQLiteDB.php file
require_once 'SQLiteDB.php';

// Create a new SQLiteDB object
$database = new SQLiteDB(new SQLite3('database.db'));

// Execute an SQL query
$result = $database->query('SELECT * FROM mytable');

// Prepare a statement and bind parameters
$stmt = $database->prepare('INSERT INTO mytable (name, email) VALUES (:name, :email)');
$database->bindValue($stmt, ':name', 'John');
$database->bindValue($stmt, ':email', 'john@example.com');

// Execute the statement
$database->execute($stmt);

// Fetch all rows from a result set
$rows = $database->fetchAll($result);

// Get the ID of the last inserted row
$id = $database->lastInsertRowID();