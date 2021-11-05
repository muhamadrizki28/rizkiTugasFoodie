<!-- <>
    <x-slot name="detail">
        <link rel="stylesheet" href="/assets/styles/detail.css">
    </x-slot>
</> error [main]-->
@extends('template')

<!-- head -->
@section('detail')
    <link rel="stylesheet" href="/assets/styles/style.css">
    <link rel="stylesheet" href="/assets/styles/detail.css">
@endsection

    <!-- <main> -->
    <!-- <section> -->
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
    <div class="container-menu">
    <?php
        echo $post;
    ?>
       <div class="detail-menu-box">
        <div class="detail-img">
        <img src="<?php echo $json[0]['picture_url'] ?>" alt="" loading="lazy">
        </div>
        <div class="detail-title">
            <h1><?php echo $json[0]['title'] ?> </h1>
        </div>
        <div class="detail-price">
            <!-- Number Format -->
            <p>Rp <?php echo number_format((float)$angka0, 2, ",", "."); ?> </p>
        </div>
        <div class="detail-desc">
            <p><?php echo $json[0]['description'] ?></p>
        </div>
        <div class="detail-kategori">
            <!-- Array to String -->
            <p>kategori: <?php echo implode( $json[0]['categories'],","); ?></p>
        </div>
    </div>
    
    
    </div>

@endsection
    <!-- </main> -->
    <!-- </section> -->