<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
	</style>
</head>
<body>
<h2>Create Brand</h2>


<div class="container">
  <?=form_open_multipart('Brand/Create')?> 
    <div class="row">
      <div class="col-25">
        <label for="fname">Brand Title</label>
      </div>
      <div class="col-75">
        <input type="text" value="" id="fname" name="brand_title" placeholder="Brand title..">
		<?=form_error('brand_title')?>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Brand Link</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" value="" name="brand_link" placeholder="Brand link">
		<?=form_error('brand_link')?>

      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Brand Description</label>
      </div>
      <div class="col-75">
	  <input type="text" id="lname" value="" name="brand_dec" placeholder="brand Description">
		<?=form_error('brand_dec')?>
       
      </div>
    </div>

    <div class="row">
      <button type="submit">Done</button>
    </div>
  <?=form_close()?>
</div>

</body>
</html>
