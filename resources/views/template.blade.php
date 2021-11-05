<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie</title>
    <link rel="stylesheet" href="assets/styles/style.css">
    @yield('list')
    {{-- $detail ?? "" --}}
</head>
<body>
    <header>
        <section>
            <nav>
                <h2>Rizki Foodie</h2>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Menu</a></li>
                    <li><a href="">Detail Menu</a></li>
                </ul>
            </nav>
            {{-- $slot --}}
            @yield('content')
        </section>
    </header>
    <main>
    </main>
    <aside></aside>
    <footer>
        <section>
            <div class="text-logo">
                <h2>Rizki </br>Foodie</h2>
            </div>
            <div class="teks-menu">
                <h2>Available For</h2>
                <ul>
                    <li><a href="">Nasi Goreng</a></li>
                    <li><a href="">Mie Goreng</a></li>
                    <li><a href="">Es</a></li>
                    <li><a href="">Nasi Bakar</a></li>
                </ul>
            </div>
            <div class="create">Muhamad Rizki - Foodie V1</div>
        </section>
    </footer>
</body>
</html>