<form method='POST' action='/assignments/p_add'>
<?php if(isset($success)): ?>
        <div class='success'>
            Successfully added!
        </div>
        <br>
    <?php endif; ?>

    Course Code<br>
    <input type='text' name='course'>
    <br><br>

    Assignment/Project Number<br>
    <input type='text' name='assign'>
    <br><br>

    Topic<br>
    <input type='text' name='topic'>
    <br><br>

    Requirements<br>
    <input type='textarea' name='req'>
    <br><br>
    Handed Out<br>
    <input type='datetime' name='handout' id='handout'>
     <br>(Please enter in YYYY-MM-DD HH:MM:SS format.)<br>
    Deadline <br>
    <input type='datetime' name='deadline' id='deadline'>
     <br>(Please enter in YYYY-MM-DD HH:MM:SS format.)<br>
     Status<br>
     <select name="status">
 	 <option value="Pending">Pending</option>
  	<option value="Completed">Completed</option></select><br>
	
    <input type='submit' value='Add Assignment' class="btn btn-primary btn-lg">

</form>