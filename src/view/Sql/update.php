<div>Update SQL</div>
<form method="post">
    <?php
    foreach ($data as $row) :
        foreach ($row as $value) :
            echo '<pre>';
       // print_r($row);
        echo '</pre>';
            $tmp=array_shift($row);
    endforeach;
    endforeach;
    ?>
    <table>
        <tr style="display: none">
            <td>banner_id</td>
            <td><input type="hidden" name="banner_id"></td>
        </tr>
        <tr>
            <td>title</td>
            <td><input type="text" name="name" value="<?=$tmp['name'] ?>"></td>
        </tr>
        <tr>
            <td>code</td>
            <td><input type="text" name="status" value="<?=$tmp['status'] ?>"></td>
        </tr>

    </table>
    <button type="submit">Create</button>
</form>