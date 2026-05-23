<?php
$conn = mysqli_connect("localhost", "root", "", "college");
$sel = "SELECT * FROM `admission`";
$r = mysqli_query($conn, $sel);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
            color: #333;
        }

        #table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
        }

        table {
            width: 90%;
            max-width: 1100px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        th, td {
            padding: 12px 15px;
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
            background-color: #e0e0e0;
        }

        a.delete-btn {
            text-decoration: none;
            color: white;
            padding: 6px 12px;
            background-color: rgb(4, 244, 92);
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        a.delete-btn:hover {
            background-color: rgb(31, 201, 99);
        }

        .back-container {
            text-align: center;
            margin-top: 30px;
        }

        .back-btn {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>STUDENT DATA</h1>

    <div id="table-container">
        <table>
            <tr>
                <th>Cr_no</th>
                <th>Student Name</th>
                <th>Father Name</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Courses</th>
                <th>Delete</th>
            </tr>
            <?php while ($res = mysqli_fetch_array($r)) { ?>
                <tr>
                    <td><?php echo $res['CR_number']; ?></td>
                    <td><?php echo $res['Student_Name']; ?></td>
                    <td><?php echo $res['Father_Name']; ?></td>
                    <td><?php echo $res['Phone_number']; ?></td>
                    <td><?php echo $res['Address']; ?></td>
                    <td><?php echo $res['DOB']; ?></td>
                    <td><?php echo $res['Gender']; ?></td>
                    <td><?php echo $res['Courses']; ?></td>
                    <td>
    <a class="delete-btn" 
       href="deletestudent.php?delete=<?php echo urlencode($res['CR_number']); ?>" 
       onclick="return confirm('Are you sure you want to delete this record?')">
        Delete
    </a>
</td>

                </tr>
            <?php } ?>
        </table>
    </div>
    <!-- back button -->
    <div class="back-container">
        <a href="facultydashboard.php" class="back-btn">
            ⬅️ Back to Dashboard
        </a>
    </div>

</body>
</html>
