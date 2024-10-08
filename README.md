# Vulnerable IDOR Lab

This lab demonstrates an *Insecure Direct Object Reference (IDOR)* vulnerability using a simple PHP-based web application. The objective is to understand how manipulating different parameters can give unauthorized access to view or edit other users' profiles.

**Steps to Set Up the Lab**

**1. Clone the repository**

git clone https://github.com/talhatariqsec/PHP-IDOR-lab).git


**2. Start a Local PHP Server**

Run the following command from the directory where your files are located

php -S localhost:8000


**3. Access the application in your browser**

Open a browser and navigate to http://localhost:8000/index.php

-----------

You will be logged in as Bob (user_id=2) by default, and you will see a list of users with links to view or edit their profiles.
