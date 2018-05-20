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
$path = __DIR__ . '/phonebook.json';
$json = file_get_contents($path);
$phonebook = json_decode($json, true);

echo '<table cellpadding="0" cellspacing="0">';
echo '<thead>';
echo '<th>Имя</th>';
echo '<th>Фамилия</th>';
echo '<th>Адрес</th>';
echo '<th>Телефонный номер</th>';
echo '</thead>';
echo '<tbody>';

foreach ($phonebook as $item) {
    echo '<tr>';
        echo '<td>' . $item['firstName'] . '</td>';
        echo '<td>' . $item['lastName'] . '</td>';
        echo '<td>' . $item['address'] . '</td>';
        echo '<td>' . $item['phoneNumber'] . '</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';