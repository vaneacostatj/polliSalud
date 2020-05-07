<?php include_once('layouts/header.php'); ?>

<div class="container">
    <form action="form.php" method="post">
    <div class="form-group">
        <label for="User">Email address</label>
        <input type="email" class="form-control" id="User" name="User" aria-describedby="emailHelp" placeholder="Enter email" required>       
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?php include_once('layouts/footer.php'); ?>