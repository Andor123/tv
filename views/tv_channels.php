<?php
if (isset($_GET['status']) && $_GET['status'] == 'success') {
    echo 'Sikerült a TV csatorna mentése az adatbázisba.';
}
if (isset($_GET['state']) && $_GET['state'] == 'error') {
    echo 'Írd be az adatokat a megfelelő mezőkbe.';
}

include_once 'header.php';
include_once 'navigation.php';
?>
<section>
    <div id="dialog">
        <span>Biztos, hogy menteni akarod ezt a TV csatornát az adatbázisba?</span>
    </div>
    <div class="subtitle">
        <h2>TV csatornák felvétele</h2>
    </div>
    <div class="form">
        <form method="post" action="" id="tv_channels" name="tv_channels">
            <label for="channel_name">Csatorna neve:</label><br /><br />
            <input type="text" name="channel_name" id="channel_name" /><br /><br />
            <label for="year_of_launch">Indulás éve:</label><br /><br />
            <input type="text" name="year_of_launch" id="year_of_launch"><br /><br />
        </form>
        <button type="button" id="submit" form="tv_channels" onclick="submitChannel()">Küldés</button>
    </div>
</section>
<?php
include_once 'footer.php';
?>