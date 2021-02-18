<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  


    <style type="text/css">
        button {
            transition: 1.5s;
        }

        button:hover {
            background-color: #F9F80A;
            color: white;
        }
    </style>
</head>

<body >
    <?php
    $servername = "localhost:3307";
    $username = "root";
    $password = " ";
    $dbname = "bank";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if (!$conn) {
        die("Couldn't connect to the Database" . mysqli_connect_error());
    }
    $sql = "SELECT id,name,email,balance FROM users";
    $result = mysqli_query($conn, $sql);
    
  
    ?>

<!--------------navbar------------------>

<nav class="navbar navbar-expand-md navbar-light bg-dark">
    <a href="index.php" class="navbar-brand " style="color:#fff" ><b>Texas Bank</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navabar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link" style="color: white;"><b>Home</b></a>
            </li>
           
            <li class="nav-item">
                <a href="transfermoney.php" class="nav-link" style="color:white ;"><b>Transfer Money</b></a>
            </li>
            <li class="nav-item">
                <a href="transactionhistory.php" class="nav-link" style="color: white;"><b>Transaction History</b></a>
            </li>
        </ul>
    </div>

    
</nav>

    <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transfer Money</h2>
        <br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                                <th scope="col" class="text-center py-2">Id</th>
                                <th scope="col" class="text-center py-2">Name</th>
                                <th scope="col" class="text-center py-2">E-Mail</th>
                                <th scope="col" class="text-center py-2">Balance</th>
                                <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr style="color : black;">
                                    <td class="py-2"><?php echo $rows['id'] ?></td>
                                    <td class="py-2"><?php echo $rows['name'] ?></td>
                                    <td class="py-2"><?php echo $rows['email'] ?></td>
                                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                                    <td><a href="userdetail.php" id= <?php echo $rows['id']; ?>> 
                                    <button type="button" class="btn btn-secondary" >Transfer Money</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    

    <footer class="text-center mt-5 py-2 bg-dark">
         <b>PRATHIBA M</b><br>GRIP TheSparksFoundation.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>
