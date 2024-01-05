## Laravel Starter

To provide a project startpoint, built with Laravel, Blade, Boostrap5 along with Mazer by Saugi

### Features

-   Authentication
-   Dashboard & Error pages

## Installation

1. Clone this project
    
2. Install dependencies

    ```bash
    composer install
    ```

    And javascript dependencies

    ```bash
    yarn install && yarn dev

    #OR

    npm install && npm run dev
    ```

3. Set up Laravel configurations

    ```bash
    copy .env.example .env
    php artisan key:generate
    ```

4. Set your database in .env

5. Migrate database

    ```bash
    php artisan migrate
    ```

6. Serve the application

    ```bash
    php artisan serve
    ```
