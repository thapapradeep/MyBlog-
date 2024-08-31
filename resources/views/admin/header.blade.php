<!-- head -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            padding: 20px;
            background: #343a40;
            color: #fff;
        }
        .sidebar h3 {
            margin-top: 0;
            margin-bottom: 20px;
        }
        .sidebar a {
            color: #ddd;
            text-decoration: none;
        }
        .sidebar a:hover {
            background: #495057;
            border-radius: 4px;
        }
        .main-content {
            margin-left: 220px; /* Adjust based on sidebar width */
            padding: 20px;
        }
        .card-deck .card {
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
        }

        .img_deg
        {
            height: 100px;
            width: 150px;
            padding: 10px;
        }

    </style>
</head>