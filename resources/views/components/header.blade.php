<header class="fixed top-0 left-0 right-0 z-50">
    @include('components.language-selector')

    <!-- Main Navigation -->
    <nav class="bg-gradient-to-b from-white to-white/0 py-6">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center space-x-8">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/img1.png') }}" alt="Helios Logo" class="h-12">
                </a>
                <img src="{{ asset('images/img2.png') }}" alt="Sangfor Logo" class="h-12">
            </div>
        </div>
    </nav>
</header>

<nav class="bg-white py-16">
    <div class="container mx-auto px-6 flex justify-between items-center space-x-8">
        <div class="flex items-center space-x-8"></div>
    </div>
</nav>