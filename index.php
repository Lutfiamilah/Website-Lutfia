<?php
// Set the path to the target folder
$target_folder = "user";

// Check if the target folder exists
if (is_dir($target_folder)) {
    // Redirect the user to the target folder
    header("Location: " . $target_folder);
    exit;
} else {
    // Handle the case where the target folder doesn't exist
    echo "The target folder does not exist.";
}
?>