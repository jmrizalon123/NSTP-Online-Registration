<?php
require_once('config.php');
if (isset($_POST['submit'])) {
        $studentId = $_POST['studentId'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $middlename = $_POST['middlename'];
        $username = $_POST['username'];
        $bday = $_POST['bday'];
        $placeofbirth = $_POST['placeofbirth'];
        $Gender = $_POST['Gender'];
        $height = $_POST['height'];
        $Weight = $_POST['Weight'];
        $Religion = $_POST['Religion'];
        $Nationality = $_POST['Nationality'];
        $Course = $_POST['Course'];
        $yearSec = $_POST['yearSec'];

        $email = $_POST["email"];
        $contact_number = $_POST["contact_number"];
        $Elementary = $_POST["Elementary"];
        $elem_year = $_POST["elem_year"];
        $Secondary = $_POST["Secondary"];
        $second_year = $_POST["second_year"];

        $Tetiary = $_POST['Tetiary'];
        $teriary_year = $_POST['teriary_year'];
    
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, 'nstp_registration');
    $query = "INSERT INTO `student_information` (studentId, fname, lname, middlename, username, bday, placeofbirth, Gender, height, Weight, Religion, Nationality, Course, yearSec, email, contact_number, Elementary, elem_year, Secondary, second_year, Tetiary, teriary_year)VALUES
    ('$studentId', '$fname', '$lname', '$middlename', '$username', '$bday', '$placeofbirth', '$Gender', '$height', '$Weight', '$Religion', '$Nationality', '$Course', '$yearSec', '$email', '$contact_number', '$Elementary', '$elem_year', '$Secondary', '$second_year', '$Tetiary', '$teriary_year')";
     $query_run = mysqli_query($connection, $query);

     if($query_run){
        echo '<script type = "text/javascript">alert("Data save successfully")</script>';

     }
     else{
       echo '<script type = "text/javascript">alert("Data not submited")</script>';

     }
    
}
?>