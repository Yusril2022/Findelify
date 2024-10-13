<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
        /* body {
            background-image: url('https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        } */
        .typewriter {
            font-family: monospace;
            white-space: nowrap;
            overflow: hidden;
            transition: opacity 0.5s ease;
        }

    
    </style>

    <title>Auth</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <?= $this->renderSection('content'); ?>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

    <script>
        const text = "Welcome Back!";
        const speed = 80; // Kecepatan dalam milidetik
        const pause = 1500; // Waktu jeda sebelum mulai lagi
        const element = document.querySelector('.typewriter');
        
        function type() {
            let index = 0;

            function typingEffect() {
                if (index < text.length) {
                    element.innerHTML += text.charAt(index);
                    index++;
                    setTimeout(typingEffect, speed);
                } else {
                    // Jeda sebelum mulai mengetik ulang
                    setTimeout(() => {
                        element.style.opacity = '0'; // Memudarkan teks
                        setTimeout(() => {
                            element.innerHTML = ""; // Kosongkan teks
                            element.style.opacity = '1'; // Kembalikan opacity
                            type(); // Mulai mengetik lagi
                        }, 500); // Waktu setelah memudarkan sebelum mengosongkan
                    }, pause);
                }
            }

            element.innerHTML = ""; // Kosongkan teks sebelum mulai mengetik
            typingEffect(); // Mulai efek mengetik
        }

        type(); 
    
    </script>

</body>

</html>