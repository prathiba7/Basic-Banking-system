
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    

    <title>Basic Banking System</title>

</head>

<body>
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
<!------------------welcome section------->

    <div class="container-fluid">
        <div class="row bg-secondary ">
            <div class="heading text-center my-5">
                    <h2 style="color:white">Welcome to TEXAS Bank</h2>
                 
            </div>
        </div>
    </div>
<!-----------middle section-------->
<div class="middle-section m-5" >
    <div class="container">
        <div class="row activity text-center">
            

            <div class="col-sm-6 mt-0">
                
                <div class="d-flex flex-column">
            <a href="moneytransfer.php">
             <div class="p-2">
                    <img src="img/transfer.png" alternate="image" style="height:250px;">
             </div>
             <div class="p-2">
            <button class="btn btn-lg btn-secondary">Transfer Money</button></a>
             </div>
              
               
           
                </div>
               
            </div>

            <div class="col-lg-6 ">
               
                <div class="d-flex flex-column">
             <div class="p-2">
                    <img src="img/history.jpg" alternate="image" style="height:250px;">
             </div>
             <div class="p-2">
             <a href="transactionhistory.php"><button class="btn btn-lg btn-secondary">Transaction History</button></a>
             </div>
              
                </div>
              
          
               
            </div>

        </div>
    </div>
</div>


        


    <!---------footer section------------->
    <footer class="text-center  mt-5 bg-dark" style="color:#fff">
      Prathiba M</b><br>GRIP TheSparksFoundation.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>