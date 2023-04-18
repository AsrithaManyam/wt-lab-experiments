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
</style>
</head>
<body>


<div class="topnav">
  <a href="index.php">Feed</a>
  <a href="post.php">Your posts</a>
  <a href="upload.php">upload</a>
  <a href="info.php">Personal Information</a>
  <a class="active" href="about.php">About</a>
  <div class="logout">
  <a href="logout.php"><button>logout</button></a>
</div>
</div>

<div style="padding-left:16px">
    <p>Facebook by Meta for better connections.Meta builds technologies that help people connect, find communities, and grow businesses. When Facebook launched in 2004, it changed the way people connect. Apps like Messenger, Instagram and WhatsApp further empowered billions around the world. Now, Meta is moving beyond 2D screens toward immersive experiences like augmented and virtual reality to help build the next evolution in social technology.</p>
</div>

</body>
</html>

