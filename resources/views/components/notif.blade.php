<div id="toast-container" class="fixed top-24 right-4 z-[9999] mt-24">
    <!-- Success Toast -->
    @if (session('success'))
    <div id="success-toast" class="transform translate-x-full transition-all duration-300">
        <div class="bg-green-500 text-white rounded-lg shadow-lg p-4 flex items-center gap-3 max-w-sm">
            <!-- Success Icon -->
            <svg class="h-5 w-5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
            </svg>
            
            <!-- Message -->
            <p class="text-sm">{{ session('success') }}</p>
            
            <!-- Close Button -->
            <button onclick="closeToast('success-toast')" class="shrink-0 hover:text-white/80">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"/>
                </svg>
            </button>
        </div>
    </div>
    @endif

    <!-- Error Toast -->
    @if (session('error'))
    <div id="error-toast" class="transform translate-x-full transition-all duration-300">
        <div class="bg-green-500 text-white rounded-lg shadow-lg p-4 flex items-center gap-3 max-w-sm">
            <!-- Info Icon -->
            <svg class="h-5 w-5 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v5a1 1 0 102 0V7zm0 8a1 1 0 10-2 0 1 1 0 102 0z"/>
            </svg>
            
            <!-- Message -->
            <p class="text-sm">{{ session('error') }}</p>
            
            <!-- Close Button -->
            <button onclick="closeToast('error-toast')" class="shrink-0 hover:text-white/80">
                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"/>
                </svg>
            </button>
        </div>
    </div>
    @endif
</div>