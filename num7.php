<!--  Create a function named studentDetails() that accepts:
Student Name
Enrollment Number
Semester -->
<?php
function studentDetails($studentName, $enrollmentNumber, $semester) {
    echo "Student Name: " . $studentName . "<br>";
    echo "Enrollment Number: " . $enrollmentNumber . "<br>";
    echo "Semester: " . $semester . "<br>";
}   
studentDetails("John Doe", "EN123456", "Fall 2023");
?>