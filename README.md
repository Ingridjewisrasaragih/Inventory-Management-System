
# Inventory Management System

-   This application is developed using laravel 8
-   php 8.0 or more needed

## Commands to active application

-   composer install / composer update
-   npm install
-   npm run dev
-   make env file and give command 'php artisan key:generate'
-   setup db and give command 'php artisan migrate --seed' or import backup db file

# Application Features

-   Laravel Spatie for Role and Permission Management.
-   Used Ajax for validating inventory requests.
-   Application has two parts, Raw Material Inventory & Production Material Inventory.
-   There have raw materials like oil (soyabean), oil (palm), cap, label, bottle, etc.
-   Create request for raw materials.
-   After confirming raw material requests stock will be updated.
-   Create request for production material.
-   After confirming production material requests stock of raw material and production material will be updated.

## Raw Material Inventory

-   Raw Material Requests is accessed by employees having specific (Raw Request Handler) Role.
-   If any single employee will cancell the request, it will be cancelled and will be denided from next process.
-   All employees having this role have to confirm requests to add Raw Products in stock.
-   Dynamic Request Confirmation system (when request is created, role is distributed among all employees having specific Role).

## Production Material Inventory

-   When creating new requests availability of raw material is being checked.
-   Production Material Requests is accessed by employees having specific (Production Request Handler) Role.
-   If any single employee will cancell the request, it will be cancelled and will be denided from next process.
-   When employees confirming requests stock availability will be checked and next process wil be start.
-   All employees having this role have to confirm requests to add Production Products in stock.
-   Dynamic Request Confirmation system (when request is created, role is distributed among all employees having specific Role).

# Login Details

-   admin: naymur@example.com
-   password: abcd1234

 ## flowchart
 ![flowchart sia drawio](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/0de2020a-5b31-4a71-896a-336ea616de65)

 ## Picture
#Login
 ![WhatsApp Image 2023-11-20 at 13 05 38_5cef130f](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/3d00556e-0804-41cc-8bba-3063ee7e6633)
 #dashboard
 ![WhatsApp Image 2023-11-20 at 13 05 37_6bcc9a0d](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/87cd7323-463f-4cb9-a637-38443fa7d8f2)
 ![WhatsApp Image 2023-11-20 at 13 05 39_20b63508](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/a1d80003-1e75-4c3a-8464-01c46b7611ba)
 ![WhatsApp Image 2023-11-20 at 13 05 39_e8f94699](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/ce22679d-9597-4d94-9e8b-ea7b1eb742cb)
 ![WhatsApp Image 2023-11-20 at 13 05 40_0b535152](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/80c970b4-e444-42be-8986-f2374afb4bf5)
![WhatsApp Image 2023-11-20 at 13 05 40_aa07b2e5](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/3d9e6890-0c6e-4f79-8f33-525a006998ce)
![WhatsApp Image 2023-11-20 at 13 05 41_82965b26](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/f226879a-ef67-487a-9555-0157459fb008)
![WhatsApp Image 2023-11-20 at 13 05 41_ada688f9](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/adf245f4-7b87-458b-8042-64751034cb48)
![WhatsApp Image 2023-11-20 at 13 05 42_73ac3a85](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/a873cf6d-7f90-40aa-aa97-10f61061c827)
![WhatsApp Image 2023-11-20 at 13 05 42_9d071e39](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/e566bb75-408c-4155-951b-a7707b919d34)
![WhatsApp Image 2023-11-20 at 13 05 43_2fc47c58](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/99e00a82-c88b-4428-9a85-e952a92bfa08)
![WhatsApp Image 2023-11-20 at 13 05 43_6dbfc1ed](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/49f00e0c-aa66-4f3f-ba03-4240552ed6c2)
![WhatsApp Image 2023-11-20 at 13 05 44_4d11402e](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/3d26f5c9-4931-41a6-96e6-cbaacbd9ea33)
![WhatsApp Image 2023-11-20 at 13 05 44_6198c817](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/ed1922f1-9e66-4c65-abad-caae2ba77232)
![WhatsApp Image 2023-11-20 at 13 05 45_e23b40b4](https://github.com/Ingridjewisrasaragih/Inventory-Management-System/assets/152147045/a522d7a6-aa05-4ab0-9b83-db48f2c546eb)









 


 

 

