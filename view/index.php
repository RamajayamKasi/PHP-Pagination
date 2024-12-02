<?php
include_once "../classes/class.connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/library/bootstrap.min_5.3.3.css" />
    <link rel="stylesheet" href="../assets/css/index.css" />
    <title>PHP Pagination</title>
</head>

<body class="text-center">
    <div class="addStudentDetails">
        <label for="">Name:
            <input type="text" placeholder="Enter the name.">
        </label>
        <label for="">Birth date:
            <input type="date" placeholder="Enter the birth data.">
        </label>
        <label for="">Mobile No:
            <input type="number" placeholder="Enter the mobile no.">
        </label>
        <label for="">Email Id:
            <input type="email" placeholder="Enter the email id.">
        </label>
    </div>
    <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Birth Date</th>
                <th>Mobile</th>
                <th>Email Id</th>
            </tr>
        </thead>
        <tbody id="StudentDetails"></tbody>
    </table>

    <button class="btn btn-primary" id="previous_data">Previous</button>
    <button class="btn btn-primary" id="next_data">Next</button>
</body>
<script src="../assets/js/library/jquery_3.7.1.js"></script>
<script src="../assets/js/library/bootstrap.min_5.3.3.js"></script>
<script src="../assets/js/index.js"></script>

</html>