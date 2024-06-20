<h1 align="center">PlatonicClub</h1>

<h2 align="center">Online Jewellery Store Website</h2>

<h3 align="center"> Made using PHP, JavaScript, HTML & CSS</h3>

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

Platonic Club is a e-commerce web store that sells handmade jewellery to customers. It is a full-stack E-commerce website, with a fully functional admin dashboard, all made using PHP, HTML, CSS and JavaScript!


## Main Website Features

- Homepage:

![homepage](screenshot_images/homepage.png)

- About Us:
  
![about us](screenshot_images/about-us.png)

- Shopping Cart:
  
![shopping cart](screenshot_images/shopping-cart1.png)

![shopping cart](screenshot_images/shopping-cart2.png)

- Checkout Order: 

![checkout order](screenshot_images/checkout-order.png)

- Custom Order:
  
![custom order](screenshot_images/custom-order.png)

- Your Placed Orders:
  
![placed orders](screenshot_images/website-placed-orders.png)

- Search Bar:

![search bar](screenshot_images/search-bar.png)

- Search Products:

![search products](screenshot_images/search-products1.png)

![search products](screenshot_images/search-products2.png)

- Product Details:

![product details](screenshot_images/product-details.png)

- Wishlist:
  
![wishlist](screenshot_images/wishlist.png)


- All Products Filtered (by product type)

![all products filter](screenshot_images/all-products-filter.png)


## Admin Panel Features

- Dashboard:

![dashboard](screenshot_images/admin-panel-dashboard.png)

- Custom Order Messages:

![custom order messages](screenshot_images/messages.png)

- Placed Orders:

![placed orders](screenshot_images/admin-panel-placed-orders.png)

- Add New Products to Inventory:
  
![add new product to inventory](screenshot_images/add-new-product-inventory.png)

- User Accounts: 
  
![user accounts](screenshot_images/user-accounts.png)  

## Login and Register

Login/ Register via Email: Default form for user authentication.

![login and register](screenshot_images/login.png)

![login and register](screenshot_images/register.png)

## Header

The header includes the logo, page name, usage statistics, subscription button, and logout button. In the mobile version, the page name is hidden, and statistics disappear on scroll.

![header](screenshot_images/header.png)  

## Additional Information


## Technology

The project is built using the following technologies:

- Frontend: HTML, CSS, JavaScript
- Backend: PHP, MySQL database

## MySQL Database Structure

### Name 
#### shop_db

### Tables

#### 1. users 
Attributes -------> id*, name, email, password, user_type

#### 2. products
Attributes -------> id*, name, price, color, category, details, image

#### 3. cart
Attributes -------> id*, customer_id, pid, name, price, color, category, quantity, image

#### 4. wishlist
Attributes -------> id*, customer_id, pid, name, price, color, category, image

#### 5. orders
Attributes -------> id*, customer_id, name, number, email, method, address, total_products, total_price, placed_on_date, payment_status

#### 6. messages
Attributes -------> id*, customer_id, name, email, number, message, image

*KEY: * = primary key*

## License

PlatonicClub is licensed under the [MIT License](LICENSE).

## Contact



For questions or suggestions, please reach out to me at [aminawasif20@gmail.com](mailto:aminawasif20@gmail.com).

---
