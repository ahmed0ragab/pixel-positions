 Pixel Positions

A job board web application built with Laravel where employers can post
jobs and candidates can search and filter by tags.

Tech stack (tall stack)
**Laravel 112.53.0** — PHP Framework
**SQLite ** — Database 
**Tailwind CSS** — Styling
**Alpine.js** — Mobile menu interactions
**manual creation** — Authentication


Features

- User authentication (register, login, logout)
- Employers can post job listings with logo upload
- Search jobs by title or keyword
- Filter jobs by tags
- Responsive design with mobile menu
- Featured job listings
- Form validation with error messages


  Screenshots

  <img width="1359" height="463" alt="image" src="https://github.com/user-attachments/assets/60333054-3f43-420b-aa50-1fbb38442fc7" />
  <img width="1397" height="494" alt="image" src="https://github.com/user-attachments/assets/f0657ad4-71e8-4dfc-8c26-2578bd16644c" />
  <img width="1342" height="565" alt="image" src="https://github.com/user-attachments/assets/57cd33a9-3ee7-4ee4-a047-72c9d82077f4" />
  <img width="1354" height="599" alt="image" src="https://github.com/user-attachments/assets/6d223533-2d6a-4000-a829-99d00ee01245" />

Installation

**
1. Clone the repository
   git clone https://github.com/yourusername/pixel-positions.git

2. Install dependencies
   composer install
   npm install

3. Copy environment file
   cp .env.example .env

4. Generate app key
   php artisan key:generate

5. Run migrations and seeders
   php artisan migrate --seed

6. Link storage
   php artisan storage:link

7. Start the server
   php artisan serve
   npm run dev
**


What I Learned

- MVC architecture in Laravel
- Eloquent ORM and relationships (hasMany, belongsTo, belongsToMany)
- File uploads and storage
- Authentication and middleware
- Route model binding
- Blade components and layouts
- Form validation
- Database seeding and factories


Author

Ahmed Ragab
www.linkedin.com/in/ahmed-ragab-31a01721a
