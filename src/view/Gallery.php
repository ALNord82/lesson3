<div>Gallery</div>
<table>
    <tr>
        <th>First</th>
        <th>Second</th>
        <th>Third</th>
    </tr>
    <?php foreach ($data as $row) : ?>
    <tr>
        <td><?= $row['year'] ?></td>
        <td><?= $row['site'] ?></td>
        <td><?= $row['description'] ?></td>
            </tr>
    <?php endforeach; ?>
</table>