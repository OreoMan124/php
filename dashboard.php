<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="dashboard.css">
<title>Dashboard</title>

<?php 
    include("database.php");
?>





</head>


<body>
<div class="header">
<h1>Home Page</h1>
<div class="user-section">
<span>User</span>
<span>👤</span>
</div>
</div>


<hr class="divider" />


<div class="welcome">Welcome User!</div>


<div class="content-box">
    <h2>Dashboard Content</h2>
    <p>This is where the main dashboard content will go.</p>
</div>

<div class="search-bar">
    <form method="post" action="#">
    <input type="text" name="search" required placeholder="Search...">
    <button type="submit" class="search-btn">Search</button>

</form>
</div>
</body>
</html>