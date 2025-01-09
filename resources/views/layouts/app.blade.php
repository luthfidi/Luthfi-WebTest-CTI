<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Sangfor Cyber Command</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.header')
    @include('components.notif')
    
    <main>
        @yield('content')
    </main>
    
    @include('components.footer')

    @stack('scripts')
    <script>
    function showToast(id) {
        const toast = document.getElementById(id);
        if (toast) {
            // Reset position
            toast.classList.remove('translate-x-full');
            toast.classList.add('translate-x-0');
            
            // Auto hide after 5 seconds
            setTimeout(() => {
                closeToast(id);
            }, 5000);
        }
    }

    function closeToast(id) {
        const toast = document.getElementById(id);
        if (toast) {
            toast.classList.remove('translate-x-0');
            toast.classList.add('translate-x-full');
            
            // Remove from DOM after animation
            setTimeout(() => {
                toast.remove();
            }, 300);
        }
    }

    // Show toasts on page load
    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById('success-toast')) {
            showToast('success-toast');
        }
        if (document.getElementById('error-toast')) {
            showToast('error-toast');
        }
    });
</script>
</body>
</html>