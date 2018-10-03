<?php   
$id = 'index';
$title = 'Беломорье — иллюстрированная карта';
require $_SERVER['DOCUMENT_ROOT'] . '/includes/vars.php';
require $docroot . 'includes/top.php';
?>

<div class="fixed" style="left:1rem; top:0rem; z-index:1; width:100%;">
    
    <div class="absolute" style="left:1rem; top:3rem;">
        <p><a href="/content/interactive/">Интерактивная карта</a></p>
    </div>
    
    <div class="absolute transparent" style="left:1rem; top:1rem;">
        <h1>Belomorie map</h1>
    </div>
    
</div>

<article class="illustrated scroll">

    <div class="map" style="height:2000px; width:2000px;">
        <div class="absolute" style="top:5rem; left:6rem;">
            <img src="/img/map-1.png" srcset="/img/map-1@2x.png 2x" alt="">
        </div>

        <div class="absolute" style="top:19rem; left:16rem;">
            <img src="/img/map-2.png" srcset="/img/map-2@2x.png 2x" alt="">
        </div>

        <div class="absolute" style="top:10rem; left:36rem;">
            <img src="/img/map-3.png" srcset="/img/map-3@2x.png 2x" alt="">
        </div>

        <div class="absolute" style="top:40rem; left:56rem;">
            <img src="/img/map-4.png" srcset="/img/map-4@2x.png 2x" alt="">
        </div>

        <div class="absolute" style="top:25rem; left:85rem;">
            <img src="/img/map-5.png" srcset="/img/map-5@2x.png 2x" alt="">
        </div>

        <div class="absolute wind" style="top:11rem; left:66rem;">
            <img src="/img/map-tree-1.png" srcset="/img/map-tree-1.png 2x" alt="">
        </div>

        <div class="absolute wind altrev" style="top:9rem; left:70rem;">
            <img src="/img/map-tree-2.png" srcset="/img/map-tree-2.png 2x" alt="">
        </div>

        <div class="absolute wind" style="top:11rem; left:74rem;">
            <img src="/img/map-tree-3.png" srcset="/img/map-tree-3.png 2x" alt="">
        </div>

        <div class="absolute place" style="top:75rem; left:45rem;">
            <img src="/img/map-3.png" srcset="/img/map-3@2x.png 2x" alt="">

            <div class="absolute" style="top:-4rem; left:14rem;">
                <a href="http://www.yandex.ru"><h1>The blue island</h1></a>
            </div>
        </div>
    </div>

</article>

<?php
require $docroot . 'includes/bottom.php';
?>
