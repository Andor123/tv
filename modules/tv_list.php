<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $sql = "SELECT image, channel_name, year_of_launch FROM tv_channels ORDER BY year_of_launch ASC";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    $html = '';
    $html .= '<table border="1" align="center">';
    $html .= '<thead>';
    $html .= '<tr>';
    $html .= '<th>Kép</th>';
    $html .= '<th>Csatorna neve</th>';
    $html .= '<th>Indulás éve</th>';
    $html .= '</tr>';
    $html .= '</thead>';
    $html .= '<tbody>';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $html .= '<tr>';
            $html .= '<td><img src="images/' . $row['image'] . '" alt="image" /></td>';
            $html .= '<td>' . $row['channel_name'] . '</td>';
            $html .= '<td>' . $row['year_of_launch'] . '</td>';
            $html .= '</tr>';
        }
    }
    $html .= '</tbody>';
    $html .= '</table>';
    $html .= '<div class="form">';
    $html .= '<button type="button" id="submit" form="tv_list" onclick="hideTable()">Tábla becsukása</button>';
    $html .= '</div>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 2) {
    $html = '';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}
include_once 'views/tv_list.php';
?>