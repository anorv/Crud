# CRUD-app

With this CRUD-app you can manage your <b>Database</b> for yours employees and projects. You can :
- Add new employees or projects;
- Update employees and projects;
- Delete employees and projects;

<h4> How to use CRUD-app:</h4>

* First, check that in your computer is installed AMPPS, MySQL and COMPOSER:<br>
 -- <a href="https://ampps.com/downloads">AMPPS download</a>;<br>
  -- <a href="https://dev.mysql.com/downloads/installer/">MySQL download</a>;<br>
    -- <a href="https://getcomposer.org/download/">Composer download</a>;
  <br>

  <h5>Then follow these steps:</h5>
- Open MySQL and create your database named <b>crud</b>:
-  Download this repository ZIP file;
- Extract that file and move it to the folder named www you can find it in C:\Program Files\Ampps. If you don't found it, check where you installed AMPPS;
- In <b>.htaccess</b> file add moved folder name;
- Then open that folder in Visual Studio Code;
- Create <b>.env</b> file, and add everything from <b>.env.example</b>. In <b>.env</b> file change just password: <i>mysql</i>;
<h5>Then open terminal and install doctrine/orm, and configurate files by following steps:<h5>
- <i>php ../composer.phar require doctrine/orm;  <br>
- php artisan key:generate;  <br>
- php artisan migrate; </i>  <br>

- Go to browser and in web address field write http://localhost/ and press enter.
