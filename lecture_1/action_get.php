<h1>GET METHOD</h1>
<style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 100px;
    }
    table, th, td {
        border:1px solid black;
    }
</style>
<?php
    // echo "<pre>";
    // print_r($_GET);
    // echo "</pre>";
    echo "<table>";
    foreach ($_GET as $value) {
        echo "<tr>";
        echo "<td> $value </td>";
        echo "</tr>";
        
    }
        
    echo "</table>";
?>