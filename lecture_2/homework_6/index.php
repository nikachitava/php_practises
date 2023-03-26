<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>
<body>

    <h1>PHP Form Validation Example</h1>
    <p style="color: red">* required field</p>
    <form action="form.php" method="POST">
        <label>Name:</label>
        <input type="text" name='name' required> <span style="color: red">*</span><br><br>
        <label>E-mail:</label>
        <input type="text" name='mail' required> <span style="color: red">*</span><br><br>
        <label>Website:</label>
        <input type="text" name='web'><br><br>
        <label>Comment:</label>
        <textarea name="comment" cols="30" rows="4"></textarea><br><br>
        <label>Gender</label>
        <input type="radio" name="gender[]" value="Female">Female
        <input type="radio" name="gender[]" value="Male">Male
        <input type="radio" name="gender[]" value="Other">Other  <span style="color: red">*</span><br><br>
        <button>Submit</button>
    </form>
    
</body>
</html>