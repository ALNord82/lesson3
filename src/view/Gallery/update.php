<div>Update Gallery</div>
<form method="post">
    <?php
    foreach ($data as $row) :
    foreach ($row as $value) :
    $tmp=array_shift($row);
    endforeach;
    endforeach;
    ?>
    <table>
        <tr style="display: none">
            <td>currency_id</td>
            <td><input type="hidden" name="currency_id"></td>
        </tr>
        <tr>
            <td>title</td>
            <td><input type="text" name="title" value="<?=$tmp['title'] ?>"></td>
        </tr>
        <tr>
            <td>code</td>
            <td><input type="text" name="code" value="<?=$tmp['code'] ?>"></td>
        </tr>
        <tr>
            <td>symbol_left</td>
            <td><input type="text" name="symbol_left" value="<?=$tmp['symbol_left'] ?>"></td>
        </tr>
        <tr>
            <td>symbol_right</td>
            <td><input type="text" name="symbol_right" value="<?=$tmp['symbol_right'] ?>"</td>
        </tr>
        <tr>
            <td>decimal_place</td>
            <td><input type="text" name="decimal_place" value="<?=$tmp['decimal_place'] ?>"</td>
        </tr>
        <tr>
            <td>value</td>
            <td><input type="text" name="value" value="<?=$tmp['value'] ?>"</td>
        </tr>
        <tr>
            <td>status</td>
            <td><input type="text" name="status" value="<?=$tmp['status'] ?>"</td>
        </tr>
        <tr>
            <td>date_modified</td>
            <td><input type="text" name="date_modified" value="<?=$tmp['date_modified'] ?>"</td>
        </tr>

    </table>
    <button type="submit">Create</button>
</form>