<?php 
    $list = array (
        "Maleficent" => "https://cdn7.wdwnt.com/wp-content/uploads/2019/05/Maleficent-1-990x556.jpg",
        "Beauty and the Beast" => "https://images-na.ssl-images-amazon.com/images/I/91p8sSMXpkL._SY679_.jpg",
        "Aladdin" => "https://images-na.ssl-images-amazon.com/images/I/519xOk%2BVYDL._SY679_.jpg",
        "Avengers" => "https://img01.mgo-images.com/image/thumbnail/v2/content/MMVAF76018A477C2826A4EC8747C40B7BE27.jpeg",
        "Spider-man" => "https://terrigen-cdn-dev.marvel.com/content/prod/1x/spider-manfarfromhome_lob_crd_04_0.jpg",
        "Spider-verse" => "https://thegrizzlyfeaturehome.files.wordpress.com/2019/05/smitsv.jpg",
        "Detective Pika" => "https://media.aintitcool.com/media/_versions/2019/dannie/detpika_large.jpg",
        "Pikachu" => "https://i.pinimg.com/originals/ce/c9/72/cec972298a98cc525d8b394a8063a8a7.jpg",
        "Happy Pika" => "https://render.fineartamerica.com/images/rendered/default/poster/8/10/break/images/artworkimages/medium/1/pikachu-thomas-volpe.jpg",
        "Pokemon" => "https://pm1.narvii.com/5826/c68cfde54b39d159ad98c93afc3fcc9353447a1f_hq.jpg"
    );

    foreach ($list as $item => $img) {
        echo "<button class='item' style='border-radius: 25px;' type='submit' name='item' value='" . $item . "'>";
        echo "<div class='confirm' id='" . $item . "'>" . ($_SESSION["cart"][$item] ? "Remove" : "Add") . "</div> <br>";
        echo "<img src='". $img ."' height=400px>";
      	echo "<div class='name'>" . $item . "</div>";
        echo "<p>Add to cart: $10.00 </p>";
        echo "</button>";
    }
?>