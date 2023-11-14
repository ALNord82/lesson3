<div>Home SQL</div>
<table>
    <?php echo '<pre>'; //print_r($data); echo '</pre>'; ?>
    <th>banner_id</th>
    <th>name</th>
    <th>status</th>
     <?php //print_r($data) ?>
    <?php foreach ($data as $row) : ?>
        <?php foreach ($row as $value) : ?>
            <tr>
                <?php foreach ($value as $item) : ?>
                    <td><?= $item ?> </td>
                <?php endforeach;?>
                <td><a href='/Sql/update?id=<?=$value['banner_id'] ?>'>update</a></td>
                <td><a href='/Sql/delete?id=<?=$value['banner_id'] ?>'>delete</a></td>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
</table>