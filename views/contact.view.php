<?php include('views/partial/_header.php'); ?>



<?php include('views/partial/_nav.php'); ?>

<main class="container">
<div class="my-3 p-3 bg-body rounded shadow-sm">

<form method="post" action="/names">
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Task Title</label>
<input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Task Title">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<?php include('views/partial/_footer.php'); ?>
