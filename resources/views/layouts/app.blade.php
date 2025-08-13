<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'LinkTree')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            min-height: 100vh;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        
        .top-bar {
            background-color: white;
            height: 40px;
            margin: -20px -20px 0 -20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .home-text {
            color: #374151;
            font-size: 16px;
            font-weight: 500;
        }
        
        .menu-dots {
            display: flex;
            gap: 4px;
        }
        
        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: white;
        }
        
        .header {
            background-color: #87ceeb;
            height: 60px;
            margin: 0 -20px 20px -20px;
            display: flex;
            align-items: center;
            padding: 0 20px;
        }
        
        .header-text {
            color: white;
            font-size: 16px;
            font-weight: 500;
        }
        
        .profile-section {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #d1d5db;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            color: #6b7280;
        }
        
        .username {
            font-size: 24px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 10px;
        }
        
        .description {
            font-size: 14px;
            color: #6b7280;
            line-height: 1.5;
            margin-bottom: 30px;
        }
        
        .link-button {
            display: block;
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
            background-color: #87ceeb;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        
        .link-button:hover {
            background-color: #6bb6d6;
            color: white;
            text-decoration: none;
        }
        
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
            font-size: 20px;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .social-icon:hover {
            color: #374151;
        }
        
        .footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            text-align: center;
        }
        
        .footer-text {
            font-size: 12px;
            color: #9ca3af;
            margin-bottom: 10px;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 15px;
        }
        
        .footer-link {
            font-size: 12px;
            color: #6b7280;
            text-decoration: none;
        }
        
        .footer-link:hover {
            color: #374151;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>