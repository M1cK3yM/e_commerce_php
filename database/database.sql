CREATE TABLE users (
  id int PRIMARY KEY AUTO_INCREMENT,
  avatar VARCHAR (255),
  first_name VARCHAR (255) NOT NULL,
  last_name VARCHAR (255) NOT NULL,
  username VARCHAR (255) NOT NULL UNIQUE,
  email VARCHAR (255) NOT NULL UNIQUE,
  password VARCHAR (255) NOT NULL,
  token VARCHAR (255) NOT NULL,
  status INT NOT NULL,
  birth_of_date DATE NOT NULL,
  phone_number VARCHAR (255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO
  `users` (
    `id`,
    `avatar`,
    `first_name`,
    `last_name`,
    `username`,
    `email`,
    `password`,
    `birth_of_date`,
    `phone_number`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    'avatar',
    'michael',
    'michael',
    'mickey',
    'michaelyirdaw652@gmail.com',
    'michael',
    '2002-04-11',
    '+251993594499',
    '2024-05-12 20:12:21',
    '2024-05-12 20:12:21'
  );

CREATE TABLE country (
  country_id int PRIMARY KEY,
  country_name VARCHAR (255)
);

INSERT INTO
  `country` (`country_id`, `country_name`)
VALUES
  (1, 'Afghanistan'),
  (2, 'Albania'),
  (3, 'Algeria'),
  (4, 'American Samoa'),
  (5, 'Andorra'),
  (6, 'Angola'),
  (7, 'Anguilla'),
  (8, 'Antarctica'),
  (9, 'Antigua and Barbuda'),
  (10, 'Argentina'),
  (11, 'Armenia'),
  (12, 'Aruba'),
  (13, 'Australia'),
  (14, 'Austria'),
  (15, 'Azerbaijan'),
  (16, 'Bahamas'),
  (17, 'Bahrain'),
  (18, 'Bangladesh'),
  (19, 'Barbados'),
  (20, 'Belarus'),
  (21, 'Belgium'),
  (22, 'Belize'),
  (23, 'Benin'),
  (24, 'Bermuda'),
  (25, 'Bhutan'),
  (26, 'Bolivia'),
  (27, 'Bosnia and Herzegovina'),
  (28, 'Botswana'),
  (29, 'Bouvet Island'),
  (30, 'Brazil'),
  (31, 'British Indian Ocean Territory'),
  (32, 'Brunei Darussalam'),
  (33, 'Bulgaria'),
  (34, 'Burkina Faso'),
  (35, 'Burundi'),
  (36, 'Cambodia'),
  (37, 'Cameroon'),
  (38, 'Canada'),
  (39, 'Cape Verde'),
  (40, 'Cayman Islands'),
  (41, 'Central African Republic'),
  (42, 'Chad'),
  (43, 'Chile'),
  (44, 'China'),
  (45, 'Christmas Island'),
  (46, 'Cocos (Keeling) Islands'),
  (47, 'Colombia'),
  (48, 'Comoros'),
  (49, 'Congo'),
  (50, 'Cook Islands'),
  (51, 'Costa Rica'),
  (52, 'Croatia (Hrvatska)'),
  (53, 'Cuba'),
  (54, 'Cyprus'),
  (55, 'Czech Republic'),
  (56, 'Denmark'),
  (57, 'Djibouti'),
  (58, 'Dominica'),
  (59, 'Dominican Republic'),
  (60, 'East Timor'),
  (61, 'Ecuador'),
  (62, 'Egypt'),
  (63, 'El Salvador'),
  (64, 'Equatorial Guinea'),
  (65, 'Eritrea'),
  (66, 'Estonia'),
  (67, 'Ethiopia'),
  (68, 'Falkland Islands (Malvinas)'),
  (69, 'Faroe Islands'),
  (70, 'Fiji'),
  (71, 'Finland'),
  (72, 'France'),
  (73, 'France, Metropolitan'),
  (74, 'French Guiana'),
  (75, 'French Polynesia'),
  (76, 'French Southern Territories'),
  (77, 'Gabon'),
  (78, 'Gambia'),
  (79, 'Georgia'),
  (80, 'Germany'),
  (81, 'Ghana'),
  (82, 'Gibraltar'),
  (83, 'Guernsey'),
  (84, 'Greece'),
  (85, 'Greenland'),
  (86, 'Grenada'),
  (87, 'Guadeloupe'),
  (88, 'Guam'),
  (89, 'Guatemala'),
  (90, 'Guinea'),
  (91, 'Guinea-Bissau'),
  (92, 'Guyana'),
  (93, 'Haiti'),
  (94, 'Heard and Mc Donald Islands'),
  (95, 'Honduras'),
  (96, 'Hong Kong'),
  (97, 'Hungary'),
  (98, 'Iceland'),
  (99, 'India'),
  (100, 'Isle of Man'),
  (101, 'Indonesia'),
  (102, 'Iran (Islamic Republic of)'),
  (103, 'Iraq'),
  (104, 'Ireland'),
  (105, 'Israel'),
  (106, 'Italy'),
  (107, 'Ivory Coast'),
  (108, 'Jersey'),
  (109, 'Jamaica'),
  (110, 'Japan'),
  (111, 'Jordan'),
  (112, 'Kazakhstan'),
  (113, 'Kenya'),
  (114, 'Kiribati'),
  (115, 'Korea, Democratic People\'s Republic of'),
  (116, 'Korea, Republic of'),
  (117, 'Kosovo'),
  (118, 'Kuwait'),
  (119, 'Kyrgyzstan'),
  (120, 'Lao People\'s Democratic Republic'),
  (121, 'Latvia'),
  (122, 'Lebanon'),
  (123, 'Lesotho'),
  (124, 'Liberia'),
  (125, 'Libyan Arab Jamahiriya'),
  (126, 'Liechtenstein'),
  (127, 'Lithuania'),
  (128, 'Luxembourg'),
  (129, 'Macau'),
  (130, 'Macedonia'),
  (131, 'Madagascar'),
  (132, 'Malawi'),
  (133, 'Malaysia'),
  (134, 'Maldives'),
  (135, 'Mali'),
  (136, 'Malta'),
  (137, 'Marshall Islands'),
  (138, 'Martinique'),
  (139, 'Mauritania'),
  (140, 'Mauritius'),
  (141, 'Mayotte'),
  (142, 'Mexico'),
  (143, 'Micronesia, Federated States of'),
  (144, 'Moldova, Republic of'),
  (145, 'Monaco'),
  (146, 'Mongolia'),
  (147, 'Montenegro'),
  (148, 'Montserrat'),
  (149, 'Morocco'),
  (150, 'Mozambique'),
  (151, 'Myanmar'),
  (152, 'Namibia'),
  (153, 'Nauru'),
  (154, 'Nepal'),
  (155, 'Netherlands'),
  (156, 'Netherlands Antilles'),
  (157, 'New Caledonia'),
  (158, 'New Zealand'),
  (159, 'Nicaragua'),
  (160, 'Niger'),
  (161, 'Nigeria'),
  (162, 'Niue'),
  (163, 'Norfolk Island'),
  (164, 'Northern Mariana Islands'),
  (165, 'Norway'),
  (166, 'Oman'),
  (167, 'Pakistan'),
  (168, 'Palau'),
  (169, 'Palestine'),
  (170, 'Panama'),
  (171, 'Papua New Guinea'),
  (172, 'Paraguay'),
  (173, 'Peru'),
  (174, 'Philippines'),
  (175, 'Pitcairn'),
  (176, 'Poland'),
  (177, 'Portugal'),
  (178, 'Puerto Rico'),
  (179, 'Qatar'),
  (180, 'Reunion'),
  (181, 'Romania'),
  (182, 'Russian Federation'),
  (183, 'Rwanda'),
  (184, 'Saint Kitts and Nevis'),
  (185, 'Saint Lucia'),
  (186, 'Saint Vincent and the Grenadines'),
  (187, 'Samoa'),
  (188, 'San Marino'),
  (189, 'Sao Tome and Principe'),
  (190, 'Saudi Arabia'),
  (191, 'Senegal'),
  (192, 'Serbia'),
  (193, 'Seychelles'),
  (194, 'Sierra Leone'),
  (195, 'Singapore'),
  (196, 'Slovakia'),
  (197, 'Slovenia'),
  (198, 'Solomon Islands'),
  (199, 'Somalia'),
  (200, 'South Africa'),
  (201, 'South Georgia South Sandwich Islands'),
  (202, 'Spain'),
  (203, 'Sri Lanka'),
  (204, 'St. Helena'),
  (205, 'St. Pierre and Miquelon'),
  (206, 'Sudan'),
  (207, 'Suriname'),
  (208, 'Svalbard and Jan Mayen Islands'),
  (209, 'Swaziland'),
  (210, 'Sweden'),
  (211, 'Switzerland'),
  (212, 'Syrian Arab Republic'),
  (213, 'Taiwan'),
  (214, 'Tajikistan'),
  (215, 'Tanzania, United Republic of'),
  (216, 'Thailand'),
  (217, 'Togo'),
  (218, 'Tokelau'),
  (219, 'Tonga'),
  (220, 'Trinidad and Tobago'),
  (221, 'Tunisia'),
  (222, 'Turkey'),
  (223, 'Turkmenistan'),
  (224, 'Turks and Caicos Islands'),
  (225, 'Tuvalu'),
  (226, 'Uganda'),
  (227, 'Ukraine'),
  (228, 'United Arab Emirates'),
  (229, 'United Kingdom'),
  (230, 'United States'),
  (231, 'United States minor outlying islands'),
  (232, 'Uruguay'),
  (233, 'Uzbekistan'),
  (234, 'Vanuatu'),
  (235, 'Vatican City State'),
  (236, 'Venezuela'),
  (237, 'Vietnam'),
  (238, 'Virgin Islands (British)'),
  (239, 'Virgin Islands (U.S.)'),
  (240, 'Wallis and Futuna Islands'),
  (241, 'Western Sahara'),
  (242, 'Yemen'),
  (243, 'Zaire'),
  (244, 'Zambia'),
  (245, 'Zimbabwe');

  CREATE TABLE `shipping_cost` (
  `id` int NOT NULL,
  `country_id` int NOT NULL,
  `amount` varchar(20) NOT NULL,
  FOREIGN KEY (country_id) REFERENCES country(country_id)
);

INSERT INTO `shipping_cost` (`id`, `country_id`, `amount`) VALUES
(1, 228, '11'),
(2, 167, '10'),
(3, 13, '8'),
(4, 230, '0');

CREATE TABLE addresses (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `country_id` int NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (country_id) REFERENCES country(country_id)
);

CREATE TABLE `main_category` (
  `mc_id` int NOT NULL,
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
  `sc_id` int NOT NULL,
  `sc_name` VARCHAR (255) NOT NULL,
  `mc_id` int NOT NULL,
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
  `ec_id` int NOT NULL,
  `ec_name` VARCHAR (255) NOT NULL,
  `sc_id` int NOT NULL,
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
  `id` int NOT NULL,
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
  id int PRIMARY KEY,
  pvalue VARCHAR (255) NOT NULL
);

CREATE TABLE size (
  id int PRIMARY KEY,
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
  id int PRIMARY KEY,
  cvalue VARCHAR (255) NOT NULL
);

INSERT INTO
  color (`id`, `cvalue`)
VALUES
  (1, '#676F7F'),
  (2, '#0A7249'),
  (3, '#ADC5D6');

CREATE TABLE products (
  id int PRIMARY KEY,
  name VARCHAR (255) NOT NULL,
  description text NOT NULL,
  summary text NOT NULL,
  cover VARCHAR (255) NOT NULL,
  category_id int,
  is_featured int (1),
  is_active int (1),
  is_trending int (1),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (category_id) REFERENCES end_category(ec_id)
);

INSERT INTO
  `products` (
    `id`,
    `name`,
    `description`,
    `summary`,
    `cover`,
    `category_id`,
    `is_featured`,
    `is_active`,
    `is_trending`,
    `created_at`,
    `updated_at`
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
    1,
    '2024-05-28 11:37:23',
    '2024-05-28 11:37:23'
  ),
  (
    2,
    'Loose-fit One-Shoulder Cutout Rib Knit Maxi Dress',
    'source for must-have style inspiration from global influencers. Shop limited-edition collections and discover chic wardrobe essentials. Look out for trend inspiration, exclusive brand collaborations, and expert styling tips from those in the know.',
    '86% Tencel, 14% Elastane',
    'product-featured-84.jpg',
    32,
    1,
    1,
    1,
    '2024-05-28 20:17:56',
    '2024-05-28 20:17:56'
  );

CREATE TABLE product_color (
  id int PRIMARY KEY,
  color_id int,
  p_id int,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
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
  id int PRIMARY KEY,
  size_id int,
  p_id int,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
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
  id int PRIMARY KEY,
  product_id int,
  color_id int,
  pid int,
  FOREIGN KEY (pid) REFERENCES photo(id),
  FOREIGN KEY (product_id) REFERENCES products(id),
  FOREIGN KEY (color_id) REFERENCES product_color(id)
);

CREATE TABLE products_inventory (
  id int PRIMARY KEY,
  product_id int NOT NULL,
  color_id int NOT NULL,
  size_id int NOT NULL,
  sold int DEFAULT 0,
  current_price VARCHAR (255),
  normal_price VARCHAR (255),
  quantity int,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (product_id) REFERENCES products(id),
  FOREIGN KEY (color_id) REFERENCES product_color(id),
  FOREIGN KEY (size_id) REFERENCES product_size(id)
);

INSERT INTO
  `products_inventory` (
    `id`,
    `product_id`,
    `color_id`,
    `size_id`,
    `sold`,
    `current_price`,
    `normal_price`,
    `quantity`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    1,
    1,
    1,
    0,
    '19',
    '26',
    15,
    '2024-05-28 11:37:23',
    '2024-05-28 11:37:23'
  ),
  (
    2,
    2,
    1,
    1,
    0,
    '30',
    '51',
    26,
    '2024-05-28 21:18:50',
    '2024-05-28 21:18:50'
  );

CREATE TABLE review (
  id int PRIMARY KEY,
  u_id int NOT NULL,
  p_id int NOT NULL,
  comment text NOT NULL,
  rating int NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (u_id) REFERENCES users(id),
  FOREIGN KEY (p_id) REFERENCES products(id)
);

INSERT INTO
  `review` (
    `id`,
    `u_id`,
    `p_id`,
    `comment`,
    `rating`,
    `created_at`,
    `updated_at`
  )
VALUES
  (
    1,
    1,
    1,
    'it is good',
    5,
    '2024-05-12 20:12:55',
    '2024-05-12 20:12:55'
  );

CREATE TABLE wishlist (
  id int PRIMARY KEY,
  user_id int,
  product_id int,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE TABLE cart (
  id int PRIMARY KEY,
  user_id int,
  total int,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE cart_item (
  id int PRIMARY KEY,
  cart_id int NOT NULL,
  product_id int NOT NULL,
  color_id int NOT NULL,
  size_id int NOT NULL,
  quantity int,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (product_id) REFERENCES products(id),
  FOREIGN KEY (color_id) REFERENCES product_color(id),
  FOREIGN KEY (size_id) REFERENCES product_size(id),
  FOREIGN KEY (cart_id) REFERENCES cart(id)
);

CREATE TABLE order_details (
  id int PRIMARY KEY,
  user_id int,
  payment_id int,
  total int,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE order_item (
  id int PRIMARY KEY,
  order_id int,
  product_id int,
  products_sku_id int,
  quantity int,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (order_id) REFERENCES order_details(id),
  FOREIGN KEY (product_id) REFERENCES products(id),
  FOREIGN KEY (products_sku_id) REFERENCES products_inventory(id)
);

CREATE TABLE payment_details (
  id int PRIMARY KEY,
  order_id int,
  amount int,
  provider VARCHAR (255),
  status VARCHAR (255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (order_id) REFERENCES order_details(id)
);