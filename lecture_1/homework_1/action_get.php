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

<h1>GET METHOD</h1>

<?php
$salary = $_GET['salary'];
$tax = $_GET['tax'];
$full_salary = $salary - ($salary * $tax / 100);

echo "<table>";
echo "<tr><th>Name</th><th>Surname</th><th>Role</th><th>Salary</th><th>Tax</th><th>Full salary</th></tr>";
echo "<tr>";
foreach ($_GET as $value) {
    echo "<td> $value </td>";
};

echo "<td>$full_salary</td>";

echo "</tr>";
echo "</table>";
?>