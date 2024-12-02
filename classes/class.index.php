<?php
include_once 'class.connection.php';

class pagination
{
    private $Name;
    public $conn;
    function __construct($conn)
    {
        $this->conn = $conn;
    }
    function GetStudentData($page)
    {
        $start = $page * 10;
        $end = 10;
        return "select * from student_details limit " . $start . ", " . $end . "";
        $student_details =  $this->conn->query("select * from student_details limit " . $start . ", " . $end . "");
        $PaginationContent = '';
        if ($student_details->num_rows > 0) {
            $SNo = 1;
            while ($data = $student_details->fetch_assoc()) {
                $PaginationContent .= '<tr>
                <td>' . $SNo . '</td>
                <td>' . $data['name'] . '</td>
                <td>' . $data['birthdate'] . '</td>
                <td>' . $data['mobileNo'] . '</td>
                <td>' . $data['emailId'] . '</td>
                </tr>';
                $SNo++;
            }
        }
        return $PaginationContent;
    }
}
