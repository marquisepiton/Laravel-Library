<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
</p>

# An API for Librarians! 📕 📗 📘 📙

In this projects, I created an API for librarians to know the status of books in their library, and update books and their information.



![](./libraryImg/libraian.webp)

First, I wanted psuedo code my database and think about how I wanted to structure my data. I used "DBDiagram" as my planner for this tasks. 

Tables: 

        - User
        - checkouts
        - books
        - genres
        - authors
        - chondition


![](./libraryImg/dbdiagram.png)


Once I was happy with the data structure, I downloaded all the necessary Lavarel packages and then set up the environment using Codeanywhere. Then I went through the "vertical slice"; creating the Migration, Model, Factories, Seeder, Controller, and the route for each of the tables. 

![](./libraryImg/makingModel.png)

"php artisan make:model "table_name" -a"  Makes the migration, model, factory, seeder, controller, and route file for you. 

![](./libraryImg/factory.png) 
![](./libraryImg/routes.png)




Then I ran "php artisan migrate:fresh --seeder" to build the tables in the database to make sure the data was rendering.

![](./libraryImg/db.png)

Then I use "postman" website to be able to call the API to be able to run the "CRUD (create, read, update, delete)" functions. 


![](./libraryImg/calls.png)








