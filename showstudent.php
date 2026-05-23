<?php
include 'dbconnect.php';
$sel = "SELECT * FROM `faculty signup`";
$execute = mysqli_query($conn, $sel);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        #table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: rgb(4, 4, 246);
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        p {
            text-align: center;
            margin-top: 20px;
        }

        /* Attractive back button */
        .back-btn {
            display: block;
            margin: 30px auto;
            width: 200px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            border-radius: 30px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .back-btn:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>
    <h1>FACULTY DATA</h1>
    <div id="table-container">
        <table>
            <tr>
                <th>Sr No</th>
                <th>Name</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            <?php while ($res = mysqli_fetch_array($execute)) { ?>
            <tr>
                <td><?php echo $res['sr_no']; ?></td>
                <td><?php echo $res['Name']; ?></td>
                <td><?php echo $res['Mobile_number']; ?></td>
                <td><?php echo $res['Email']; ?></td>
                <td>
                    <button><a href="update.php?idd=<?php echo $res['sr_no']; ?>">Update</a></button>
                    <button><a href="deletefaculty.php?delete=<?php echo $res['sr_no']; ?>" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></button>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <!-- Attractive Back Button -->
    <a href="facultydashboard.php" class="back-btn">Go Back to Dashboard</a>
</body>
</html>
