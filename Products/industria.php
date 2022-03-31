<?php
        include "../lib/header.php";
        include "../lib/footer.php";
        session_start();
        if (!isset($_SESSION["logged_in"])){
                header("Location: /~todom8/Crystal-Shop/login.php");
        }
        $price = 20;
        $product = "industria";
        if (isset($_POST["buy"])){
                if (isset($_SESSION[$product])){
                        $_SESSION[$product] += 1;
                        $_SESSION["cart_price"] += $price;
                } else {
                        $_SESSION[$product] = 1;
                        $_SESSION["cart_price"] += $price;
                }
        }
        if (isset($_POST["rm"])){
                if (isset($_SESSION[$product]) && $_SESSION[$product]>0){
                        $_SESSION[$product] -= 1;
                        $_SESSION["cart_price"] -= $price;
                }
        }
        if (isset($_POST["rmall"])){
                if (isset($_SESSION[$product])){
                        $_SESSION["cart_price"] -= $_SESSION[$product] * $price;
                        $_SESSION[$product] = 0;
                }
        }
?>
<html>
        <form action='industria.php' method="POST">
                <input type="submit" name="buy" value="Add to Cart for $10">
                <input type="submit" name="rm" value="Remove 1 from Cart">
                <input type="submit" name="rmall" value="Remove All from Cart">

        </form>
</html>
