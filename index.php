<?php
// Bisa server-side render konten atau API
$title = "My PHP PWA";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>

  <!-- Manifest -->
  <link rel="manifest" href="manifest.json">

  <!-- Styles -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>Welcome to My PHP PWA</h1>
  <p>This is served by PHP, but works offline with PWA features.</p>

  <!-- Register Service Worker -->
  <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', () => {
        navigator.serviceWorker.register('service-worker.js')
          .then(reg => console.log('Service Worker registered.', reg))
          .catch(err => console.log('Service Worker registration failed.', err));
      });
    }
  </script>
</body>

</html>