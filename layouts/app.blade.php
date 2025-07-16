<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kas Harian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        body.dark-mode {
            background-color: #121212;
            color: white;
        }

        .dark-mode .table {
            color: white;
        }

        .toggle-dark {
            cursor: pointer;
            float: right;
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            0% {opacity: 0;}
            100% {opacity: 1;}
        }
    </style>
</head>
<body class="fade-in">
    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Sistem Pencatatan Kas Harian</h2>
            <i class="fas fa-moon toggle-dark" title="Toggle Dark Mode" onclick="toggleDark()"></i>
        </div>

        @yield('content')
    </div>

    <script>
        function toggleDark() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>
</html>
