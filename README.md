<h1> E-COMMERCE PLATFORM </h1>

## 🚀 About the Project

With the E-commerce platform we will build, consumers can register and log in as a member of the brand. The basic e-commerce platform should have clear display and concise product descriptions and intuitive search and filtering options. In addition, customer support is really important, the platform should provide multiple channels of customer support, including email, phone, and chat, to help customers with their orders or address any issues they may encounter. The platform should allow customers to leave reviews and ratings of products to help other customers make informed purchasing decisions.


## 🧐 Features

- Registration and Login
- Add items or services into cart
- Check out the the products

## UX
The purpose of the the project is to create a e-commerce app for everyone interested in shopping online. Layout is simple and clear. Project is accesible through all modern browsers on both desktop and mobile devices. For build the front-end functionality CSS, HTML is used and for back-end logic.

#### User Stories
- As a user I want easily search for product - it is achieved by using search bar available on menubar
- As a user I want to find more details about product - after click on selected product user is redirected to page with all details about chosen product
- As a user I want to add product to cart - user is able to add product to cart and select quantity if required (1 is default value)
- As a user I want to update / delete items from cart - user is able to update and delete items on cart page
- As a user I want to pay for chosen product - after registration/login user is able to access checkout page
- As a business owner I want to expand my business and increase sales -- it is achieved by building online presence
#### Layout
The layout is simple and consistent through all modern browsers. The project has been designed with a mobile first approach and it is fully responsive across devices. To achieve this Bootstrap 4 components library was used along with custom styles. Project consist following pages:

- Products(homepage)
page where are displayed all products in form of card with image and short info about specs and price of each product
- Product Details
Page include all details about selected product - image, description, main components summary, price and add to cart button with input field allowing select product quantity
- Cart page / empty cart
Page allows to review what is in cart - Image thumbnail is displayed along with product name and possibility for user to change quantity or delete item completely. Page include total price for all product placed in cart. Below that there are two buttons, one placed on right hand side and second on the left hand side of the screen allowing user to continue shopping or go to checkout. When we remove all items cart icon is displayed with short info that cart is empty and user can go back shopping by clicking Continue Shopping button
- Search page / no search results
Page displays searching results in form similar to homepage. There is a card with image and short info about specs and price of each product. When keyword enter into searchbox isn't match any product, search icon is displayed along with text informing user that product is not found.
- Checkout page (available after user login)
Page similar to cart page but the difference is that user can't update any product details. This is summary before payment. Page displays product thumbnail, name, quantity, price and total price. Below that user has payment form to fill in with user details and card details. After payment user is redirected to homepage.
- Login
Page allows user to login (user get access to checkout page and payment functionality)
- Registration
Page allows user to create an account (user get access to login functionality)
#### Wireframes
- Mobile Layout
- Desktop Layaut


# Features
The app can be accessible with or without user registration, but in that case some features will be available after registration only (checkout). Anyone is able to perform search, view results, all details about selected product, add product to cart, view and modify product on cart page.

Existing Features
search bar - allows user to search product by keyword. Return all products where search keywords appears
login/register system - allows user access full app functionality
logout
back to top arrow - scrolling to top of page
flash messages apperars after user login/registration, add/update/delete and purchase product (disappears after 5s)
user can't access payment page without registration/login
after adding product to cart small badge with product quantity appears on menubar beside cart icon
Stripe payment integration
short product info cards on homepage
function preventing access restricted page(checkout) without registration/login
Features Left to Implement
add some gallery image on product details page
create categories (category model has been created and relation to product exist, but there is no views implemented for categories)
create pagination
create contact page
add confirmation email after purchase (currently only flash message appears)
add filters to search option (currently only search by any keyword is available)
customers reviews
