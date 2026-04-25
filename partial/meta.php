<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman utama</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons@4.29.0/dist/feather.min.css">
    <?php if (isset($_page) && $_page == 'project') { ?>
        <link rel="stylesheet" href="/css/project.css">
    <?php } else if (isset($_page) && $_page == 'home') { ?>
        <link rel="stylesheet" href="/css/home.css">
    <?php } else if (isset($_page) && $_page == 'login') { ?>
        <link rel="stylesheet" href="/css/login.css">
    <?php } else ?>
    <link rel="stylesheet" href="/css/style.css">
</head>