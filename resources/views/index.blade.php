<!-- <>
    <x-slot name="detail">
        <link rel="stylesheet" href="/assets/styles/detail.css">
    </x-slot>
</> error [main]-->
@extends('template')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @section('list')
    <link rel="stylesheet" href="/assets/styles/list.css">
    @endsection
</head>
<body>
    @section('content')
            <?php
                $filepath = resource_path("/../foodie-rev.json");
                $data = file_get_contents($filepath);
                $json =json_decode($data, TRUE);
            ?>
    <!-- <main> -->
        <!-- <section> -->
            <div class="container-menu">
                <h1>Daftar Menu</h1>
                <div class="list-menu">
                    <div class="menu-1 menu-all">
                        <div class="menu-image">
                            <img src="<?php echo $json[0]['picture_url'] ?>" alt="" loading="lazy">
                        </div>
                        <div class="menu-text">
                            <h1>Menu: </br><?php echo $json[0]['title'] ?> </h1>
                            <p>Price: </br>Rp <?php echo $json[0]["base_price"] ?> </p>
                        </div>
                    </div>
                    <div class="menu-2 menu-all">
                        <div class="menu-image">
                            <img src="<?php echo $json[1]['picture_url'] ?>" alt="" loading="lazy">
                        </div>
                        <div class="menu-text">
                            <h1>Menu: </br><?php echo $json[1]['title'] ?> </h1>
                            <p>Price: </br>Rp <?php echo $json[1]['base_price'] ?> </p>
                        </div>
                    </div>
                    <div class="menu-3 menu-all">
                        <div class="menu-image">
                            <img src="<?php echo $json[2]['picture_url'] ?>" alt="" loading="lazy">
                        </div>
                        <div class="menu-text">
                            <h1>Menu: </br><?php echo $json[2]['title'] ?> </h1>
                            <p>Price: </br>Rp <?php echo $json[2]['base_price'] ?> </p>
                        </div>
                    </div>
                    <div class="menu-4 menu-all">
                        <div class="menu-image">
                             <img src="<?php echo $json[3]['picture_url'] ?>" alt="" loading="lazy">
                        </div>
                        <div class="menu-text">
                            <h1>Menu: </br><?php echo $json[3]['title'] ?> </h1>
                            <p>Price: </br>Rp <?php echo $json[3]['base_price'] ?> </p>
                        </div>
                    </div>
                    <div class="menu-5 menu-all">
                        <div class="menu-image">
                            <img src="<?php echo $json[4]['picture_url'] ?>" alt="" loading="lazy">
                        </div>
                        <div class="menu-text">
                            <h1>Menu: </br><?php echo $json[4]['title'] ?> </h1>
                            <p>Price: </br>Rp <?php echo $json[4]['base_price'] ?> </p>
                        </div>
                    </div>
                    <div class="menu-6 menu-all">
                        <div class="menu-image">
                             <img src="<?php echo $json[5]['picture_url'] ?>" alt="" loading="lazy">
                        </div>
                        <div class="menu-text">
                            <h1>Menu: </br><?php echo $json[5]['title'] ?> </h1>
                            <p>Price: </br>Rp <?php echo $json[5]['base_price'] ?> </p>
                        </div>
                    </div>
                    <div class="menu-7 menu-all">
                        <div class="menu-image">
                            <img src="<?php echo $json[6]['picture_url'] ?>" alt="" loading="lazy">
                        </div>
                        <div class="menu-text">
                            <h1>Menu: </br><?php echo $json[6]['title'] ?> </h1>
                            <p>Price: </br>Rp <?php echo $json[6]['base_price'] ?> </p>
                        </div>
                    </div>
                    <div class="menu-8 menu-all">
                        <div class="menu-image">
                             <img src="<?php echo $json[7]['picture_url'] ?>" alt="" loading="lazy">
                        </div>
                        <div class="menu-text">
                            <h1>Menu: </br><?php echo $json[7]['title'] ?> </h1>
                            <p>Price: </br>Rp <?php echo $json[7]['base_price'] ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </section> -->
    <!-- </main> -->

    @endsection
</body>
</html>



