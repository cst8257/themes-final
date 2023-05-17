<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Themes</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <style>
    html, body {
      display: grid;
      justify-content: center;
      align-content: center; 
      height: 100vh;

      background-color: <?php echo $current['background-color']; ?>;
      color: <?php echo $current['color']; ?>;
    }
  </style>
</head>
<body>
  <nav class="navbar bg-dark navbar-expand fixed-top bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid justify-content-center">
      <ul class="navbar-nav">
        <?php foreach ($themes as $theme) : ?>

          <li class="nav-item">
            <?php if ($theme['name'] === $current['name']) : ?>
              <a class="nav-link active" href="<?php echo ($theme['name'] === 'dark') ? "index" : $theme['name']; ?>.php"><?php echo ucwords($theme['name']); ?></a>
            <?php else : ?>
              <a class="nav-link" href="<?php echo ($theme['name'] === 'dark') ? "index" : $theme['name']; ?>.php"><?php echo ucwords($theme['name']); ?></a>
            <?php endif;?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </nav>
  <h1><?php echo ucwords($current['name']); ?></h1>
</body>
</html>