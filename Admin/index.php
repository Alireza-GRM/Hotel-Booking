<?php
    require('Inc/essentials.php');
    require('Inc/db_config.php');

    session_start();
    if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true))
    {
        redirect('dashboard.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>Admin Login Panel</title>
    <link rel="stylesheet" href="Css/style.css">
    <style>
        div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50% , -50%);
            width: 400px;
        }
    </style>
</head>
<body class="bg-light" dir="rtl">

    <div class="login-form text-center bg-white rounded-3 shadow overflow-hidden border-madrak">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">ورود به پنل مدیریت</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_name" required type="text" class="form-control shadow-none text-center" style="font-size: 14px;" placeholder="نام مدیریت">
                </div>
                <div class="mb-4">
                    <input name="admin_pass" required type="password" class="form-control shadow-none text-center" style="font-size: 14px;" placeholder="رمز عبور">
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none btn-login">ورود</button>
            </div>
        </form>
    </div>

    <?php
    if(isset($_POST['login']))
    {
        $frm_data = filteration($_POST);
        $query = "SELECT * FROM admin_cred WHERE admin_name=? AND admin_pass=?";
        $values = [$frm_data['admin_name'],$frm_data['admin_pass']];

        $res = select($query,$values,"ss");
        if($res->num_rows == 1)
        {
            $row = mysqli_fetch_assoc($res);
            $_SESSION['adminLogin'] = true;
            $_SESSION['adminId'] = $row['id'];
            redirect('dashboard.php');
        }
        else
        {
            alert('error' , 'ورود ناموفق - لطفا نام کاربری یا رمزعبور را درست وارد کنید.');
        }
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>