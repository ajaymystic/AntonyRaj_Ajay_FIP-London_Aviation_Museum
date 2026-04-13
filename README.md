# London Aviation Museum

A full-stack web application built for the **427 Wing RCAF Association** in London, Ontario as a Final Integrated Project (FIP). The site serves as a digital museum experience, commemorating Canadian and Commonwealth airmen who trained at the BCATP base during World War II.

This repository is the **Laravel migration** of the original plain PHP/MySQL project, restructured to use Laravel 11's MVC architecture, Eloquent ORM, route model binding, Blade templating, and a RESTful API layer.

---

## Tech Stack

| Layer | Technology |
|---|---|
| Framework | Laravel 11 |
| Database | MariaDB (via XAMPP) |
| ORM | Eloquent |
| Templating | Blade |
| Frontend | Vanilla JS (ES Modules), Vue 3, GSAP, Plyr |
| Styling | Custom CSS (compiled from SASS) |
| Auth | Session-based with custom middleware |
| Local Server | PHP Artisan (`php artisan serve`) |

---

## Features

### Public Site
- **Home** — hero video, museum intro, newsletter signup (Vue 3)
- **Wartime** — animated SVG timeline with GSAP scroll animations
- **Battle of Britain** — interactive pilot carousel with 3D model viewer
- **Book of Remembrance** — searchable database of 238 pilot records with individual profile pages
- **Exhibition** — gallery and video showcase
- **Events** — dynamically loaded upcoming and past events with tab filtering
- **Contact** — AJAX form with server-side validation, submissions saved to database

### Admin Panel
- Secure login with session-based authentication and bcrypt password verification
- **Events** — full CRUD with modal interface, slug auto-generation, status management
- **Social Posts** — media upload (image/video) with drag-and-drop, platform tagging
- **Messages** — read-only view of all contact form submissions

---

## Project Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── Admin/AuthController.php
│   │   ├── BorController.php
│   │   ├── ContactController.php
│   │   ├── EventController.php
│   │   ├── MessageController.php
│   │   ├── NewsletterController.php
│   │   └── SocialPostController.php
│   └── Middleware/
│       └── AdminAuth.php
└── Models/
    ├── Admin.php
    ├── BorPilot.php
    ├── ContactSubmission.php
    ├── Event.php
    ├── NewsletterSubscriber.php
    └── SocialPost.php

database/migrations/          # 6 migration files covering all tables
resources/views/              # Blade templates
├── layouts/
│   ├── app.blade.php         # Main site layout (nav, footer, scripts)
│   └── admin.blade.php       # Admin panel layout
├── admin/                    # Admin views
routes/web.php                # All routes (pages + API)
public/js/modules/            # ES Module JS files
```

---

## Database Schema

| Table | Purpose |
|---|---|
| `admins` | Admin user accounts |
| `bor_pilots` | 238 Book of Remembrance pilot records |
| `events` | Museum events (CRUD via admin) |
| `social_posts` | Social media posts (CRUD via admin) |
| `contact_submissions` | Contact form submissions |
| `newsletter_subscribers` | Newsletter signups |

---

## API Endpoints

### Public
```
GET    /api/bor                       All pilot records
GET    /api/bor/{borPilot}            Single pilot record
GET    /api/events                    Published events
GET    /api/events/{event}            Single event
GET    /api/social-posts              Published posts
GET    /api/social-posts/{socialPost} Single post
POST   /api/newsletter                Subscribe to newsletter
POST   /api/contact                   Submit contact form
```

### Admin Protected
```
POST   /api/events                    Create event
PUT    /api/events/{event}            Update event
DELETE /api/events/{event}            Delete event
POST   /api/social-posts              Upload post
PUT    /api/social-posts/{socialPost} Update post
DELETE /api/social-posts/{socialPost} Delete post
GET    /api/messages                  All contact submissions
```

---

## Local Setup

### Requirements
- PHP 8.2+
- Composer
- XAMPP (MariaDB)

### Steps

1. Clone the repo
```bash
git clone https://github.com/ajaymystic/AntonyRaj_Ajay_FIP-London_Aviation_Museum.git
cd LAM-Laravel
```

2. Install dependencies
```bash
composer install
```

3. Copy and configure environment
```bash
cp .env.example .env
```
Edit `.env` and set:
```
DB_CONNECTION=mariadb
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=london_aviation_museum
DB_USERNAME=root
DB_PASSWORD=
SESSION_DRIVER=file
```

4. Generate app key
```bash
php artisan key:generate
```

5. Run migrations and seed all data
```bash
php artisan migrate
php artisan db:seed
```

This seeds the admin account and all 238 Book of Remembrance pilot records automatically.

6. Start the server
```bash
php artisan serve
```

Visit `http://127.0.0.1:8000`

---

## Admin Access

Credentials are set in `database/seeders/AdminSeeder.php`.

```
URL:      http://127.0.0.1:8000/admin/login
Username: admin
Password: london
```

---

## Key Implementation Details

- **Route model binding** used on all single-resource endpoints - Laravel resolves the model automatically and returns 404 if not found
- **Custom AdminAuth middleware** guards all admin routes and API write endpoints, returning JSON for API requests and a redirect for page requests
- **Slug generation** built without regex using `str_replace` and a collapse loop
- **Email header injection** prevention applied on all user-submitted email fields
- **MIME type validation** on media uploads checks the actual file type rather than the file extension
- **CSRF protection** disabled only for `/api/*` routes to allow fetch-based AJAX from the frontend

---

## Client

**427 Wing (London), Royal Canadian Air Force Association**
London International Airport, London, Ontario

The museum is housed in a 1943 airmen's canteen - the last surviving building from the BCATP base. The permanent exhibition is slated to open fall 2026.

---

## Acknowledgements

- Western University Archives
- Ron Nelson Collection
- RCAF Official Records
- 427 Wing RCAF Association
