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

// Initialize the cart if it doesn't exist
if (!isset($_COOKIE['cart'])) {
    setcookie('cart', json_encode([]), time() + TOKEN_EXPIRAION_TIME, "/"); // 1 day expiration
}

// Function to add item to the cart
function addToCart($itemID, $name, $quantity, $price) {
    $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

    // Check if the item already exists in the cart
    $found = false;
    foreach ($cart as &$item) {
        if ($item['itemid'] == $itemID) {
            $item['quantity'] += $quantity;
            $found = true;
            break;
        }
    }

    // If item is not found, add new item
    if (!$found) {
        $cart[] = [
            'itemid' => $itemID,
            'name' => $name,
            'quantity' => $quantity,
            'price' => $price
        ];
    }

    // Save the updated cart to the cookie
    setcookie('cart', json_encode($cart), time() + TOKEN_EXPIRAION_TIME, "/");
}

// Function to view the cart
function viewCart() {
    $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

    if (empty($cart)) {
        echo "Your cart is empty.";
    } else {
        print_r($cart);
        foreach ($cart as $index => $item) {
            echo "Item Index: $index, Item ID: {$item['itemid']}, Quantity: {$item['quantity']}, Price: {$item['price']}<br>";
        }
    }
}

// Function to remove item from the cart
function removeFromCart($index) {
    $cart = isset($_COOKIE['cart']) ? json_decode($_COOKIE['cart'], true) : [];

    if (isset($cart[$index])) {
        unset($cart[$index]);
        // Re-index the array to remove gaps
        $cart = array_values($cart);
        setcookie('cart', json_encode($cart), time() + TOKEN_EXPIRAION_TIME, "/");
        echo "Item at index $index removed from cart.";
    } else {
        echo "Item at index $index not found in cart.";
    }
}
