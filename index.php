<!DOCTYPE html>
<html>
<head>
    <title>Instadam</title>
    <?php include 'components/head.php'; ?>
    <?php include 'components/scripts.php'; ?>
    <!-- https://picsum.photos/v2/list -->
</head>

<body>
    <?php include 'components/navbar.php'; ?>
    <div class="container posts">
        <div class="row">
            <?php
            include 'db/db.php';
            $posts = getPosts();
            foreach ($posts as $post) {
            ?>
            <div class="col-md-6 offset-md-3"> <!-- Ajusta el tamaño de la columna según tu preferencia -->
                <div class="post-carsd"> <!-- Alinea el contenido al centro -->
                    <img class="post-image" src="<?php echo $post['image_url']; ?>" alt="<?php echo $post['title']; ?>">
                    <h2 class="post-title"><?php echo $post['title']; ?></h2>
                    <p class="post-description"><?php echo $post['description']; ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php include 'components/scripts.php'; ?>
</body>
</html>
