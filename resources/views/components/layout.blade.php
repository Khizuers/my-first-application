<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Layout Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }
        header {
            background: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        nav {
            background: #444;
            padding: 10px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            background: white;
            margin: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 5px rgba(0,0,0,0.1);
        }
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Website Layout</h1>
    </header>

    <nav>
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
    </nav>

    <main>
        <h2>{{ $heading }}</h2>
        {{ $slot }}
    </main>

    <footer>
        &copy; {{ date('Y') }} My Website. All rights reserved.
    </footer>
</body>
</html>
