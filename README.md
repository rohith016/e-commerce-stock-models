# E-commerce Package
A reusable Laravel package providing models, migrations, seeders, and factories for e-commerce applications. This package simplifies setup and accelerates development for common e-commerce functionality.

## Features
Predefined Eloquent models for Product, Order, Address, and more.
Migration files to create necessary database tables.
Seeders and factories to populate tables with dummy data for testing and development.

## Installation

### Step 1: Require the Package
Install the package via Composer:

```bash
composer require rohith016/e-commerce-stock-models
```

### Step 2: Publish Resources
The package provides a range of resources (models, migrations, seeders, and factories). You can selectively publish resources using tags.

### Step 3: Publish the Service Provider
After requiring the package, Laravel should automatically discover the service provider. If not, register it in config/app.php:

```bash
'providers' => [
    // Other Service Providers
    Rohith\EcommercePackage\EcommerceServiceProvider::class,
];
```

## Usage
The package resources can be published to your Laravel application’s default structure as needed.

## Publish All Resources
To publish all available resources (models, migrations, seeders, and factories), run:

```bash
php artisan vendor:publish --provider="Rohith\EcommercePackage\EcommerceServiceProvider"
```

## Selective Publishing
Use the following commands to publish specific resources:

Publish Models:

```bash
php artisan vendor:publish --tag=ecommerce-models
```
Publish Migrations:

```bash
php artisan vendor:publish --tag=ecommerce-migrations
```
Publish Seeders:

```bash
php artisan vendor:publish --tag=ecommerce-seeders
```
Publish Factories:

```bash
php artisan vendor:publish --tag=ecommerce-factories

```
## Example Models and Structure
Once published, you can find the models in app/Models, migrations in database/migrations, seeders in database/seeders, and factories in database/factories.

## Running Migrations and Seeders
### Migrate the Database:

Run the migrations to create the e-commerce tables:


php artisan migrate
Seed the Database (optional):

Seed the database tables with sample data:

```bash
php artisan db:seed --class=ProductSeeder
```
Example
Here’s how to use the Product model:

```bash
use App\Models\Product;

// Retrieve all products
$products = Product::all();

// Create a new product
$product = Product::create([
    'name' => 'Sample Product',
    'description' => 'This is a sample product description.',
    'price' => 19.99,
    'stock' => 50,
]);

```
## Contributing
Contributions are welcome! Feel free to submit a pull request or open an issue for suggestions and improvements.

## License
This package is open-source software licensed under the MIT license.

