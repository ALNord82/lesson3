<div>SQL</div>
<table>
    <tr>

    </tr>
    <?php var_dump($data);?>
    <?php foreach ($data as $row) : ?>
        <tr>
            <td><?php echo '<pre>'; print_r($row); echo '</pre>'; ?></td>

        </tr>
    <?php endforeach; ?>
</table>