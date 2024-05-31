<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Page</title>
    <link rel="stylesheet" href="category.css">
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="category">
                <div class="category-header" onclick="toggleCategory('men')"><i class="bi bi-plus"></i> MEN</div>
                <div class="subcategory" id="men">
                    <div class="subcategory-header" onclick="toggleSubcategory('men-accessories')">Men Accessories</div>
                    <div class="subcategory-content" id="men-accessories">
                        <a href="#">Headwear</a>
                        <a href="#">Sunglasses</a>
                        <a href="#">Watches</a>
                        <a href="#">Belts</a>
                        <a href="#">Multipacks</a>
                        <a href="#">Other Accessories</a>
                    </div>
                    <div class="subcategory-header">Men's Shoes</div>
                    <div class="subcategory-header">Bottoms</div>
                    <div class="subcategory-header">T-shirts & Shirts</div>
                </div>
            </div>
            <div class="category">
                <div class="category-header" onclick="toggleCategory('women')">WOMEN</div>
            </div>
            <div class="category">
                <div class="category-header" onclick="toggleCategory('kids')">KIDS</div>
            </div>
            <div class="category">
                <div class="category-header" onclick="toggleCategory('electronics')">ELECTRONICS</div>
            </div>
        </div>
        <div class="main-content">
            <h2>All Products Under "Men"</h2>
            <div class="product">
                <img src="https://via.placeholder.com/150" alt="Amazfit GTS 3 Smart Watch">
                <p>Amazfit GTS 3 Smart Watch for Android iPhone</p>
                <p class="price">$179 <span class="original-price">$199</span></p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/150" alt="Men's Soft Classic Sneaker">
                <p>Men's Soft Classic Sneaker</p>
                <p class="price">$91 <span class="original-price">$110</span></p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/150" alt="Men's Fleece Jogger Pant">
                <p>Men's Fleece Jogger Pant</p>
                <p class="price">$37 <span class="original-price">$58</span></p>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>
    <script src="category.js"></script>
</body>
</html>