<?php
//DONE - NO NEED TO TOUCH FURTHER!!!!!
ob_start(); 
//turns on output buffering. waits until all php is executed before outputting it to the page
//php is a serverside language (think like SQL)
//it executes before the page is even loaded. It's prior to JS, HTML, etc.
// could run into problems if loading something when it's not loaded. best to start it first
session_start();
// just a means of saving variables and data when the browser is closed.
//we use sessions to tell if a user is logged in.
//no session = not logged in. 
// think of times you're kicked off w the message "session expired"

date_default_timezone_set("America/New_York");
//to find compatible php timezones - google "php timezone set"

    try {
        $con = new PDO("mysql:dbname=travflixdatabase;host=localhost", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); //sets error reporting
        //we're saying: connet to the database "travflixdatabase" at "localhost" 
        //with the username "root" which is created by default on db creation, and a blank string password
        //code... (PDO stands for PHP Data Object)
        // creating a PDO object creates a connection to the database
    } catch (PDOException $e) {
        exit("Connection failed: " . $e->getMessage());
        //throw $e; means it's looking for a variable called PDOException and will throw $e if it finds it
        //inside a try catch block means  it will try this function and if unsuccessful will execute the catch code
    }
?>