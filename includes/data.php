<?php
/*
 * VELA - placeholder content.
 *
 * Everything shown on the site comes from the arrays below, so you can change
 * words and pictures here. Later you can replace these arrays with database queries.
 *
 * 'image' => ''  shows a grey placeholder box.
 * To use a real picture, put the file in the images/ folder and set the path
 * relative to the project root, e.g.  'image' => 'images/artworks/art1.jpg'
 */

// ---------- Home page hero slides (the big picture) ----------
$heroSlides = [
    ['image' => '', 'alt' => 'Hero slide 1'],
    ['image' => '', 'alt' => 'Hero slide 2'],
    ['image' => '', 'alt' => 'Hero slide 3'],
];

// ---------- Artists ----------
$artists = [
    ['id' => 1, 'name' => 'Makoto', 'joined' => '22/02/2019', 'followers' => 945, 'following' => 4, 'image' => ''],
    ['id' => 2, 'name' => 'Se4r',   'joined' => '31/10/2019', 'followers' => 512, 'following' => 12, 'image' => ''],
    ['id' => 3, 'name' => 'G1ORia', 'joined' => '06/12/2022', 'followers' => 230, 'following' => 31, 'image' => ''],
    ['id' => 4, 'name' => 'D0ria',  'joined' => '04/01/2018', 'followers' => 1280, 'following' => 8, 'image' => ''],
];

// ---------- Artworks ----------
$artworks = [
    ['id' => 1, 'title' => 'Artwork Title 1', 'artist_id' => 4, 'image' => 'images/1 (1).jpeg', 'size' => '1920 x 1080', 'medium' => 'Digital art', 'year' => '2024', 'location' => 'Los Angeles', 'price' => '$10,000 USD', 'description' => 'Placeholder description for artwork 1. Change this text in includes/data.php.'],
    ['id' => 2, 'title' => 'Artwork Title 2', 'artist_id' => 1, 'image' => 'images/1 (2).jpeg', 'size' => '1920 x 1080', 'medium' => 'Oil on canvas', 'year' => '2023', 'location' => 'Jakarta', 'price' => '$2,500 USD', 'description' => 'Placeholder description for artwork 2. Change this text in includes/data.php.'],
    ['id' => 3, 'title' => 'Artwork Title 3', 'artist_id' => 1, 'image' => 'images/1 (3).jpeg', 'size' => '1600 x 1200', 'medium' => 'Watercolor', 'year' => '2022', 'location' => 'Bali', 'price' => '$1,800 USD', 'description' => 'Placeholder description for artwork 3. Change this text in includes/data.php.'],
    ['id' => 4, 'title' => 'Artwork Title 4', 'artist_id' => 1, 'image' => 'images/1 (4).jpeg', 'size' => '1600 x 1200', 'medium' => 'Acrylic', 'year' => '2024', 'location' => 'Tokyo', 'price' => '$3,200 USD', 'description' => 'Placeholder description for artwork 4. Change this text in includes/data.php.'],
    ['id' => 5, 'title' => 'Artwork Title 5', 'artist_id' => 2, 'image' => 'images/1 (5).jpeg', 'size' => '2000 x 1500', 'medium' => 'Digital art', 'year' => '2021', 'location' => 'London', 'price' => '$900 USD', 'description' => 'Placeholder description for artwork 5. Change this text in includes/data.php.'],
    ['id' => 6, 'title' => 'Artwork Title 6', 'artist_id' => 2, 'image' => 'images/1 (6).jpeg', 'size' => '2000 x 1500', 'medium' => 'Oil on canvas', 'year' => '2023', 'location' => 'Singapore', 'price' => '$4,000 USD', 'description' => 'Placeholder description for artwork 6. Change this text in includes/data.php.'],
    ['id' => 7, 'title' => 'Artwork Title 7', 'artist_id' => 3, 'image' => 'images/1 (7).jpeg', 'size' => '1500 x 1500', 'medium' => 'Pastel', 'year' => '2020', 'location' => 'Auckland', 'price' => '$1,100 USD', 'description' => 'Placeholder description for artwork 7. Change this text in includes/data.php.'],
    ['id' => 8, 'title' => 'Artwork Title 8', 'artist_id' => 3, 'image' => 'images/1 (8).jpeg', 'size' => '1500 x 1500', 'medium' => 'Digital art', 'year' => '2025', 'location' => 'Surabaya', 'price' => '$1,450 USD', 'description' => 'Placeholder description for artwork 8. Change this text in includes/data.php.'],
    ['id' => 9, 'title' => 'Artwork Title 9', 'artist_id' => 4, 'image' => 'images/1 (9).jpeg', 'size' => '1920 x 1080', 'medium' => 'Digital art', 'year' => '2025', 'location' => 'Los Angeles', 'price' => '$7,500 USD', 'description' => 'Placeholder description for artwork 9. Change this text in includes/data.php.'],
];

// ---------- Artspace events ----------
$events = [
    ['id' => 1, 'location' => 'New Zealand', 'title' => 'Endless Pastures', 'image' => '', 'date' => 'Date to be announced', 'time' => 'Time to be announced', 'venue' => 'Venue placeholder', 'description' => 'A sweeping landscape seemingly endless rows of beautifully drawn and painted art.'],
    ['id' => 2, 'location' => 'London', 'title' => 'St. Mary River', 'image' => '', 'date' => 'Date to be announced', 'time' => 'Time to be announced', 'venue' => 'Venue placeholder', 'description' => 'A grand alpine panorama showcasing majestic, jagged mountain ridges mirrored in a calm river.'],
    ['id' => 3, 'location' => 'City name', 'title' => 'Event Title 3', 'image' => '', 'date' => 'Date to be announced', 'time' => 'Time to be announced', 'venue' => 'Venue placeholder', 'description' => 'Placeholder description for the third event. Change this text in includes/data.php.'],
];
