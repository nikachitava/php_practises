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

<?php
$mark = 0;
$question = 3;
$answers = array('null', 'C', 'B', 'D');

for($i = 1; $i <= $question; $i++) {
    if(isset($_POST['answer_'.$i])) {
        if($_POST['answer_'.$i] == $answers[$i]) {
            $mark++;
        }
    }
}

echo "<h1>You Get $mark Answer</h1>"

?>