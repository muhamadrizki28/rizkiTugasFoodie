<!-- <>
    <x-slot name="detail">
        <link rel="stylesheet" href="/assets/styles/detail.css">
    </x-slot>
</> error [main]-->
@extends('template')

    <!-- head -->
    @section('list')
    <link rel="stylesheet" href="/assets/styles/list.css">
    @endsection

    @section('content')
            <?php
                    // <!-- json -->
                    $filepath = resource_path("/../foodie-rev.json"); $data =
                    file_get_contents($filepath); $json =json_decode($data, TRUE);

                    // <!-- // json ke number format -->
                    $angka0 = $json[0]['base_price'] ; $angka1 = $json[1]['base_price'] ; $angka2 =
                    $json[2]['base_price'] ; $angka3 = $json[3]['base_price'] ; $angka4 =
                    $json[4]['base_price'] ; $angka5 = $json[5]['base_price'] ; $angka6 =
                    $json[6]['base_price'] ; $angka7 = $json[7]['base_price'] ; 
            ?>
    <!-- <main> -->
        <!-- <section> -->
            <div class="container-menu">
                <h1>Daftar Menu</h1>
                <p>Foodie 0.1 - Teman Setia Perut Kelaparan</p>
                <div class="list-menu">
                    <a href="post/post-pertama">
                        <div class="menu-1 menu-all">
                            <div class="menu-image">
                                <img src="<?php echo $json[0]['picture_url'] ?>" alt="" loading="lazy">
                            </div>
                            <div class="menu-text">
                                <h1>Menu: </br><?php echo $json[0]['title'] ?> </h1>
                                <p>Price: </br>Rp <?php echo number_format((float)$angka0, 2, ",", "."); ?> </p>
                            </div>
                        </div>
                    </a>

                    <a href="post/post-kedua">
                        <div class="menu-2 menu-all">
                            <div class="menu-image">
                                <img src="<?php echo $json[1]['picture_url'] ?>" alt="" loading="lazy">
                            </div>
                            <div class="menu-text">
                                <h1>Menu: </br><?php echo $json[1]['title'] ?> </h1>
                                <p>Price: </br>Rp <?php echo number_format((float)$angka1, 2, ",", "."); ?> </p>
                            </div>
                        </div>
                    </a>

                    <a href="post/post-ketiga">
                        <div class="menu-3 menu-all">
                            <div class="menu-image">
                                <img src="<?php echo $json[2]['picture_url'] ?>" alt="" loading="lazy">
                            </div>
                            <div class="menu-text">
                                <h1>Menu: </br><?php echo $json[2]['title'] ?> </h1>
                                <p>Price: </br>Rp <?php echo number_format((float)$angka2, 2, ",", "."); ?> </p>
                            </div>
                        </div>
                    </a>

                    <a href="post/post-keempat">
                        <div class="menu-4 menu-all">
                            <div class="menu-image">
                                <img src="<?php echo $json[3]['picture_url'] ?>" alt="" loading="lazy">
                            </div>
                            <div class="menu-text">
                                <h1>Menu: </br><?php echo $json[3]['title'] ?> </h1>
                                <p>Price: </br>Rp <?php echo number_format((float)$angka3, 2, ",", "."); ?> </p>
                            </div>
                        </div>
                    </a>

                    <a href="post/post-kelima">
                        <div class="menu-5 menu-all">
                            <div class="menu-image">
                                <img src="<?php echo $json[4]['picture_url'] ?>" alt="" loading="lazy">
                            </div>
                            <div class="menu-text">
                                <h1>Menu: </br><?php echo $json[4]['title'] ?> </h1>
                                <p>Price: </br>Rp <?php echo number_format((float)$angka4, 2, ",", "."); ?> </p>
                            </div>
                        </div>
                    </a>

                    <a href="post/post-keenam">
                        <div class="menu-6 menu-all">
                            <div class="menu-image">
                                <img src="<?php echo $json[5]['picture_url'] ?>" alt="" loading="lazy">
                            </div>
                            <div class="menu-text">
                                <h1>Menu: </br><?php echo $json[5]['title'] ?> </h1>
                                <p>Price: </br>Rp <?php echo number_format((float)$angka5, 2, ",", "."); ?> </p>
                            </div>
                        </div>
                    </a>

                    <a href="post/post-ketujuh">
                        <div class="menu-7 menu-all">
                            <div class="menu-image">
                                <img src="<?php echo $json[6]['picture_url'] ?>" alt="" loading="lazy">
                            </div>
                            <div class="menu-text">
                                <h1>Menu: </br><?php echo $json[6]['title'] ?> </h1>
                                <p>Price: </br>Rp <?php echo number_format((float)$angka6, 2, ",", "."); ?> </p>
                            </div>
                        </div>
                    </a>

                    <a href="post/post-kedelapan">
                        <div class="menu-8 menu-all">
                            <div class="menu-image">
                                <img src="<?php echo $json[7]['picture_url'] ?>" alt="" loading="lazy">
                            </div>
                            <div class="menu-text">
                                <h1>Menu: </br><?php echo $json[7]['title'] ?> </h1>
                                <p>Price: </br>Rp <?php echo number_format((float)$angka7, 2, ",", "."); ?> </p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        <!-- </section> -->
    <!-- </main> -->
    @endsection



