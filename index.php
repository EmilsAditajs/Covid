<?php
/**
 * Created by PhpStorm.
 * User: 37129
 * Date: 09/02/2022
 * Time: 22:55
 */

$covid = json_decode(file_get_contents('https://data.gov.lv/dati/lv/api/3/action/datastore_search?resource_id=d499d2f0-b1ea-4ba2-9600-2c701b03bd4a&limit=5'));
$table = [];
foreach ($covid as $index => $item) {
    $table[$index] = $item;
}
echo "<pre>"; var_dump($covid);
?>


<table border="dotted">
    <thead>
    <th>
        Datums
    </th>
    <th>
        Testu skaits
    </th>
    <th>
        Apstiprinata infekcija
    </th>
    </thead>
    <?php foreach ($table['result']->records as $v) { ?>
        <tr>
            <td>
                <?php echo $v->Datums;

                ?>
            </td>
            <td>
                <?php
                echo $v->TestuSkaits;
                ?>
            </td>
            <td>
                <?php
                echo $v->ApstiprinataCOVID19InfekcijaSkaits;
                ?>
            </td>
        </tr>
    <?php } ?>
</table>
