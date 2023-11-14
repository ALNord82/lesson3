<div>Home Gallery</div>
<table>
    <th>currency_id</th>
    <th>title</th>
    <th>code</th>
    <th>symbol_left</th>
    <th>symbol_right</th>
    <th>decimal_place</th>
    <th>value</th>
    <th>status</th>
    <th>date_modified</th>
    <?php //print_r($data) ?>
    <?php foreach ($data as $row) : ?>
    <?php foreach ($row as $value) : ?>
            <tr>
            <?php foreach ($value as $item) : ?>
                <td><?= $item ?> </td>
                <?php endforeach;?>
                <td><a href='/gallery/update?id=<?=$value['currency_id'] ?>'>update</a></td>
                <td><a href='/gallery/delete?id=<?=$value['currency_id'] ?>'>delete</a></td>
        </tr>
    <?php endforeach; ?>
    <?php endforeach; ?>
</table>