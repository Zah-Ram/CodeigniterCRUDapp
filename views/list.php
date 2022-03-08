<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
</head>
<title> 
View Users
</title>
<body>
<div class="navbar navbar-dark bg-dark">
<div class="container">

<a href="#" class="navbar-brand">CRUD APPLICATION<a>
</div>
</div>

<div class="container" style="padding-top: 10px;">

<div class="row">
<div class="col-md-12">
<?php
$success = $this->session->userdata('success');
if($success != ""){

?>
<div class="alert alert-success"><?php echo $success; ?> </div>
<?php
}
?>

<?php
$faliure = $this->session->userdata('faliure');
if($faliure != ""){

?>
<div class="alert alert-success"><?php echo $faliure; ?> </div>
<?php
}
?>
</div>
</div>



<div class="row">
 <div class="col-md-8">
 </div>
  <div class="row">
   <div class="col-6"> <h3>View Users</h3> </div>
    <div class="col-6">
     <a href="<?php echo base_url().'index.php/user/create'; ?>" class="btn btn-primary">Create</a>
    </div>
<hr>
</div>
</div>



<hr>

<div class="row">
<div class="col-md-8">
<table class="table table-striped">
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th width="100">Edit</th>
<th width="100">Delete</th>

</tr>
<?php if(!empty($users)) { foreach ($users as $user) { ?>
<tr>
<td><?php echo $user['user_id']; ?></td>
<td><?php echo $user['name']; ?></td>
<td><?php echo $user['email']; ?></td>
<td><a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']; ?>" class="btn btn-primary">Edit</a></td>
<td><a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']; ?>" class="btn btn-danger">Delete</a></td>

</tr>

<?php } } else { ?>
<tr>
<td colspan="5">Records not found</td>
</tr>
<?php } ?>
</table>
</div>
</div>
</div>


</body>
</html>