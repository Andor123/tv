<?php
if (isset($_GET['status']) && $_GET['status'] == 'success') {
    echo 'Sikerült a TV csatorna frissítése az adatbázisban.';
}
if (isset($_GET['state']) && $_GET['state'] == 'error') {
    echo 'Írd be az adatokat a megfelelő mezőkbe.';
}

include_once 'header.php';
include_once 'navigation.php';
?>
    <section>
        <div id="dialog">
            <span>Biztos, hogy frissíteni akarod a TV csatorna adatait az adatbázisban?</span>
        </div>
        <div class="subtitle">
            <h2>TV csatornák frissítése</h2>
        </div>
        <div class="form">
            <form method="post" action="" id="tv_update" name="tv_update">
                <label for="channel_name">Csatorna neve:</label><br /><br />
                <select name="channel_name" id="channel_name">
                    <option value=""></option>
                    <?php
                    $sql = "SELECT channel_name FROM tv_channels";
                    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<option value="' . $row['channel_name'] . '">' . $row['channel_name'] . '</option>';
                        }
                    }
                    ?>
                </select><br /><br />
                <label for="image">Kép:</label><br /><br />
                <input type="text" name="image" id="image"><br /><br />
            </form>
            <button type="button" id="submit" form="tv_update" onclick="submitChannel2()">Küldés</button>
        </div>
    </section>
<?php
include_once 'footer.php';
?>