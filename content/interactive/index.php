<?php   
$id = 'index';
$title = 'Беломорье — интерактивная карта';
require $_SERVER['DOCUMENT_ROOT'] . '/includes/vars.php';
require $docroot . 'includes/top.php';
?>

<div class="fixed" style="left:1rem; top:0rem; z-index:1; width:100%;">
    
    <div class="absolute" style="left:1rem; top:3rem;">
        <p><a href="/">Иллюстрированная карта</a></p>
    </div>
    
    <div class="absolute transparent" style="left:1rem; top:1rem;">
        <h1>Belomorie map</h1>
    </div>
    
</div>

<article class="maphub">

    <iframe width="100%" height="100%" src="https://maphub.net/embed/35980?panel=1" frameborder="0"></iframe>

</article>

<?php
require $docroot . 'includes/bottom.php';
?>
