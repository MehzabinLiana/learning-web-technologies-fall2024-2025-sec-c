<?php
$conn = new mysqli('localhost', 'root', '', 'job_portal');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM employers";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
            text-align: left;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>Employer List</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Employer Name</th>
                <th>Company Name</th>
                <th>Contact Number</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['employer_name']; ?></td>
                        <td><?php echo $row['company_name']; ?></td>
                        <td><?php echo $row['contact_no']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No employers found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <a href="index.html">Back to Home</a>
    <a href="index.html">Add a New Employer</a>
</body>
</html>
