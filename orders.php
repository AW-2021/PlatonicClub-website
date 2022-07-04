<?php
    include_once('./config/config.php');
    session_start();

    $customer_id = $_SESSION['customer_id'];

    if(!isset($customer_id)){
        header('location:login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Orders</title>

        <!--font awesome cdnjs link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!--custom css file link -->
        <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    </head>

    <body>

    <?php  
        include_once('./header.php');
    ?>

        <section class="heading">
            <h3>your orders</h3>
            <p> <a href="home.php">home</a> / order </p>
        </section>

        <section class="placed-orders">

            <h1 class="title"><span>&#9829;</span> placed orders <span>&#9829;</span></h1>

            <div class="box-container">

            <?php
                $sql_select_orders = mysqli_query($conn, "SELECT * FROM orders WHERE customer_id = '$customer_id'") or die('query failed');
                if(mysqli_num_rows($sql_select_orders) > 0){
                    while($fetch_orders = mysqli_fetch_assoc($sql_select_orders)){
            ?>
            <div class="box">
                <p> placed on : <span><?php echo $fetch_orders['placed_on_date']; ?></span> </p>
                <p> name : <span><?php echo $fetch_orders['name']; ?></span> </p>
                <p> number : <span><?php echo $fetch_orders['number']; ?></span> </p>
                <p> email : <span><?php echo $fetch_orders['email']; ?></span> </p>
                <p> address : <span><?php echo $fetch_orders['address']; ?></span> </p>
                <p> payment method : <span><?php echo $fetch_orders['method']; ?></span> </p>
                <p> your orders : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
                <p> total price : <span>Rs <?php echo $fetch_orders['total_price']; ?>/-</span> </p>
                <p> payment status : <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){echo 'tomato'; }else{echo 'green';} ?>"><?php echo $fetch_orders['payment_status']; ?></span> </p>
            </div>
            <?php
                }
            }
            else{
                echo '<p class="empty">no orders placed yet!</p>';
            }
            ?>
            </div>

        </section>


    <?php 
        include_once('./footer.php');
    ?>

    <script src="./js/script.js"></script>
    </body>
</html>