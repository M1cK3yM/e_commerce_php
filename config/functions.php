<?php
require('config.php');
function generateToken($length = 32)
{
    $randombytes = random_bytes($length);

    $token = bin2hex($randombytes);

    return $token;
}

function checkToken($token)
{
    global $conn;
    $statement = mysqli_prepare($conn, "SELECT * FROM users WHERE token = ? ");
    mysqli_stmt_execute($statement, array($token));
    $total = mysqli_num_rows(mysqli_stmt_get_result($statement));

    if ($total) {
        return true;
    }
    return false;
}

// Function to add item to the cart
function addToCart($itemID, $quantity)
{
    $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

    // If the item is already in the cart, update the quantity
    if (isset($cart[$itemID])) {
        $cart[$itemID] += $quantity;
    } else {
        $cart[$itemID] = $quantity;
    }

    // Save the updated cart to the cookie
    setcookie('cart', json_encode($cart), time() + TOKEN_EXPIRAION_TIME, "/");
}

// Function to view the cart
function viewCart()
{
    $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

    if (empty($cart)) {
        echo "Your cart is empty.";
    } else {
        foreach ($cart as $itemID => $quantity) {
            echo "Item ID: $itemID, Quantity: $quantity<br>";
        }
    }
}

// Function to remove item from the cart
function removeFromCart($itemID)
{
    $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

    if (isset($cart[$itemID])) {
        unset($cart[$itemID]);
        setcookie('cart', json_encode($cart), time() + TOKEN_EXPIRAION_TIME, "/");
        echo "Item $itemID removed from cart.";
    } else {
        echo "Item $itemID not found in cart.";
    }
}

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        $itemID = htmlspecialchars($_POST['itemID']);
        $quantity = intval($_POST['quantity']);
        addToCart($itemID, $quantity);
    } elseif (isset($_POST['remove'])) {
        $itemID = htmlspecialchars($_POST['itemID']);
        removeFromCart($itemID);
    }
}
