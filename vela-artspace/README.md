# VELA Art Space - wireframe

PHP + HTML + CSS + JavaScript wireframe. No database yet.

## Run it

From inside this folder:

    php -S localhost:8000

Then open http://localhost:8000 (it redirects to the home page).
Or copy the whole folder into XAMPP/Laragon `htdocs` and open `/vela-artspace/`.

## Folders

| Folder | What is in it |
|---|---|
| `pages/` | One PHP file per page (home, gallery, artists, artist-profile, artwork-detail, events, event-schedule, login, about) |
| `includes/` | Shared header and footer, settings (`config.php`), content (`data.php`), helpers (`functions.php`) |
| `css/` | `style.css` |
| `js/` | `main.js` (hero slider, like buttons, follow button) |
| `images/` | Put real pictures here. `images/placeholder/` is spare |
| `database/` | Empty - reserved for the database later |

## Things you will want to change

- **Slide speed / scroller speed / logo file**: `includes/config.php`
- **All words and pictures** (artworks, artists, events, hero slides): `includes/data.php`
  - `'image' => ''` shows a grey placeholder box.
  - To use a real picture, save it in `images/` and set e.g. `'image' => 'images/artworks/art1.jpg'`.
- **Logo**: save your logo as `images/logo.png` and it replaces the dashed "LOGO" box automatically.
- **Header / footer**: `includes/header.php` and `includes/footer.php` - edit once, every page updates.

## How the pages connect

- Header: Logo and Home -> home, Gallery, Artists, Artwork Detail (shows artwork #1), Artspace Events, Login.
- Footer: About Us -> about page, Contact Us -> contact section of the about page.
- Gallery picture -> `artwork-detail.php?id=N` (each artwork has its own page).
- Artist row / Go to Profile -> `artist-profile.php?id=N`.
- Event Schedule button -> `event-schedule.php?id=N`.
- The menu underline follows the current page. Login, About, artist profile and event schedule are not in the menu, so nothing is underlined there.
