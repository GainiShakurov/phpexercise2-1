<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        font-weight: bold;
    }

    td, th {
        border: 1px solid;
    }

</style>

<?php
$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . 'phonebook.json';
$json = file_get_contents($url);
$obj = json_decode($json, true);

echo '<table cellpadding="0" cellspacing="0">';
echo '<thead>';
echo '<th>Имя</th>';
echo '<th>Фамилия</th>';
echo '<th>Адрес</th>';
echo '<th>Телефонный номер</th>';
echo '</thead>';
echo '<tbody>';

foreach ($obj as $item) {
    echo '<tr>';
    foreach ($item as $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';