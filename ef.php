<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Sender</title>
</head>
<body>
    <h2>Upload Excel File</h2>
    <form action="send_emails.php" method="post" enctype="multipart/form-data">
        <input type="file" name="csv_file" accept=".xls,.xlsx">
        <button type="submit">Upload</button>
    </form>
</body>
</html>
