<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bintara</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/heroicons@2.0.18/outline/index.js"></script>
</head>
<body class="bg-gray-100">
@include('front.partials.header')
<div class="container mx-auto px-30 py-6">
@yield('content')
</div>
@include('front.partials.footer')

</body>
</html>