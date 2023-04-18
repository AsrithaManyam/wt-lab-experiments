<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin-top: 20px;
  font-family:sans-serif;
  background-color:grey;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
  font-size: 17px;
  height:25px;
  justify-content: center;
}

.topnav a:hover {
  background-color: grey;
  color: black;
}

.topnav a.active {
  background-color: white;
  color: black;
}
.logout{
  justify-content: right;
  display: flex;
}
button{
  margin-bottom: 10px;
  padding: 8px 20px;
  align-self: center;
  background: #1877f2;
  border: none;    
  border-radius: 5px;
  color: #fff;
  font-size: 1rem;
  font-weight: bold;
}
button:hover{
  background: #196fe0;
}

.commentbox {
  border: solid 1.9px #9e9e9e;
  border-radius: 1.3rem;
  background: none;
  padding: 1rem;
  font-size: 1rem;
  color: #000000;
  transition: border 150ms cubic-bezier(0.4,0,0.2,1);
  height: 15px;
  width: 150px;
}

</style>
</head>
<body>

<div class="topnav">
  <a href="index.php">Feed</a>
  <a class="active" href="post.php">Your posts</a>
  <a href="upload.php">upload</a>
  <a href="info.php">Personal Information</a>
  <a href="about.php">About</a>
  <div class="logout">
  <a href="logout.php"><button>logout</button></a>
</div>
</div>
  <?php
        session_start();
        $con=mysqli_connect("localhost","root","","facebook");
        $eid=$_SESSION["email"];
        $phonenumber;
        $rows=mysqli_query($con,"select * from images where email='$eid'");
        while($row=mysqli_fetch_array($rows))
        {
            echo "<br><br>";
            echo "<div  style='border:3px solid black; margin-left:37%; margin-right:38%; padding-top: 10px; border-radius:10px;'>";
            $imageURL = 'uploads/'.$row["image"];
            echo '<div align=center><img src="'.$imageURL.'" alt="no image" height=300 width=350></div>';
            echo "<p style='margin-left:15px; margin-bottom:-20px;'>".$row["description"]."</p>";
            echo " <table style='margin-top: 0px;'><form method='post' action='like.php'>";
            echo "<div class='float'><tr><th><input type='hidden' name='image_id' value='" . $row["post_id"] . "' />";
            echo "<input style='background-color:black; color: #fff; border: none; padding: 10px 20px; font-size: 16px;' type='submit' value='&#10084;&nbsp;" . $row["likes"] . "' /></th>";
            echo "</form>";
            echo "<br>";
            echo "<form method='post' action='post.php'>";
            echo "<input type='hidden' name='image_id' value='" . $row["post_id"] . "'/>";
            echo "<th><input class='commentbox' type='text' name='comment' placeholder='Comment here'></th>";
            echo "<th><input type='submit' name='submit' value='comment' style='height:45px; background-color:black; color:#fff; border: none; padding: 10px 20px; font-size: 16px;'></th></tr></table>";
            echo "</form>"; 
            
            
            if ($con->connect_error) {
              die("Connection failed: " . $con->connect_error);
            }
              $image_id=$row["post_id"];
              $sql="select * from comments where post_id='$image_id'";
              $res=mysqli_query($con,$sql);
              echo "<h2>Comments:</h2>";
              while($comm=mysqli_fetch_array($res)){
                echo "<p>".$comm['email']." commented :".$comm['comment']."</p>";
              }
            echo "</div>";   
        }
        if(isset($_POST["submit"]))
            {
              $image_id=$_POST["image_id"];
              $user_id=$_SESSION["email"];
              $comment=$_POST["comment"];
              $sql="insert into comments(post_id,email,comment) values('$image_id','$user_id','$comment')";
              if(mysqli_query($con,$sql)){
              }
              else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
              }
              echo '<script>window.location.replace("post.php");</script>';
            }  
    ?>
<div>
  
</div>

</body>
</html>
