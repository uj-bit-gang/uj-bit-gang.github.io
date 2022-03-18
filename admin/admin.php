 <?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" href="images/favcon.png">
    <link rel="shortcut icon" href="images/favcon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <title>UJ BIT GANG | Admin</title>
</head>
<body id="head"> 
    <div class="header">
        <img src="../images/logo.png" alt="university of johannesburg logo">
        <h1>UJ Business IT Gang</h1>
        <p>Admin Panel</p>
        <p><?php echo $_SESSION['name']; ?></p>
        <a class='link' href="logout.php">Logout</a>
    </div>

    <div class="admin">
        <form action="update.php" method="post">
            <h2 class="admin-heading">New Update</h2>
            <table class="admin-table">
                <tr>
                    <td><label for="update">Type of update: </label></td>
                    <td><select name="update" id="update">
                        <option value="task">Task</option>
                        <option value="announcement">Announcement</option>
                    </select></td>
                </tr>
                <tr>
                    <td><label for="module">Module: </label></td>
                    <td><select name="module" id="module">
                        <option value="dsw">DSW02A1</option>
                        <option value="bay">BAY02A1</option>
                        <option value="cmn">CMN02A1</option>
                        <option value="ifs">IFS02A1</option>
                    </select></td>
                </tr>
                <tr>
                    <td><label for="date">Date: </label></td>
                    <td><input type="date" name="date" id="date"></td>
                </tr>
                <tr>
                    <td><label for="time">Time: </label></td>
                    <td><input type="time" name="time" id="time"></td>
                </tr>
                <tr>
                    <td><label for="task">Task/Announcement: </label></td>
                    <td><textarea name="task" id="task" cols="30" rows="10"></textarea></td>
                </tr>
            </table>
            <button class='submit' type="submit">Exercute</button>
        </form>
    </div>

</body> 