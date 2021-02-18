
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        button {
            border: none;
            background: #d9d9d9;
        }

        button:hover {
            background-color: #777E8B;
            transform: scale(1.1);
            color: white;
        }
    </style>
</head>

<body >
<!--------------navbar------------------>
<nav class="navbar navbar-expand-md navbar-light bg-secondary">
    <a href="index.php" class="navbar-brand " style="color:#fff" ><b>Texas Bank</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navabar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto" style="text-align:end">
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
<!------middle section----->
   

    <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Transaction</h2>
        <?php
         $servername = "localhost:3307";
         $username = "root";
         $password = " ";
         $dbname = "bank";
         
         $conn = mysqli_connect($servername, $username, $password, $dbname);
         
         if (!$conn) {
             die("Couldn't connect to the Database" . mysqli_connect_error());
         }
         $sid = (isset($_GET['id']) ? $_GET['id'] : ' ');
        $sql1 = "SELECT id,name,email,balance  FROM  users where id ='$sid' " ;
        $query = $conn->query($sql1) or die( die($conn->error)) ;
        $result1 = mysqli_query($conn, $sql1) ;
        if (!$result1) {
            echo "Error : " . $sql . "<br>" . mysqli_error($conn);
        }
        
        $rows1 = mysqli_fetch_assoc($result1) 
        
        ?>
        <form method="post" name="tcredit" class="tabletext"><br>
            <div>
                <table class="table table-striped table-condensed table-bordered">
                    <tr style="color : black;" class="bg-secondary">
                        <th class="text-center">Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Balance</th>
                    </tr>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows1['id'] ?></td>
                        <td class="py-2"><?php echo $rows1['name'] ?></td>
                        <td class="py-2"><?php echo $rows1['email'] ?></td>
                        <td class="py-2"><?php echo $rows1['balance'] ?></td>
                    </tr>
                </table>
            </div>
            <br>
            <label style="color : black;"><b>Transfer To:</b></label>
            <select name="to" class="form-control" required style="width:50%;">
                <option value="" disabled selected>Choose</option>
                <?php
                  $servername = "localhost";
                  $username = "root";
                  $password = " ";
                  $dbname = "bank";
                  
                  $conn = mysqli_connect($servername, $username, $password, $dbname);
               
                  if (!$conn) {
                      die("Couldn't connect to the Database" . mysqli_connect_error());
                  }
               
  
                $sid = (isset($_GET['id']) ? $_GET['id'] : '');
                $sql = "SELECT * FROM users where id!='$sid' ";
                $query = $conn->query($sql) or die( die($conn->error));
                
                $result = mysqli_query($conn, $sql);
                if (!$result) {
                    echo "Error " . $sql . "<br>" . mysqli_error($conn);
                }
                while ($rows = mysqli_fetch_assoc($result)) {
                ?>
                    <option class="table" value="<?php echo $rows['id']; ?>">

                        <?php echo $rows['name']; ?> (Balance:
                        <?php echo $rows['balance']; ?> )

                    </option>
                <?php
                }
                ?>
                <div>
            </select>
           
   
            <label style="color : black;"><b>Amount:</b></label>
            <input type="number" class="form-control" name="amount" required style="width:50%;">
            <br>
            <div class="text-start">
                <button class="btn btn-secondary ml-2" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
        </form>
    </div>


    <footer class="text-center mt-5 py-2">
        <p> <b>PRATHIBA M</b><br>GRIP TheSparksFoundation.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

</body>

</html>
<?php
   $servername = "localhost";
   $username = "root";
   $password = " ";
   $dbname = "bank";
   
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   
   if (!$conn) {
       die("Couldn't connect to the Database" . mysqli_connect_error());
   }

if (isset($_POST['submit'])) {
    $from = (isset($_GET['id']) ? $_GET['id'] : ' ');
    
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT id,name,email,balance from users where id='$from' ";
    $query = $conn->query($sql) or die( die($conn->error));
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from users where id='$to' ";
    $query = $conn->query($sql) or die( die($conn->error));
    $sql2 = mysqli_fetch_array($query);

     if (($amount) < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  
        echo '</script>';
    }
    else if ($amount > $sql1['balance']) {

        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")'; 
        echo '</script>';
    }
    else if ($amount == 0) {

        echo "<script type='text/javascript'>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    } else {
        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE users set balance=$newbalance where id='$from'";
        mysqli_query($conn, $sql);
        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE users set balance=$newbalance where id='$to'";
        mysqli_query($conn, $sql);

        $sender = $sql1['name'];
        $receiver = $sql2['name'];
        $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo "<script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>";
        }

        $newbalance = 0;
        $amount = 0;
    }
}
?>

