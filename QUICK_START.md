# Quick Start Guide

## Getting Started in 3 Steps

### 1. Start the Development Server

Open a terminal in the project directory and run:

```bash
php -S localhost:8000
```

### 2. Open in Browser

Navigate to:

```text
http://localhost:8000
```

### 3. Start Building

- Edit `index.php` to customize the home page
- Modify components in the `components/` directory
- Create new pages in the `pages/` directory
- Add custom styles in `assets/css/custom.css`

## Project Structure Overview

```text
static-php-template/
├── components/     → Reusable PHP components (header, footer, navbar)
├── layouts/        → Layout templates (main.php)
├── pages/          → Individual page files
├── assets/         → CSS, JS, and images
└── index.php       → Home page
```

## Creating Your First Page

1. Create a new file: `pages/my-page.php`
2. Copy the structure from `pages/about.php`
3. Modify the `$pageTitle` and content
4. Access it at: `http://localhost:8000/pages/my-page.php`

## Tailwind CSS

Tailwind CSS is already included via CDN. Just use Tailwind utility classes in your HTML!

Example:
```html
<div class="bg-blue-500 text-white p-4 rounded-lg">
    Hello World
</div>
```

## Need Help?

See `README.md` for detailed documentation.
