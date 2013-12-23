 <p>You can review your assignments and projects here. You can also add new projects and assignments <a href="/assignments/add">here</a>.
<br>
Click on the headers of the table to arrange them in either ascending or descending order. This is helpful for listing assignments according to their deadlines.
    
<table class="tablesorter" id="assign_table">
<thead>
<tr>
<th>Course Code</th>
<th>Assignment/Project Number</th>
<th>Topic</th>
<th>Requirements</th>
<th>Handed Out On</th>
<th>Submission Deadline</th>
<th>Status</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<?php foreach($posts as $post): ?>

<article>
<tr>
<td><?=$post['course']?></td>
<td><?=$post['assign']?></td>
<td><?=$post['topic']?></td>
<td><?=$post['req']?></td>
<td><?=$post['handout']?></td>
<td><?=$post['deadline']?></td>
<td><?=$post['status']?></td>
<td><a href='/assignments/delete/<?=$post['assign_id']?>'>Delete</a>
<?php $b =$post['status'];
$remaining = '">Mark Done!</a>';
if (strpos($b,'Pending') !== false) {
    echo ' &nbsp; | &nbsp;<a href="/assignments/done/'.$post['assign_id'].$remaining;
}?>
</tr>
</article>

<?php endforeach; ?>
</tbody>
</table>