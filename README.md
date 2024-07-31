# Royal Shop
## Table Of Content
- [Royal Shop](#emmarket)
  - [Table Of Content](#table-of-content)
  - [Overview](#overview)
  - [Features](#features)
  - [Installation](#installation)
    - [Run](#run)
    - [Backend \& API](#backend--api)
  - [Usage](#usage)
    - [POS Page (home page)](#pos-page-home-page)
    - [Products Filteration and Searching](#products-filteration-and-searching)
    - [Change the display way](#change-the-display-way)
      - [Display as Cards](#display-as-cards)
      - [Display as List](#display-as-list)
    - [Carts \& Filterations \& Sorting](#carts--filterations--sorting)
    - [Single Cart Manpluation](#single-cart-manpluation)
    - [Category Page](#category-page)
    - [Unit of Measure Page](#unit-of-measure-page)
    - [Product Page](#product-page)
    - [Dashboard Page](#dashboard-page)
  - [Configuration](#configuration)
  - [APIs and SDKs](#apis-and-sdks)
  - [License](#license)

## Overview 
The web application is specifically designed for supermarkets to effectively manage their products and customer carts. It offers a range of features tailored to streamline supermarket operations. Key functionalities of the application include:

1. Product Management: The application allows supermarkets to easily manage their product .inventory, including adding new products, updating product details, and removing products when necessary.

2. Cart Management: Supermarkets can handle multiple customer carts concurrently, enabling efficient management of checkout processes for multiple customers at the same time.

3. Total Amount Calculation: The application provides the ability to calculate the total amount for each customer's cart, considering factors such as product prices, quantities, and any applicable discounts or taxes.

4. Cart Descriptions: Supermarkets can add descriptions to each cart, allowing cashiers or customers to provide additional details or notes for better organization and reference.

By utilizing this web application, supermarkets can streamline their product and cart management processes, enhance customer service, and ensure accurate calculation of order totals for a seamless shopping experience.

## Features
> Product Management
>
> Multi-Cart Management
> 
> Search & Filteration system
> 
> Category Manpluation page
> 
> Unit of measure Management
> 
> Dashbaord for Users
> 
> Authentication System
> 
> User Authorization 
>
> Switch Between Themes 

## Installation

The application is developed using the Node environment with React.js. To install the project, you have two options: cloning the repository or downloading it as a ZIP file.

Cloning the repository:

Open your terminal or command prompt.
Run the following command:
```bash
git clone [repository_url]
```
1. Navigate to the project directory:
```bash
cd [project_directory]
```
2. Install the project dependencies by running:
```bash
npm install
``` 

Downloading as a ZIP file:

1. Download the ZIP file from the repository.
2. Extract the contents of the ZIP file to a desired location on your computer.
3. Open your terminal or command prompt.
4. Navigate to the extracted project directory:
cd [project_directory]
```bash
cd [project_directory]
```
2. Install the project dependencies by running:
```bash
npm install
``` 
After completing the installation process, you can proceed with running and using the application

### Run

```bash
npm start
``` 
### Backend & API 
The system is tightly integrated with a backend that I have built. Without the backend, the system will not function properly, and its features will not be accessible. To install and set up the backend, please follow these steps:

1. Access the POS-BACKEND repository through this link: [POS-BACKEND](https://github.com/AhmadEleiwa/POS-Backend).
2. Clone the repository or download it as a ZIP file.
3. Open your terminal or command prompt.
4. Navigate to the backend directory.
5. Install the necessary dependencies by running the command:
```bash
npm install
```
1. Configure the backend by setting up the required environment variables, database connections, and any other necessary configurations.
2. Run the backend server using the command:
```bash
npm start
```
The backend will now be up and running, providing the APIs required for the system's functionality.

> **NOTE:** The system database is MongoDB and the uri of the database connection is hidden in .env file. To Setup mongodb configuration correctly you have add .env file with line below
>
> MONGOPATH = "mongodb+srv://(username):ixrwZDUrxf6qcTei@cluster0.tubw4as.mongodb.net/(collection name)?retryWrites=true&w=majority"

## Screenshots
Added Screenshots for your reference before installation :)

<img src='assets/RS1.png' />
<img src='assets/RS2.png' />
<img src='assets/RS3.png' />
<img src='assets/RS4.png' />
<img src='assets/RS5.png' />
<img src='assets/RS6.png' />
<img src='assets/RS7.png' />
<img src='assets/RS8.png' />
<img src='assets/RS9.png' />
<img src='assets/RS10.png' />

By incorporating these React libraries, I have enhanced the functionality, state management, UI design, data fetching, data validation, navigation, and visual aspects of the project. These libraries contribute to an improved overall user experience and efficient development process.
## License

POS System project is licensed under the [MIT License](LICENSE).
