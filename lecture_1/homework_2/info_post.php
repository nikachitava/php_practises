<style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 100px;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }
</style>

<h1>POST METHOD</h1>

<?php
$MARK = $_POST['mark'];


echo "<table>";
echo "<tr><th>Name</th><th>Surname</th><th>Course</th><th>Semester</th><th>Faculty</th><th>Mark</th><ht><th>Grade</th></tr>";
echo "<tr>";
foreach ($_POST as $value) {
    echo "<td> $value </td>";
};

echo '<td>' . getGrade($MARK) . '</td>';

echo "</tr>";
echo "</table>";

function getGrade($mark) {
    if ($mark <= 100 && $mark >= 91) {
        return 'A';
    } else if ($mark <= 91 && $mark >= 81) {
        return 'B';
    } else if ($mark <= 81 && $mark >= 71) {
        return 'C';
    } else if ($mark <= 61 && $mark >= 51) {
        return 'D';
    } else {
        return 'FALL';
    }
}


?>