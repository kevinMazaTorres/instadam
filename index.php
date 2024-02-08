<!DOCTYPE html>
<html>
<head>
    <title>Instadam</title>
    <?php include 'components/head.php'; ?>
    <!-- https://picsum.photos/v2/list -->
    <style>
        .post-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .post-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .post-description {
            color: #666;
            margin-bottom: 10px;
        }

        .post-image {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php include 'components/navbar.php'; ?>
    <h1>Instadam</h1>
    <div class="container posts">
        <?php
        include 'db/db.php';
        $posts = getPosts();
        foreach ($posts as $post) {
        ?>
          <div class="post-card">
              <h2 class="post-title"><?php echo $post['title']; ?></h2>
              <p class="post-description"><?php echo $post['description']; ?></p>
              <img class="post-image" src="<?php echo $post['image_url']; ?>" alt="<?php echo $post['title']; ?>">
          </div>
        <?php } ?>
    </div>
    <?php include 'components/scripts.php'; ?>
</body>
</html>
