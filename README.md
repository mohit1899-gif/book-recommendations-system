# Book Recommendation System

Welcome to the Book Recommendation System! This project is designed to provide personalized book recommendations using collaborative filtering. It features a Flask-based frontend, PHP for database management, and a machine learning model for generating recommendations. Users can log in, log out, and rate books.

## Technology Stack

- **Backend**: Python, Flask, Machine Learning
- **Frontend**: Tailwind CSS, HTML, JavaScript
- **Database**: PHP, MySQL

## Features

- Collaborative filtering for book recommendations
- User authentication (login/logout)
- Book rating system

## Installation and Setup

Follow these steps to set up the project on your local machine:

### 1. Clone the Repository

      ```bash
      git clone <repository-url>
      cd book-recommendation-system

2. Install Flask and Python Dependencies
Ensure you have Python installed. Then, install Flask and other dependencies:
      ```bash
      pip install flask

3. Set Up XAMPP
Download and install XAMPP.
Open XAMPP Control Panel and start Apache and MySQL.
4. Configure Database
Open phpMyAdmin in your browser (usually at http://localhost/phpmyadmin).
Create a new database.
Import the provided SQL file from the repository to set up the database schema and initial data.

5. Run the Flask Application
Navigate to the project folder and start the Flask server:
    ```bash
    python app.py
6. Start XAMPP Services
Ensure Apache and MySQL services are running.
If MySQL terminates unexpectedly, follow these steps:
Open Services (search for it in Windows).
Find MySQL 80, stop it.
Return to XAMPP and restart MySQL.
7. Access the Application
Open your web browser and navigate to:
http://localhost/book_recommendation/templates/home.php

Troubleshooting
If you encounter issues, check the following:

Ensure all paths in the code are correct.
Verify that all required services (Apache, MySQL) are running properly.
Contributing
Feel free to submit issues or pull requests if you have suggestions or improvements!
