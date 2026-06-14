<!-- Create a function named collegeInfo() that displays:
College Name
Course Name
Academic Year -->
<?php
function collegeInfo($collegeName, $courseName, $academicYear) {
    echo "College Name: " . $collegeName . "<br>";
    echo "Course Name: " . $courseName . "<br>";
    echo "Academic Year: " . $academicYear . "<br>";
}

collegeInfo("Harvard University", "Computer Science", "2023-2024");
?>