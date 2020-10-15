# HAVI_VISHNU
The interview question solution 


### The solution begins her
## I have designed a PHP+Mysql application and Django(Python framework) Application

The main reason for this repositary is to give a solution for the task given to me asking to do the admin panel observation based login & registration web page  

# PHP+Mysql
Now firsly I have used the materalised and readymade (CSS & JS Frameworks)
the main content is from PHP as I dont know how to deploy the (PHP+MYSQL) I will start with the process of set up

![ADMIN PROFILE](https://github.com/Vish2476/HAVI_VISHNU/blob/main/images/admin_profile.png?raw=true)

so by the time i start please do go to the link and can check all the images for response https://github.com/Vish2476/HAVI_VISHNU/blob/main/images/

<br>

initially we do start by creating the database in PHPMYADMIN by adding the file inside <a href="https://github.com/Vish2476/HAVI_VISHNU/blob/main/database/">Database</a> folder 
</hr>
next we do start the XAMPP or related PHP server and run the <a href="https://github.com/Vish2476/HAVI_VISHNU/blob/main/index.php">Index.php</a>
as the /registartion and /login can be done if the database is set properly now we can use a small TODO application under the user after logging in . 
![TODO](https://github.com/Vish2476/HAVI_VISHNU/blob/main/images/todo_user.png) 
for the admin functions we will go to <a href="https://github.com/Vish2476/HAVI_VISHNU/blob/main/admin/">/admin</a>
<br>
now we add the admin credentials for this program is <br>.

- 👯 username : admin
- 👯 password : password

after logging in to admin you check all the user details(status) and manage them too.

- Backend code :- PHP,JS,Mysql(PHPMYADMIN)
- Frontend code :- HTML,CSS,JS,Materialized CSS,json

In simple words download the ZIP file from git repo then add to the htdocs(Suitable folder) and add the file inside database folder to your PHPMYADMIN(Suitable MYSql) and RUN then you will have the application ready.

# Django(Python)
But i have tried the implementation in the Django(Python Framework) to make use of the built in functionalities of Django
<a href="http://vishnu0766.pythonanywhere.com/admin/">ADMIN -Django</a>
- username :- Vishnu
- password :- mevishnu2476

<a href="http://vishnu0766.pythonanywhere.com/">DIsplay of Admin entered values</a>

I initaially should have started with the Django but thought of doing in the PHP and I have done half the requirements so the intial setup is 

- python :- py --version
- Django :- pip install Django
we now check the versions 
- python --version
- django --version

now we do request the Django admin to start a project
- django-admin startproject ["project name"]
now we start a app inside the project 
- django-admin startapp ["app_name"]

we now migrate the contents 
- python manage.py migrate 
now we get a list of migrated and then we type 
- python manage.py runserver
we get a ready made django page but we do add are urls ,views , models etc..., as per the requirements and migrate the required again and run

- python manage.py migrate
- python manage.py runserver
""" (django) 04:57 ~/dprojx $ python manage.py runserver
Watching for file changes with StatReloader
Performing system checks...
System check identified no issues (0 silenced).
October 15, 2020 - 04:58:27
Django version 3.1.2, using settings 'dprojx.settings'
Starting development server at http://127.0.0.1:8000/ """
we get a local server runnning 

in this scenerio I have used the  <a href="https://www.pythonanywhere.com/">pythonanywhere</a> for hosting which wprks same as the local command line 

I have addded the zip files under the Zip folder for the Django codes

Thank you for giving the chance.
