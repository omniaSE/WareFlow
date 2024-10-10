# Warehouse Management System 
This is a web-based application that helps manage warehouse inventory, track product movements.
## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/omniaSE/WareFlow.git
   ```

2. Navigate to the project directory:
   ```bash
   cd WareFlow
   ```

3. Install dependencies:
   ```bash
   composer install
   npm install
   ```

4. Create and configure `.env` file:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. Run migrations:
   ```bash
   php artisan migrate
   ```

6. Start the development server:
   ```bash
   php artisan serve
   ```
## Usage
- Register as a new user
- Add, edit, and remove products
- View and manage inventory levels
 ## Contributing
Contributions are welcome! Please open an issue or submit a pull request for any improvements.
## Acknowledgments
- Laravel framework
- Backpack for admin panel
 
