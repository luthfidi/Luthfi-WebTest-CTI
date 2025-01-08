<div class="bg-[#1E3A8A] text-white py-2">
    <div class="container mx-auto px-6 flex justify-end items-center">
        <div class="lang-selector">
            <a href="{{ route('language.switch', 'id') }}" class="{{ app()->getLocale() == 'id' ? 'active' : '' }}">ID</a>
            <span class="lang-divider">|</span>
            <a href="{{ route('language.switch', 'en') }}" class="{{ app()->getLocale() == 'en' ? 'active' : '' }}">EN</a>
        </div>
    </div>
</div>