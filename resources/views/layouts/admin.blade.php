<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin — London Aviation Museum')</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/grid.css') }}" rel="stylesheet">
</head>
<body @yield('body-id') data-page="@yield('data-page')">

    @yield('content')

</body>
</html> --> 
<!-- I commented out cause the admin page was not styled and when you open it, its a flashbang to eyes -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin — London Aviation Museum')</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/grid.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #1a1c1a;
            color: #e8e0d0;
            min-height: 100vh;
            font-family: 'Baskervville', serif;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 2rem;
            background-color: #0C0E0C;
            border-bottom: 1px solid #A08B63;
            margin-bottom: 2rem;
        }

        .page-header a {
            color: #A08B63;
            font-size: 0.85rem;
            opacity: 0.8;
        }

        .page-header h1 {
            color: #e8e0d0;
            margin: 0.25rem 0 0;
        }

        #login-container {
            background-color: #1a1c1a;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-form {
            background-color: #0C0E0C;
            border: 1px solid #A08B63;
            padding: 2.5rem;
            border-radius: 4px;
            max-width: 420px;
            width: 100%;
        }

        .login-form h2 {
            color: #A08B63;
            margin-bottom: 1.5rem;
        }

        .error-message {
            background-color: rgba(180, 60, 60, 0.2);
            border: 1px solid #b43c3c;
            color: #f08080;
            padding: 0.75rem 1rem;
            border-radius: 4px;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .input-group {
            margin-bottom: 1rem;
        }

        .input-group input {
            width: 100%;
            padding: 0.75rem 1rem;
            background-color: #1a1c1a;
            border: 1px solid #3a3c3a;
            color: #e8e0d0;
            border-radius: 4px;
            font-size: 1rem;
        }

        .input-group input:focus {
            outline: none;
            border-color: #A08B63;
        }

        .login-btn {
            width: 100%;
            padding: 0.85rem;
            background-color: #A08B63;
            color: #0C0E0C;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            font-weight: bold;
            margin-top: 0.5rem;
        }

        .login-btn:hover {
            background-color: #c4a87a;
        }

        #dashboard {
            padding: 2rem;
        }

        .dash-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #A08B63;
        }

        .dash-header h1 {
            color: #A08B63;
            margin: 0;
        }

        .admin-info {
            color: #a0a09a;
            margin-bottom: 2rem;
        }

        .admin-info .username {
            color: #A08B63;
        }

        .dash-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem;
        }

        .dash-card {
            background-color: #0C0E0C;
            border: 1px solid #2a2c2a;
            border-radius: 6px;
            padding: 2rem 1.5rem;
            color: #e8e0d0;
            transition: border-color 0.2s;
            display: block;
        }

        .dash-card:hover {
            border-color: #A08B63;
        }

        .dash-card h2 {
            color: #A08B63;
            margin: 1rem 0 0.5rem;
            font-size: 1.1rem;
        }

        .dash-card p {
            color: #a0a09a;
            font-size: 0.9rem;
            margin: 0;
        }

        .dash-icon svg {
            width: 36px;
            height: 36px;
        }

        .logout-btn {
            color: #A08B63;
            opacity: 0.7;
            transition: opacity 0.2s;
        }

        .logout-btn:hover {
            opacity: 1;
        }

        .logout-btn .admin-icon {
            width: 24px;
            height: 24px;
            fill: #A08B63;
        }
    </style>
</head>
<body @yield('body-id') data-page="@yield('data-page')">

    @yield('content')

</body>
</html>