<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Load classes
require 'vendor/autoload.php';

/* Include Initials as part of the code */
require 'includes/init.php';

/* Get connection to database to access 
   data with list of orders to be dispatched  */
$conn = require 'includes/db.php';


// retreive batches from database
$joins = Join::getAllJoin($conn);