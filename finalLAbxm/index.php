<?php
$conn = new mysqli('localhost', 'root', '', 'job_portal');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        $employer_name = $_POST['employer_name'];
        $company_name = $_POST['company_name'];
        $contact_no = $_POST['contact_no'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO employers (employer_name, company_name, contact_no, username, password)
                VALUES ('$employer_name', '$company_name', '$contact_no', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: employer_list.php"); 
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $employer_name = $_POST['employer_name'];
        $company_name = $_POST['company_name'];
        $contact_no = $_POST['contact_no'];

        $sql = "UPDATE employers SET employer_name='$employer_name', company_name='$company_name', contact_no='$contact_no'
                WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header("Location: employer_list.php");
        } else {
            echo "Error updating employer: " . $conn->error;
        }
    }

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM employers WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header("Location: employer_list.php");
        } else {
            echo "Error deleting employer: " . $conn->error;
        }
    }
}

//employers AJAX search
if (isset($_GET['search'])) {
    $search_term = $_GET['search'];
    $sql = "SELECT * FROM employers WHERE employer_name LIKE '%$search_term%' OR company_name LIKE '%$search_term%'";
    $result = $conn->query($sql);

    $employers = [];
    while ($row = $result->fetch_assoc()) {
        $employers[] = $row;
    }

    echo json_encode($employers);
    exit;
}
?>
