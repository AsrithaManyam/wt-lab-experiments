<html>
    <head>
        <style>
            body{
                background-color:beige;
            }
            #h1
            {
                color:brown;

            }
            </style>
            </head>
        </head>
        <?php
        session_start();?>
        <h3 align="center" id="h1" color="red">
        welcome <?php echo $_SESSION["name"]."!!!";?>
        </h3>
        <h3>you successfully entered into page</h3>
        <form action="log.php" Method="POST">
            <input type="submit"name="logout"value="logout">
        </form>