<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livewire Debug</title>
    @livewireStyles
</head>
<body>
    <h1>Livewire Debug Page</h1>
    
    <div>
        @livewire('test-livewire')
    </div>

    <script>
        console.log('Checking Livewire object:', window.Livewire ? 'Exists' : 'Missing');
    </script>
    
    @livewireScripts
</body>
</html> 