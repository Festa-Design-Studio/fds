<!DOCTYPE html>
<html>
<head>
    <title>Livewire Rating Test</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Test Page for Article Rating</h1>
    <hr>
    <div style="padding: 20px; border: 1px solid #eee; margin: 20px;">
        @livewire('blog.rate-article', ['articleId' => 1])
    </div>
    <hr>
    <div style="padding: 20px; border: 1px solid #eee; margin: 20px;">
        @livewire('test-livewire')
    </div>

    @livewireScripts
</body>
</html> 