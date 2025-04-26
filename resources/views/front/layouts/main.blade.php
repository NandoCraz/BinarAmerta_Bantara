<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bintara</title>
    <link rel="icon" type="image/png" href="{{ asset('../css/image/logo.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://unpkg.com/heroicons@2.0.18/outline/index.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    @yield('head')
</head>
<body class="bg-gray-100 ">
@include('front.partials.header')
<div class="container mx-auto px-30 py-6">
@yield('content')
</div>

@include('front.partials.footer')
@yield('script')
<script src="https://unpkg.com/flowbite@1.8.1/dist/flowbite.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>


<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    const channelUrl = "{{ $channelUrl ?? 'default_channel_url' }}";
</script>
</body>
</html>
