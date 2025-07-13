<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Service Requests')</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            margin: 40px;
            background: #f5f7fa;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #e2e8f0;
        }
        th {
            background: #edf2f7;
            text-align: left;
        }
        h1, h2 {
            color: #2d3748;
        }
        a.button, button {
            display: inline-block;
            background: #3182ce;
            color: white;
            padding: 6px 12px;
            border-radius: 4px;
            text-decoration: none;
            border: none;
            margin: 4px 4px 4px 0;
            cursor: pointer;
        }
        a.button:hover, button:hover {
            background: #2b6cb0;
        }
        .success {
            background: #e6fffa;
            color: #2c7a7b;
            padding: 10px;
            border: 1px solid #b2f5ea;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        input, textarea, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #cbd5e0;
            border-radius: 4px;
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>@yield('title')</h1>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        @yield('content')
    </div>
</body>
</html>
