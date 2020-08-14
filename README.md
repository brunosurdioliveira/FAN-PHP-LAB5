# FAN-PHP-LAB5
Lab 5 of PHP Fundamentals

Purpose
This lab will introduce you to string functions and array structure and functions, as well as reinforce HTML form submission and handling output. You will create a survey with 3 questions, collecting 3 responses as text. 

Evaluation
6% of your final grade ( 24 marks )

Submission Due date
When complete, submit the 2 PHP files to the Submission box labelled Week 8 before July 5

Required Tools
Google Chrome web browser
Text editor with Syntax highlighting. https://atom.io/ or https://www.sublimetext.com/ or Visual Studio Code or other
Xampp 7.4.1
Bootstrap Starter Template - found here https://getbootstrap.com/docs/4.4/getting-started/introduction/
for layout control use the Grid System - https://getbootstrap.com/docs/4.4/layout/grid/
Instructions
You will be doing all your code in HTML/CSS and PHP, testing in the web browser. Don't forget, the code needs to be run through the Web server

Create 2 files. One will be the HTML submission form. The other will be the PHP processing and output
title the 2 files with your full name in the file name i.e: lab7_ryan_price_html.php and lab7_ryan_price_output.php
In the lab7_fname_lname_html.php file
Copy and paste the Bootstrap Starter Template ( 1 mark )
In the Body tags
Create an HTML form you can submit that will post to your output.php file ( 2 marks )
In the form add 3 unique text fields, these can be anything you like. Ask 3 questions ( 3 marks )
In the lab7_fname_lname_output.php file process the incoming data with array and string functions and format for display
var_dump the incoming post array variables ( 1 mark)
Loop over the POST array and foreach value ( 2 marks )
Sanitize your incoming data with htmlentities() and assign the existing key and value to a new clean array ( 3 marks )
Select Any 3 string functions from https://www.php.net/ref.strings and display the Before and After output when the function is applied(6 marks)
Select any 3 array functions from https://www.php.net/manual/en/ref.array.php .(6 marks)
You can use a loop to show the change of the array structure values OR var_dump() or print_r()
NOTE: most of the array functions return a New array with the modified data