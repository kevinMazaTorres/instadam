<!DOCTYPE html>
<html>
<head>
    <title>Instadam</title>
    <?php include 'components/head.php'; ?>
    <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\instadam\assets\styles.css">
    <!-- https://picsum.photos/v2/list -->
</head>

<body>
    <?php include 'components/navbar.php'; ?>
    <div class="container posts">
        <?php
        include 'db/db.php';
        $posts = getPosts();
        $count = 0;
        foreach ($posts as $post) {
            if ($count % 3 == 0) {
                echo '<div class="row">';
            }
        ?>
          <div class="col-md-4">
          <div class="post-card"> <!-- Alinea el contenido al centro -->
                    <img class="post-image" src="<?php echo $post['image_url']; ?>" alt="<?php echo $post['title']; ?>">
                    <h2 class="post-title"><?php echo $post['title']; ?></h2>
                    <p class="post-description"><?php echo $post['description']; ?></p>
                </div>
          </div>
        <?php 
            $count++;
            if ($count % 3 == 0 || $count == count($posts)) {
                echo '</div>';
            }
        } ?>
    </div>
    <?php include 'components/scripts.php'; ?>
</body>
</html>
