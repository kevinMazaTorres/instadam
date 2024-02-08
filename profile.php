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
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
        </ul>
        </div>
    </div>
    </div>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container">
                <div class="row">
                    <?php
                    include 'db/db.php';
                    $posts = getPosts();
                    foreach ($posts as $post) {
                    ?>
                    <div class="col-md-4">
                        <div class="post-card">
                            <img class="post-image" src="<?php echo $post['image_url']; ?>" alt="<?php echo $post['title']; ?>">
                            <h2 class="post-title"><?php echo $post['title']; ?></h2>
                            <p class="post-description"><?php echo $post['description']; ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <!-- Aquí deberías incluir los datos del perfil -->
            <div class="container">
                <h1>Profile</h1>
                <!-- Agrega el contenido del perfil aquí -->
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
    </div>

    <?php include 'components/scripts.php'; ?>
</body>
</html>
