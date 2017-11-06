<?php
include_once 'header.php';
include_once 'navigation.php';
?>
<section>
    <div class="subtitle">
        <h2>TV csatornák listája</h2>
    </div>
    <div class="form">
        <form method="post" action="" id="tv_list" name="tv_list"></form>
        <button type="button" id="submit" form="tv_list" onclick="showTable()">Tábla kiíratása</button>
    </div>
    <div id="table"></div>
</section>
<?php
include_once 'footer.php';
?>
