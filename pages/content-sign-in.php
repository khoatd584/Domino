<?php
if(isset($_POST['signin_submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($query);
    $checkEmail = mysqli_num_rows($query);
    var_dump($checkEmail);
    if($checkEmail == 1) {
        $checkPass = password_verify($password, $data['password']);
       if($checkPass) {
        //luu vao session
        $_SESSION['user'] = $data;
        header('location: index.php');
       } else {
        echo "Sai mat khau";
       }
    } else {
        echo "Email khong ton tai";
    }
}
?>
<div class="account-content">
    <form method="POST" class="account-form-sign-in" action=''>
        <div class="form-item">
            <label class="form-label" for="email">Email address</label>
            <div class="form-control">
                <input name="email" type="email" class="form-input" id="email" placeholder=dangkhoa@example.com required>
            </div>
        </div>
        <div class="form-item">
            <label class="form-label" for="pass">Password</label>
            <div class="form-control">
                <input name="password" type="password" class="form-input" id="pass" required>
            </div>
        </div>
        <button name="signin_submit" class="btn" type="submit">Sign in</button>
    </form>

</div>
</div>
</div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
<script nomodule src="https://unkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
</body>

</html>