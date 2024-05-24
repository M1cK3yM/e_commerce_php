CREATE TABLE users (
  id int (11) PRIMARY KEY,
  avatar VARCHAR (255),
  first_name VARCHAR (255) NOT NULL,
  last_name VARCHAR (255) NOT NULL,
  username VARCHAR (255) NOT NULL UNIQUE,
  email VARCHAR (255) NOT NULL UNIQUE,
  password VARCHAR (255) NOT NULL,
  birth_of_date DATE NOT NULL,
  phone_number VARCHAR (255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  deleted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO `users` (`id`, `avatar`, `first_name`, `last_name`, `username`, `email`, `password`, `birth_of_date`, `phone_number`, `created_at`, `deleted_at`) VALUES
(1, 'avatar', 'michael', 'michael', 'mickey', 'michaelyirdaw652@gmail.com', 'michael', '2002-04-11', '+251993594499', '2024-05-12 20:12:21', '2024-05-12 20:12:21');

CREATE TABLE addresses (
  id int (11) PRIMARY KEY,
  user_id int (11),
  title VARCHAR (255) NOT NULL,
  address_line_1 VARCHAR (255) NOT NULL,
  address_line_2 VARCHAR (255) NOT NULL,
  country VARCHAR (255) NOT NULL,
  city VARCHAR (255) NOT NULL,
  postal_code VARCHAR (255) NOT NULL,
  landmark VARCHAR (255) NOT NULL,
  phone_number VARCHAR (255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  deleted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE `main_category` (
  `mc_id` int(11) NOT NULL,
  `mc_name` varchar(255) NOT NULL,
  `icon` text NOT NULL,
  `is_showed` int(1) NOT NULL,
  `is_new` int(1) NOT NULL,
  PRIMARY KEY (mc_id)
);

INSERT INTO
  `main_category` (
    `mc_id`,
    `mc_name`,
    `icon`,
    `is_showed`,
    `is_new`
  )
VALUES
  (1, 'Men', 'ri-shirt-line', 1, 0),
  (2, 'Women', 'ri-user-5-line', 1, 0),
  (3, 'Kids', 'ri-bear-smile-fill', 1, 0),
  (4, 'Electronics', 'ri-computer-line', 1, 0),
  (5, 'Sports', 'ri-run-line', 1, 1),
  (
    6,
    'Health & Household',
    'ri-heart-pulse-line',
    0,
    0
  ),
  (7, 'Home & Kitchen', 'ri-home-8-line', 0, 0);

CREATE TABLE `sub_category` (
  `sc_id` int(11) NOT NULL,
  `sc_name` VARCHAR (255) NOT NULL,
  `mc_id` int(11) NOT NULL,
  PRIMARY KEY (sc_id),
  FOREIGN KEY (mc_id) REFERENCES main_category(mc_id)
);

INSERT INTO
  `sub_category` (`sc_id`, `sc_name`, `mc_id`)
VALUES
  (1, 'Men Accessories', 1),
  (2, "Men's Shoes", 1),
  (3, 'Beauty Products', 2),
  (4, 'Accessories', 2),
  (6, 'Shoes', 2),
  (7, 'Clothing', 2),
  (8, 'Bottoms', 1),
  (9, 'T-shirts & Shirts', 1),
  (10, 'Clothing', 3),
  (11, 'Shoes', 3),
  (12, 'Accessories', 3),
  (14, 'Electronic Items', 4),
  (15, 'Computers', 4);

CREATE TABLE `end_category` (
  `ec_id` int(11) NOT NULL,
  `ec_name` VARCHAR (255) NOT NULL,
  `sc_id` int(11) NOT NULL,
  PRIMARY KEY (ec_id),
  FOREIGN KEY (sc_id) REFERENCES sub_category(sc_id)
);

INSERT INTO
  `end_category` (`ec_id`, `ec_name`, `sc_id`)
VALUES
  (1, 'Headwear ', 1),
  (2, 'Sunglasses', 1),
  (3, 'Watches', 1),
  (4, 'Sandals', 2),
  (5, 'Boots', 2),
  (6, 'Tops', 3),
  (7, 'T-Shirt', 3),
  (8, 'Watches', 4),
  (9, 'Sunglasses', 4),
  (11, 'Sports Shoes', 2),
  (12, 'Sandals', 6),
  (13, 'Flat Shoes', 6),
  (14, 'Hoodies', 7),
  (15, 'Coats & Jackets', 7),
  (16, 'Pants', 8),
  (17, 'Jeans', 8),
  (18, 'Joggers', 8),
  (19, 'Shorts', 8),
  (20, 'T-shirts', 9),
  (21, 'Casual Shirts', 9),
  (22, 'Formal Shirts', 9),
  (23, 'Polo Shirts', 9),
  (24, 'Vests', 9),
  (25, 'Casual Shoes', 2),
  (26, 'Boys', 10),
  (27, 'Girls', 10),
  (28, 'Boys', 11),
  (29, 'Girls', 11),
  (30, 'Boys', 12),
  (31, 'Girls', 12),
  (32, 'Dresses', 7),
  (33, 'Tops', 7),
  (34, 'T-Shirts & Vests', 7),
  (35, 'Pants & Leggings', 7),
  (36, 'Sportswear', 7),
  (37, 'Plus Size Clothing', 7),
  (38, 'Socks & Hosiery', 7),
  (39, 'Fragrance', 3),
  (40, 'Skincare', 3),
  (41, 'Hair Care', 3),
  (42, 'Jewellery', 4),
  (43, 'Eyes Care', 3),
  (44, 'Lips', 3),
  (45, 'Face Care', 3),
  (46, 'Gift Sets', 3),
  (47, 'Scarves & Headwear', 4),
  (48, 'Multipacks', 4),
  (49, 'Other Accessories', 4),
  (50, 'Pumps', 6),
  (51, 'Sneakers', 6),
  (52, 'Sports Shoes', 6),
  (53, 'Boots', 6),
  (54, 'Comfort Shoes', 6),
  (55, 'Slippers & Casual Shoes', 6),
  (56, 'Formal Shoes', 2),
  (57, 'Belts', 1),
  (58, 'Multipacks', 1),
  (59, 'Other Accessories', 1),
  (60, 'Bags', 4),
  (61, 'Cell Phone and Accessories', 14),
  (62, 'Headphones', 14),
  (63, 'Security and Surveillance', 14),
  (64, 'Television and Video', 14),
  (65, 'GPS and Navigation', 14),
  (66, 'Home Audio', 14),
  (67, 'Computer Components', 15),
  (68, 'Computers and Tablets', 15),
  (69, 'Laptop Accessories', 15),
  (70, 'Printer and Monitors', 15),
  (71, 'External Components', 15),
  (72, 'Networking Products', 15);

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `photo` VARCHAR (255) NOT NULL,
  `heading` VARCHAR (255) NOT NULL,
  `content1` text NOT NULL,
  `content2` text NOT NULL,
  `button_text` VARCHAR (255) NOT NULL,
  `button_url` VARCHAR (255) NOT NULL
);

INSERT INTO
  `slider` (
    `id`,
    `photo`,
    `heading`,
    `content1`,
    `content2`,
    `button_text`,
    `button_url`
  )
VALUES
  (
    1,
    'slider0.jpg',
    'Shoes Fashion',
    'Come and Get it',
    'Brand New Shoes',
    'Shope Now',
    'product-category.php?id=4&type=mid-category'
  ),
  (
    2,
    'slider1.jpg',
    'Quick Fashion',
    'Fit Your Wardrobe',
    'WITH LUXURY ITEMS',
    'Shope Now',
    '#'
  ),
  (
    3,
    'slider2.jpg',
    'Quick Offer',
    'Wooden Minimal Sofa',
    'Extra 50% off',
    'Shope Now',
    '#'
  ),
  (
    4,
    'slider3.jpg',
    'Best Deals',
    'Home Workout Accessories',
    'push the limit',
    'Shope Now',
    '#'
  );

CREATE TABLE photo (
  id int (11) PRIMARY KEY,
  pvalue VARCHAR (255) NOT NULL
);

CREATE TABLE size (
  id int (11) PRIMARY KEY,
  svalue VARCHAR (255) NOT NULL
);

INSERT INTO
  size (`id`, `svalue`)
VALUES
  (1, 'XS'),
  (2, 'S'),
  (3, 'M'),
  (4, 'L'),
  (5, 'XL'),
  (6, 'XXL'),
  (7, '3XL'),
  (8, '31'),
  (9, '32'),
  (10, '33'),
  (11, '34'),
  (12, '35'),
  (13, '36'),
  (14, '37'),
  (15, '38'),
  (16, '39'),
  (17, '40'),
  (18, '41'),
  (19, '42'),
  (20, '43'),
  (21, '44'),
  (22, '45'),
  (23, '46'),
  (24, '47'),
  (25, '48'),
  (26, 'Free Size'),
  (27, 'One Size for All'),
  (28, '10'),
  (29, '12 Months'),
  (30, '2T'),
  (31, '3T'),
  (32, '4T'),
  (33, '5T'),
  (34, '6 Years'),
  (35, '7 Years'),
  (36, '8 Years'),
  (37, '10 Years'),
  (38, '12 Years'),
  (39, '14 Years'),
  (40, '256 GB'),
  (41, '128 GB'),
  (42, '14 Plus'),
  (43, '16 Plus'),
  (44, '18 Plus'),
  (45, '20 Plus'),
  (46, '22 Plus'),
  (47, '24 Plus');

CREATE TABLE color (
  id int (11) PRIMARY KEY,
  cvalue VARCHAR (255) NOT NULL
);

INSERT INTO
  color (`id`, `cvalue`)
VALUES
  (1, '#676F7F'),
  (2, '#0A7249'),
  (3, '#ADC5D6');

CREATE TABLE products (
  id int (11) PRIMARY KEY,
  name VARCHAR (255) NOT NULL,
  description text NOT NULL,
  summary text NOT NULL,
  cover VARCHAR (255) NOT NULL,
  category_id int (11),
  is_featured int (1),
  is_active int (1),
  is_trending int (1),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  deleted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (category_id) REFERENCES end_category(ec_id)
);

INSERT INTO
  `products` (
    id,
    name,
    description,
    summary,
    cover,
    category_id,
    is_featured,
    is_active,
    is_trending
  )
VALUES
  (
    1,
    'Men\'s Ultra Cotton T-Shirt, Multipack',
    '<p style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Solids: 100% Cotton; Sport Grey And Antique Heather: 90% Cotton, 10% Polyester; Safety Colors And Heather: 50% Cotton, 50% Polyester.</span></p><p style=\"list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span class=\"a-list-item\" style=\"overflow-wrap: break-word; display: block;\">Available in 2 packs and a wide array of colors so you can stock up on your favorite.</span></p>',
    '<p><span style=\"color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px;\">Style 20020-Multipack; Solids: 100% Cotton.</span><br></p>',
    'product-featured-83.jpg',
    20,
    0,
    1,
    0
  );

CREATE TABLE product_color (
  id int (11) PRIMARY KEY,
  color_id int (11),
  p_id int (11),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  deleted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (p_id) REFERENCES products(id),
  FOREIGN KEY (color_id) REFERENCES color(id)
);

INSERT INTO
  `product_color` (id, color_id, p_id)
VALUES
  (1, 1, 1),
  (2, 2, 1),
  (3, 3, 1);

CREATE TABLE product_size (
  id int (11) PRIMARY KEY,
  size_id int (11),
  p_id int (11),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  deleted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (p_id) REFERENCES products (id),
  FOREIGN KEY (size_id) REFERENCES size (id)
);

INSERT INTO
  `product_size` (id, size_id, p_id)
VALUES
  (1, 1, 1),
  (2, 2, 1),
  (3, 3, 1),
  (4, 4, 1),
  (5, 5, 1),
  (6, 6, 1),
  (7, 7, 1);

CREATE TABLE product_photos (
  id int (11) PRIMARY KEY,
  product_id int (11),
  color_id int (11),
  pid int (11),
  FOREIGN KEY (pid) REFERENCES photo(id),
  FOREIGN KEY (product_id) REFERENCES products(id),
  FOREIGN KEY (color_id) REFERENCES product_color(id)
);

CREATE TABLE products_inventory (
  id int (11) PRIMARY KEY,
  product_id int (11),
  sold int (11) DEFAULT 0,
  current_price VARCHAR (255),
  normal_price VARCHAR (255),
  quantity int (11),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  deleted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (product_id) REFERENCES products(id)
);

INSERT INTO
  `products_inventory` (
    id,
    product_id,
    current_price,
    normal_price,
    quantity
  )
VALUES
  (1, 1, 19, 26, 77);

CREATE TABLE review (
  id int(11) PRIMARY KEY,
  u_id int (11) NOT NULL,
  p_id int (11) NOT NULL,
  comment text NOT NULL,
  rating int(11) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  deleted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (u_id) REFERENCES users(id),
  FOREIGN KEY (p_id) REFERENCES products(id)
);

INSERT INTO `review` (`id`, `u_id`, `p_id`, `comment`, `rating`, `created_at`, `deleted_at`) VALUES
(1, 1, 1, 'it is good', 5, '2024-05-12 20:12:55', '2024-05-12 20:12:55');

CREATE TABLE wishlist (
  id int (11) PRIMARY KEY,
  user_id int (11),
  product_id int (11),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  deleted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE cart (
  id int (11) PRIMARY KEY,
  user_id int (11),
  total int (11),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE cart_item (
  id int (11) PRIMARY KEY,
  cart_id int (11),
  product_id int (11),
  products_sku_id int (11),
  quantity int (11),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (cart_id) REFERENCES cart(id),
  FOREIGN KEY (product_id) REFERENCES products(id),
  FOREIGN KEY (products_sku_id) REFERENCES products_inventory(id)
);

CREATE TABLE order_details (
  id int (11) PRIMARY KEY,
  user_id int (11),
  payment_id int (11),
  total int (11),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE order_item (
  id int (11) PRIMARY KEY,
  order_id int (11),
  product_id int (11),
  products_sku_id int (11),
  quantity int (11),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (order_id) REFERENCES order_details(id),
  FOREIGN KEY (product_id) REFERENCES products(id),
  FOREIGN KEY (products_sku_id) REFERENCES products_inventory(id)
);

CREATE TABLE payment_details (
  id int (11) PRIMARY KEY,
  order_id int (11),
  amount int (11),
  provider VARCHAR (255),
  status VARCHAR (255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (order_id) REFERENCES order_details(id)
);