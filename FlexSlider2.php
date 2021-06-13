<div id="slider">
    <?php
        $t = date("H");
$x=1;
$y=6;
$s=1;
        if ($x <= 1) {
         echo '<input type="radio" name="slider" id="slide1" checked>';
         $x++;
        }
        while ($x <= $y){
            echo '<input type="radio" name="slider" id="slide'.$x.'">';

         $x++;  /* La valeur affichée est $i avant l'incrémentation
                               (post-incrémentation)  */
                               $s=1;

                               
        }
        
        ?>

    <div id="slides">
        <div id="overflow">
            <div class="inner">
                <?php


                while ($s<=$y){
                ?>
                <div class="slide slide_<?=$s ?>">
                    <div class="slide_content">
                        <div class="slide_content__image">
                            <img src="image1.jpg" alt="test" width="300" height="400" />
                        </div>
                        <div class="slide_content__text">
                            <h2>Lorem Ipsum <?=$s ?></h2>
                            <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry's standard dummy text ever since the 1500s,</p>
                        </div>
                    </div>
                </div>
                <?php 
   $s=$s+1;
     }

?>

            </div>
        </div>
    </div>
    <div id="controls">
        <?php


 $i=1;
 while ($i<=$y){
 ?>
        <label for="slide<?= $i?>"></label>

        <?php 
$i=$i+1;
 }

?>
        <!-- 
        <label for="slide1"></label>
        <label for="slide2"></label>
        <label for="slide3"></label>
        <label for="slide4"></label> -->
    </div>
    <!-- <div id="bullets">
           <label for="slide1"></label>
           <label for="slide2"></label>
           <label for="slide3"></label>
           <label for="slide4"></label>
        </div> -->
</div>

<style>
.slide_content {
    display: flex;
}

.slide_content__image {
    flex: 1;
}

.slide_content__text {
    margin: 0 20px;
    flex: 2;
}

.slide_content__text h2 {
    color: black;
    line-height: initial;

}

.slide_content__text p {
    color: black;
    line-height: initial;

}

#slider {
    margin: 0 auto;
    width: 800px;
    max-width: 100%;
    /* text-align: center; */
}

#slider input[type=radio] {
    display: none;
}

#slider label {
    cursor: pointer;
    text-decoration: none;
}

#slides {

    position: relative;
    z-index: 1;
    margin-top: 42px;
    margin-bottom: 42px;
}

#overflow {
    width: 100%;
    overflow: hidden;
}

#slide1:checked~#slides .inner {
    margin-left: 0;
}

#slide2:checked~#slides .inner {
    margin-left: -100%;
}

#slide3:checked~#slides .inner {
    margin-left: -200%;
}

#slide4:checked~#slides .inner {
    margin-left: -300%;
}

#slides .inner {
    transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
    width: 400%;
    line-height: 0;

    height: 400px;
}

#slides .slide {
    width: 25%;
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    color: #fff;
}


#controls {
    margin: -180px 0 0 0;
    width: 100%;
    height: 50px;
    z-index: 3;
    position: relative;
}

#controls label {
    transition: opacity 0.2s ease-out;
    display: none;
    width: 50px;
    height: 50px;
    opacity: .4;
}

#controls label:hover {
    opacity: 1;
}

#slide1:checked~#controls label:nth-child(2),
#slide2:checked~#controls label:nth-child(3),
#slide3:checked~#controls label:nth-child(4),
#slide4:checked~#controls label:nth-child(1) {
    background: url(https://image.flaticon.com/icons/svg/130/130884.svg) no-repeat;
    float: right;
    margin: 0 -50px 0 0;
    display: block;
    width: 22px;
    height: 22px;
}

#slide1:checked~#controls label:nth-last-child(2),
#slide2:checked~#controls label:nth-last-child(3),
#slide3:checked~#controls label:nth-last-child(4),
#slide4:checked~#controls label:nth-last-child(1) {
    background: url(https://image.flaticon.com/icons/svg/130/130882.svg) no-repeat;
    float: left;
    margin: 0 0 0 -50px;
    display: block;
    width: 22px;
    height: 22px;
}

#bullets {
    margin: 150px 0 0;
    text-align: center;
}

#bullets label {
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 100%;
    background: #ccc;
    margin: 0 10px;
}

#slide1:checked~#bullets label:nth-child(1),
#slide2:checked~#bullets label:nth-child(2),
#slide3:checked~#bullets label:nth-child(3),
#slide4:checked~#bullets label:nth-child(4) {
    background: #444;
}
<? 
if ($s>=4 and $s<=$y){
    ?>
    #slide5:checked~#slides .inner {
        margin-left: -400%;
    }
    #slides .slide {
    width: 20%;
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
    color: #fff;
}
    #slides .inner {
    transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000, 1.770);
    width: 500%;
    line-height: 0;

    height: 400px;
}
    <?
}
?>

@media screen and (max-width: 900px) {

    #slide1:checked~#controls label:nth-child(2),
    #slide2:checked~#controls label:nth-child(3),
    #slide3:checked~#controls label:nth-child(4),
    #slide4:checked~#controls label:nth-child(1),
    #slide1:checked~#controls label:nth-last-child(2),
    #slide2:checked~#controls label:nth-last-child(3),
    #slide3:checked~#controls label:nth-last-child(4),
    #slide4:checked~#controls label:nth-last-child(1) {
        margin: 0;
    }

    #slides {
        max-width: calc(100% - 140px);
        margin: 42px auto;
    }
}

@media only screen and (max-width: 600px) {
    .slide_content {
        display: block;
    }

    #slides .slide {
        height: auto;

    }
}
</style>
</body>

</html>