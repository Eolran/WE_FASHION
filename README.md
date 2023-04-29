
# WE_FASHION

A brief description of what this project does and who it's for


## Authors

- [Yoann Legrand](https://www.github.com/Eolran)


## Installation

How to install the WE_FASHION Project

```bash
  cd 
  composer install
  npm install

  //Generate your .env file with:
  cp .env.example .env
  php artisan key:generate

  //Create data for MySQL Database (Be sure your .env is correctly configured)
  php artisan migrate
  php artisan db:seed
```
    
## Run Locally

When the installation is completed, you can run the project with

```bash
  php artisan serve
```


## Roadmap

- Add the image upload
- Add the filter for current published state, reduction price and categories
- Finish the link between categories and products db (You currently have to manually insert an entry in the "categories_products" table to actually see a category for a product.)

