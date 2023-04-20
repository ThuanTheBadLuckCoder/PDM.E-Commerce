<h1 align="center"> E-COMMERCE PLATFORM </h1> 

![LOGO-no-bg (1)](https://user-images.githubusercontent.com/102339067/233404472-1a311317-78ae-479f-ba5a-40fb95676301.png)


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


## Features
The app can be accessible with or without user registration, but in that case some features will be available after registration only (checkout). Anyone is able to perform search, view results, all details about selected product, add product to cart, view and modify product on cart page.

#### Existing Features
- search bar - allows user to search product by keyword. Return all products where search keywords appears
- login/register system - allows user access full app functionality
- logout
- back to top arrow - scrolling to top of page
- flash messages apperars after user login/registration, add/update/delete and purchase product (disappears after 5s)
- user can't access payment page without registration/login
- after adding product to cart small badge with product quantity appears on menubar beside cart icon
- Stripe payment integration
- short product info cards on homepage
- function preventing access restricted page(checkout) without registration/login
#### Features Left to Implement
- add some gallery image on product details page
- create categories (category model has been created and relation to product exist, but there is no views implemented for categories)
- create pagination
- create contact page
- add confirmation email after purchase (currently only flash message appears)
- add filters to search option (currently only search by any keyword is available)
- customers reviews


## Techonologies used 
- GitHub - provides hosting for software development version control using Git.
- Git - version-control system for tracking changes in source code during software development.
- HTML5 - standard markup language for creating Web pages.
- CSS3 - used to define styles for Web pages, including the design, layout and variations in display for different devices and screen sizes.
- VS Code - code editor redefined and optimized for building and debugging modern web and cloud applications.
- Php - Php library.
- ERDPlus - Used to design, simulate diagrams - database

## Testing
#### Automated testing

###### For the testing following tools and services was used:

- Chrome Developer Tools - a set web authoring and debugging tools built into Google Chrome.
- CSS Validation -service helps to check validity of Cascading Style Sheets (CSS).
- Markup Validation - helps check the validity of Web documents.
- JSLint - a static code analysis tool used for checking if JavaScript source code complies with coding rules.
- All validation tests passed: no errors in the DevTools console. CSS and JavaScript have correct syntax as well. The HTML validator did not recognise the Django template tags which resulted in showing errors.

- The website was constantly tested by Travis CI each time it was pushed to git. All test are passed as is indicated on the top of this README.MD file page by green Travis CI icon.

#### Manual testing
###### Manual testing was performed by clicking every element on page which can be clicked.

1. Search form

- Available all the time on menubar
- Try to submit empty form and verify that an error message about required fields appear - form doesn't have required attribute. After submiting returning page with all available products.
- Try to submit the form with valid input and verify that a success message appears (after entering keyword user is redirected to results page and the product matches searching criteria are displayed)

2. Login form page

- Go to Products(homepage) page
- Click Log in link on navigation bar (user is redirected to login page)
- Try to submit empty form and verify that an error message about required fields appear(required field message appears)
- Try to submit the form with valid input and verify that a success message appears (user is redirected to homepage with successful login message)
- Try to submit the form with invalid input and verify that a error message appears (Your username or password is incorrect message appears)

3. Registration form page

- Go to Product(homepage) page
- Click Log in link on navigation bar (user is redirected to registration page)
- Click Create account button below the login form
- Try to submit empty form and verify that an error message about required fields appear (required field message appears)
- Try to submit the form with valid input and verify that a success message appears (user is redirected to homepage with success message)
- Try to submit the form with invalid input and verify that a error message appears (Unable to register your account message appears)
- Click Sign In under Create account button (user is redirected to login page with success message)

4. Add to cart form

- Go to Product details page
- Try to submit empty form and verify that an error message about required fields appear (required message appears)
- Try to submit the form with valid input and verify that a success message appears (Item added to your cart. View cart message appears)
- Try to submit the form with invalid input and verify that a error message appears.(field has html5 type number attribute and initial default value 1 preventing entering invalid input)

5. Cart form

- Go to the Cart page
- Try to submit empty form and verify that an error message about required fields appear (required message appears)
- Try to submit the form with valid input and verify that a success message appears (Cart updated message appears)
- Try to submit the form with invalid input and verify that a error message appears (field has html5 type number attribute preventing entering invalid input and also has initial value number of the specific item, which was selected on add to cart page)
- Click Trash icon - item is deleted from cart (message appears)
- Click Shoppig button (user is redirected to products page (homepage))
- Click Checkout button (user is redirected to checkout page)

6. Payment user details/ credit card form

- Go to Checkout page
- Try to submit empty form and verify that an error message about required fields appear (required message appears)
- Try to submit the form with valid input and verify that a success message appears (user is redirected to homepage and message appears)
- Try to submit the form with invalid input and verify that a error message appears (use different card number cause error message appears)
- All fields in user details form have required attribute. Credit card forms has required attr set to false as there is some issue and payment cannot be successfully proceed.

7. Site navigation

- Click on Home link (redirect to index/homepage)
- Click on logo/brand link (redirect to index/homepage)
- Click on Log in link (redirect to login page form)
- Click on Register link (redirect to registration page form)
- Click on Cart link (redirect to cart page)
- Click on Logout link (user is logged out)
- Click on Back to top arrow icon (page is scrolling up)
- All links are working and pointing to correct place.There are no dead links.

8. Services(homepage)

- Click on selected product card (user is redirected to chosen product on product details page)

## Deployment
The project was developed, committed to git and pushed to GitHub using Visual Studio Code IDE.

The project was deployed using Heroku as a hosting platform. Static files and media files are stored using AWS S3 storage service.

#### Acknowledgements
I received inspiration for this project through internet research. I visited websites such as Currys, Harvey Norman, D.I.D and watched youtube tutorials, which helped me to put all the pieces together.
Many thanks to my mentor Victor Miclovich for all suggestions and possible solutions to various issues encountered during project development process.
