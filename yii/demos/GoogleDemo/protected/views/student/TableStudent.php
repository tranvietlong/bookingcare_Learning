<strong><a href="?r=student/login">add student</a></strong>
<table>
    <tr>
        <th>stt</th>
        <th>Full Nam</th>
        <th>Date of Birth</th>
        <th>Class</th>
    </tr>
    <tr>
        <td>0</td>
        <td>Johannes</td>
        <td>16/09/2000</td>
        <td>ICE</td>
    </tr>  
    <?php foreach($data as $st): ?>
    <tr>
            <td><?php echo $st -> id ?></td>
            <td><?php echo $st -> name ?></td>
            <td><?php echo $st -> DateOfBirth ?></td>
            <td><?php echo $st -> class?></td>

            <td><a href="<?php echo Yii::app()-> createUrl('student/UpdateStu&id='.$st['id'].'')?>">Update</a></td>
            <td><a href="<?php echo Yii::app() -> createUrl('student/delete&id='.$st['id'].'')?>" onclick="return confirm('You sure?');">Delete</a></td>

    </tr> 
    <?php endforeach; ?>
</table>
