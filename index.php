<?php   
$id = 'index';
$title = 'map';
require $_SERVER['DOCUMENT_ROOT'] . '/includes/vars.php';
require $docroot . 'includes/top.php';
?>

<div class="absolute rotates" style="left:3rem; top:3rem; width: 1rem; height: 4rem; background-color:blue;">
</div>

<article class="illustrated">
    
    <div class="drag" style="height:2rem; width:2rem; background-color:black; top:2rem; left:2rem;"></div>

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

        <div class="absolute rotates" style="left:10rem; top:10rem; width: 1rem; height: 4rem; background-color:red;">
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

        <div class="absolute wind" style="top:9rem; left:70rem;">
            <img src="/img/map-tree-2.png" srcset="/img/map-tree-2.png 2x" alt="">
        </div>

        <div class="absolute wind" style="top:11rem; left:74rem;">
            <img src="/img/map-tree-3.png" srcset="/img/map-tree-3.png 2x" alt="">
        </div>

        <div class="absolute place" style="top:75rem; left:45rem;">
            <img src="/img/map-3.png" srcset="/img/map-3@2x.png 2x" alt="">

            <div class="absolute" style="top:-4rem; left:14rem;">
                <a href="http://www.yandex.ru">
                    <h2>Активная точка</h2>
                </a>
            </div>
        </div>
    </div>

</article>

<?php
require $docroot . 'includes/bottom.php';
?>
