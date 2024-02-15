<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js">
</head>
<body>

<form class="row g-3" method="POST" action="">
  <div class="col-md-6">
    <label for="email" class="form-label"  name="email">Email</label>
    <input type="email" class="form-control" id="email" name="email">
    <?php echo form_error('email'); ?>
  </div>

  <div class="col-md-6">
    <label for="password" class="form-label" name="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
    <?php echo form_error('password'); ?>
  </div>
  <div class="col-12">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" placeholder="enter your name" name="name">
    <?php echo form_error('name'); ?>
  </div>
  <div class="col-12">
    <label for="age" class="form-label">Age</label>
    <input type="text" class="form-control" id="age" placeholder="Age" name="age">
    <?php echo form_error('age','<div class="text-danger">','</div>'); ?>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>

    </form>
</body>
</html>