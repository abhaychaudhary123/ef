<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["csv_file"])) {
    $file = $_FILES["csv_file"];    
    // Check if file is uploaded successfully
    if ($file["error"] == UPLOAD_ERR_OK) {
        // Read the CSV file
        $csvData = array_map('str_getcsv', file($file["tmp_name"]));
        // Loop through each row starting from the second row (assuming the first row contains headers)
        foreach ($csvData as $row) {
            // Get the email addresses from the columns (assuming the columns are labeled as 'old_email' and 'new_email')
            $oldEmail = $row[0]; // Assuming the first column contains old email
            $newEmail = $row[1]; // Assuming the second column contains new email

            // If both old and new emails are provided
            if (!empty($oldEmail) && !empty($newEmail)) {
                echo "$oldEmail --- $newEmail --- <br>";
                
            } else {
                echo "Missing email address(es) in row.<br>";
            }
        }
    } else {
        echo "Error uploading file: " . $file["error"];
    }
} else {
    echo "No file uploaded.";
}

?>


https://stackoverflow.com/questions/9139202/how-to-parse-a-csv-file-using-php