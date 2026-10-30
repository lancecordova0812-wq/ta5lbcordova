<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Laravel POS Foundations' }}</title>
    <style>
        :root { --navy:#5b111b; --blue:#9b1c31; --light:#fff7f8; --ink:#2b2022; --muted:#765d62; }
        * { box-sizing:border-box; } body { margin:0; font-family:Arial,sans-serif; color:var(--ink); background:var(--light); }
        nav { background:var(--navy); padding:16px max(20px,calc((100% - 1100px)/2)); display:flex; align-items:center; gap:22px; flex-wrap:wrap; }
        nav .brand { color:#fff; font-weight:700; margin-right:auto; text-decoration:none; } nav a { color:#ffe3e7; text-decoration:none; }
        main { max-width:1100px; margin:0 auto; padding:52px 20px; } h1 { font-size:clamp(2rem,4vw,3.2rem); margin:0 0 14px; color:var(--navy); } p { line-height:1.65; }
        .lead { font-size:1.15rem; color:var(--muted); max-width:720px; } .hero,.card { background:#fff; border-radius:14px; padding:32px; box-shadow:0 8px 24px #5b111b14; }
        .buttons { display:flex; gap:12px; flex-wrap:wrap; margin-top:26px; } .button { display:inline-block; background:var(--blue); color:#fff; padding:12px 18px; border-radius:8px; text-decoration:none; font-weight:700; } .button.secondary { background:#f7e6e9; color:var(--navy); }
        .table-wrap { overflow-x:auto; background:#fff; border-radius:12px; box-shadow:0 8px 24px #5b111b14; } table { border-collapse:collapse; width:100%; min-width:620px; } th,td { padding:16px 18px; text-align:left; border-bottom:1px solid #ead9dc; } th { background:#fbecef; color:var(--navy); } tr:last-child td { border-bottom:0; }
        .tag { display:inline-block; background:#f4e3e6; color:#7b1e2b; padding:5px 10px; border-radius:99px; font-size:.85rem; } footer { text-align:center; padding:28px 20px; color:var(--muted); font-size:.9rem; }
    </style>
</head>
<body>
<nav><a class="brand" href="{{ url('/') }}">Laravel POS Foundations</a><a href="{{ url('/') }}">Home</a><a href="{{ url('/about') }}">About</a><a href="{{ url('/customers') }}">Customers</a><a href="{{ url('/users') }}">Users</a></nav>
<main>@yield('content')</main><footer>IT0049 Web System Technologies &middot; TFA5</footer>
</body>
</html>
