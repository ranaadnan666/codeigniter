<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


</head>
<body>

<h2>List Of Brand</h2>

<div class="container">
 <div style="text-align:right;padding:10px"> <a href="<?= base_url('index.php/Brand/index') ?>"><button>Add Record</button></a></div>
<table>
<tr>
  <th>ID</th>
  <th>Brand Title</th>
  <th>Brand Link</th>
  <th>Brand Dedcription</th>
  <th>Action</th>
</tr>  
<?php foreach ($user as $row) : ?>
  <form method="post" action="<?=base_url('index.php/Brand/Edit/' . $row->id)?>">
  <!-- <input type="hidden" id="userId" value="<?= $row->Id ?>"> -->

               <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->brand_title; ?></td>
                <td><?php echo $row->brand_link; ?></td>
                <td><?php echo $row->brand_dec; ?></td>
                <td><button type="submit">Edit</button> 
                <a href="<?= base_url('index.php/Brand/Delete/' . $row->id) ?>"  onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                
                <!-- (<?php echo $row->Id; ?>) -->
              </td>
               </tr>
               <?=form_close()?>
  </form>
               <?php endforeach; ?>
   
</table>
</div>

  
    
</script>
</body>
</html>
