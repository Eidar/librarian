<?php include 'view/header.php'; ?>

<div class="container centered" id="main">

    <div class="col-md-6">
        <h2>Search books</h2>
        <hr>
        <form action="search.php" method="post">
        <input type="text" placeholder="Title">
        <br>
        <input type="text" placeholder="Author">
        <br>
        <input type="text" placeholder="ISBN">
        <br>
        <button type="submit" class= "btn btn-primary" value="Submit">Search</button>
        </form>
    </div>

    <div class="col-md-6">
        <h2>Search members</h2>
        <hr>
        <form action="search.php" method="post">
        <input type="text" placeholder="Name">
        <br>
        <input type="text" placeholder="Email">
        <br>
        <input type="text" placeholder="Member ID">
        <br>
        <button type="submit" class= "btn btn-primary" value="Submit">Search</button>
        </form>
    </div>



</div>
</body>
</html>