
<table>
    <tr>
        <td>Ten</td>
        <td>dia chi</td>
    </tr>
    <tr>
        <?php foreach($ds as $bv): ?>
            <tr>
                <td><?php echo $bv -> ten ?></td>
                <td><?php echo $bv -> diachi ?></td>
            </tr>
        <?php endforeach; ?>
    </tr>
</table>