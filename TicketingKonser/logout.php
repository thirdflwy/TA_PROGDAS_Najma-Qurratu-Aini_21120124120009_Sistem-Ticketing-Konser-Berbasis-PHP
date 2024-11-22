<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        .alert {
        padding: 15px;
        margin: 20px 0;
        border: 1px solid transparent;
        border-radius: 4px;
        }

        .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
        }
    </style>
</head>
<body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        <?php
        session_start(); // Memulai session
        session_unset(); // Menghapus semua variabel session
        session_destroy(); // Menghancurkan session

        // Redirect ke halaman login atau halaman utama setelah logout
        header("Location: login.php?logout=success");
        exit();
        ?>
        
        window.onload = function() {
        <?php if (isset($_GET['logout']) && $_GET['logout'] == 'success'): ?>
            swal("Logout Berhasil!", "Anda telah berhasil keluar dari akun.", "success");
        <?php endif; ?>
        }; 
</script>
</body>
</html>