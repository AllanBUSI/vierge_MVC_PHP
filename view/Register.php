<div class="container mt-5">
    <?php 
    if(isset($_GET['error'])) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Erreur de connexion!</strong> '.$_GET['error']. '</div>';
    }
    ?>
    <div class="card bg-danger">
        <form class="row" action="/dashboard.php" method="post">
            <div class="col-md-6">
                <label for="inputFirstname" class="col-sm-2 p-1 col-form-label">Firstname</label>
                <div class="col-sm-12 p-1">
                    <input required name="firstname" placeholder="firstname" type="text" class="form-control" id="inputFirstname">
                </div>
            </div>
            <div class="col-md-6">
                <label for="inputLastname" class="col-sm-2 p-1 col-form-label">Lastname</label>
                <div class="col-sm-12 p-1">
                    <input required name="lastname" placeholder="lastname"  type="text" class="form-control" id="inputLastname">
                </div>
            </div>
            <div class="col-md-12">
                <label for="Email" class="col-sm-2 p-1 col-form-label">Email</label>
                <div class="col-sm-12 p-1">
                    <input required name="email" placeholder="email" type="email" class="form-control" id="Email">
                </div>
            </div>
            <div class="col-md-12">
                <label for="inputPassword" class="col-sm-2 p-1 col-form-label">Password</label>
                <div class="col-sm-12 p-1">
                    <input required name="password" placeholder="password" type="password" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="col-md-12">
                <label for="inputPassword" class="col-sm-2 p-1 col-form-label">Password</label>
                <div class="col-sm-12 p-1">
                    <input required name="confirm_password" placeholder="password" type="password" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-sm-12 p-1">
                    <input type="submit" value="Valider" class="form-control" id="inputSubmit">
                </div>
            </div>
        </form>
    </div>
</div>