<?php
// Function to calculate result
function calculateResult($marks)
{
    $totalMarks = 0;
    $subjectsCount = count($marks);

    // Validate marks and check for fail condition
    foreach ($marks as $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid\n";
            return;
        }
        if ($mark < 33) {
            echo "The student has failed in one or more subjects.\n";
            return;
        }
        $totalMarks += $mark;
    }

    // Calculate total and average
    $averageMarks = $totalMarks / $subjectsCount;

    // Determine the grade using switch-case
    $grade = '';
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = "D";
            break;
        default:
            $grade = "F";
    }

    // Output the result
    echo "Total Marks: $totalMarks\n";
    echo "Average Marks: " . number_format($averageMarks, 2) . "\n";
    echo "Grade: $grade\n";
}

// Input marks for five subjects
$marks = array(88, 80, 86, 82, 90); // You can change these values

// Call the function to calculate result
calculateResult($marks);
