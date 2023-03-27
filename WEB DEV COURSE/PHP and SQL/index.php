<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<center>
    <fieldset>
        <div class="message">
        <?php
        $msg = $_GET['msg'];
        switch($msg) {
            case "ïnsert":
                echo "<span style='color:green;'>data insertd</span>";
                break;
              case "not":
                echo "<span style='color:red;'>data not insert</span>";
                break;
              case "already":
                echo "<span style='color:red;'>already in database</span>";
                break;
              case "namenull":
                echo "<span style='color:red;'>name cannot be null</span>";
                break;
                break;
              case "phonenull":
                echo "<span style='color:red;'>phone number can't be empty</span>";
                break;
                break;
              case "classnull":
                echo "<span style='color:red;'> cannot be null</span>";
                break;
              case "addressnull":
                echo "<span style='color:red;'>address cannot be null</span>";
                break;
              default:
                echo "Enter your detail";
        }
        ?>
        </div>
        <h4>
        enter your details
        </h4>
        <form action="process.php" method="POST">
            <input type="text" name="name" placeholder="Enter Name" /><br><br>
            <input type="text" name="phone" placeholder="Enter Phone" /><br><br>
            <input type="text" name="class" placeholder="Enter Class" /><br><br>
            <input type="text" name="address" placeholder="Enter Address" /><br><br>
            <input type="submit" name="savedata" value="Submit"/><br><br>
        </form>
    </fieldset>
</center>
</body>
</html>