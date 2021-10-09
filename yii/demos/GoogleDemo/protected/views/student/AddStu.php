
<form method="post" action="<?php echo Yii::app()-> createUrl('student/Create') ?>">
    <!-- <label for="id">stt: </label>
    <input type='number' id='id' name='stt'></br> -->

    <label for="fname">Full Name: </label>
    <input type='text' id='fname' name='name'></br>

    <label for="db">Date of Birth: </label>
    <input type='date' id='db' name='DOB'></br>

    <label for="class">Class: </label>
    <input type='text' id='class' name='class'></br>

    <button type='submit'>save</button>
</form>
<a href='?r=student/show'>Back</a>