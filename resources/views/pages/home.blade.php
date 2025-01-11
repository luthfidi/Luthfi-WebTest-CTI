@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Hero Section -->
<section class="hero-section flex items-center py-8 md:py-16 lg:py-24">
    <div class="container mx-auto px-4 md:px-8 lg:px-32">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 md:mb-6 leading-tight">
                Cybersecurity Made Simple 
                <br>
                with Sangfor Cyber Command
            </h1>
            <p class="text-white font-medium text-lg md:text-xl mb-8 md:mb-12 leading-relaxed max-w-2xl">
                Simplify your cybersecurity with Sangfor Cyber <br>Command's user-friendly interface and <br>comprehensive threat protection.
            </p>
            <a href="{{ route('thank-you') }}">
                <button class="green-button text-white px-6 md:px-10 py-3 md:py-4 rounded-lg font-medium text-base md:text-lg transition duration-300 inline-flex items-center">
                    FREE TRIAL
                    <svg class="w-5 h-5 md:w-6 md:h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </button>
            </a>
        </div>
    </div>
</section>


    <!-- About Section -->
    <section class="about-section py-20 px-2">
        <div class="container mx-auto px-4 sm:px-6 lg:px-32 max-w-7xl">
            <!-- Alert Messages -->
            <div class="mb-4">
                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                            <button type="button" class="ml-4" onclick="this.parentElement.parentElement.remove();">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Main Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16">
                <!-- About Content -->
                <div class="px-6 lg:px-0 order-2 lg:order-1">
                    <h2 class="text-3xl lg:text-4xl font-bold text-blue-900 mt-8 lg:mt-24 mb-6">
                        {{ __('About Sangfor Cyber Command') }}
                    </h2>
                    <p class="text-gray-600 mb-4 text-base lg:text-lg">
                        Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive security management platform designed to protect businesses from cyber threats.
                    </p>
                    <p class="text-gray-600 mb-4 text-base lg:text-lg">
                        It provides a range of security solutions such as threat detection, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.
                    </p>
                    <p class="text-gray-600 mb-4 text-base lg:text-lg">
                        The platform uses advanced machine learning algorithms and big data analytics to identify and prevent cyber-attacks before they cause damage. It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided.
                    </p>
                    <p class="text-gray-600 text-base lg:text-lg">
                        Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets from modern-day threats.
                    </p>
                </div>

                <!-- Form Section -->
                <div class="order-1 lg:order-2">
                    <div class="bg-white p-4 lg:p-7 rounded-lg shadow-lg">
                        <h3 class="text-xl lg:text-2xl font-bold text-blue-900 mb-2">
                            Dapatkan Free Trial selama 1 bulan,
                        </h3>
                        <p class="text-gray-600 font-bold mb-6">
                            analisa keamanan network anda dan lihat hasilnya!
                        </p>
                        <form action="{{ route('trial.submit') }}" method="POST">
                            @csrf
                            <!-- Name Fields -->
                            <div class="grid grid-cols-2 gap-3 mb-1.5">
                                <div>
                                    <label class="text-sm font-medium text-gray-600">First Name <span class="text-red-500">*</span></label>
                                    <input type="text" name="first_name" placeholder="First Name"
                                        class="placeholder:text-sm w-full p-1.5 border rounded mt-1 @error('first_name') border-red-500 @enderror"
                                        value="{{ old('first_name') }}" required>
                                    @error('first_name')
                                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-gray-600">Last Name <span class="text-red-500">*</span></label>
                                    <input type="text" name="last_name" placeholder="Last Name"
                                        class="placeholder:text-sm w-full p-1.5 border rounded mt-1 @error('last_name') border-red-500 @enderror"
                                        value="{{ old('last_name') }}" required>
                                    @error('last_name')
                                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Other Form Fields -->
                            <div class="space-y-4">
                                <div>
                                    <label class="text-sm font-medium text-gray-600">Corporate Email <span class="text-red-500">*</span></label>
                                    <input type="email" name="email" placeholder="email@mail.com"
                                        class="placeholder:text-sm w-full p-1.5 border rounded mt-1 @error('email') border-red-500 @enderror"
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label class="text-sm font-medium text-gray-600">Job Title <span class="text-red-500">*</span></label>
                                    <input type="text" name="job_title" placeholder="Your job"
                                        class="placeholder:text-sm w-full p-1.5 border rounded mt-1 @error('job_title') border-red-500 @enderror"
                                        value="{{ old('job_title') }}" required>
                                    @error('job_title')
                                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label class="text-sm font-medium text-gray-600">Company Name <span class="text-red-500">*</span></label>
                                    <input type="text" name="company_name" placeholder="Your company"
                                        class="placeholder:text-sm w-full p-1.5 border rounded mt-1 @error('company_name') border-red-500 @enderror"
                                        value="{{ old('company_name') }}" required>
                                    @error('company_name')
                                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label class="text-sm font-medium text-gray-600">Industry <span class="text-red-500">*</span></label>
                                    <select name="industry"
                                        class="placeholder:text-sm w-full p-1.5 border rounded mt-1 text-gray-400 @error('industry') border-red-500 @enderror" required>
                                        <option value="">Select Industry</option>
                                        <option value="IT" {{ old('industry') == 'IT' ? 'selected' : '' }}>IT</option>
                                        <option value="Finance" {{ old('industry') == 'Finance' ? 'selected' : '' }}>Finance</option>
                                    </select>
                                    @error('industry')
                                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label class="text-sm font-medium text-gray-600">Phone Number <span class="text-red-500">*</span></label>
                                    <input type="tel" name="phone" placeholder="Your number"
                                        class="placeholder:text-sm w-full p-1.5 border rounded mt-1 @error('phone') border-red-500 @enderror"
                                        value="{{ old('phone') }}" required>
                                    @error('phone')
                                        <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Agreement Checkbox -->
                            <div class="flex items-start mt-6 mb-6">
                                <input type="checkbox" name="agreement"
                                    class="custom-checkbox mr-3 mt-1 @error('agreement') border-red-500 @enderror"
                                    {{ old('agreement') ? 'checked' : '' }} required>
                                <p class="text-sm font-medium text-gray-600 ml-2">
                                    Click this box to agree to be contacted by our team and get great deals on Sangfor for Helios!
                                </p>
                                @error('agreement')
                                    <span class="text-red-500 text-xs mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                class="bg-green-500 hover:bg-green-600 text-white w-full py-3 rounded font-medium text-base lg:text-lg transition duration-300">
                                SEND
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages Section -->
    <section class="advantages-section py-20 px-2">
        <div class="container mx-auto px-4 sm:px-6 lg:px-28 max-w-[1400px]">
            <h2 class="text-3xl lg:text-4xl font-bold text-center text-white mb-8 lg:mb-12">
                {{ __('Sangfor Cyber Command Advantages') }}
            </h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 xl:gap-8 max-w-5xl mx-auto">
                <!-- Advanced Threat Detection -->
                <div class="bg-white p-6 lg:p-8 rounded-lg shadow-lg text-center h-full flex flex-col">
                    <img
                        src="{{ asset('images/img3.png') }}"
                        alt="Advanced Threat Detection"
                        class="w-32 h-32 lg:w-[150px] lg:h-[150px] object-contain mx-auto mb-6"
                    />
                    <h3 class="text-lg lg:text-xl font-bold text-blue-900 mb-3 lg:mb-4">
                        Advanced Threat Detection
                    </h3>
                    <p class="text-gray-600 text-sm lg:text-base flex-grow">
                        Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.
                    </p>
                </div>

                <!-- Network Visibility and Control -->
                <div class="bg-white p-6 lg:p-8 rounded-lg shadow-lg text-center h-full flex flex-col">
                    <img
                        src="{{ asset('images/img4.png') }}"
                        alt="Network Visibility"
                        class="w-32 h-32 lg:w-[150px] lg:h-[150px] object-contain mx-auto mb-6"
                    />
                    <h3 class="text-lg lg:text-xl font-bold text-blue-900 mb-3 lg:mb-4">
                        Network Visibility and Control
                    </h3>
                    <p class="text-gray-600 text-sm lg:text-base flex-grow">
                        Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.
                    </p>
                </div>

                <!-- Cloud Security -->
                <div class="bg-white p-6 lg:p-8 rounded-lg shadow-lg text-center h-full flex flex-col">
                    <img
                        src="{{ asset('images/img5.png') }}"
                        alt="Cloud Security"
                        class="w-32 h-32 lg:w-[150px] lg:h-[150px] object-contain mx-auto mb-6"
                    />
                    <h3 class="text-lg lg:text-xl font-bold text-blue-900 mb-3 lg:mb-4">
                        Cloud Security
                    </h3>
                    <p class="text-gray-600 text-sm lg:text-base flex-grow">
                        Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud-specific threats like data breaches, account hijacking, and insider threats.
                    </p>
                </div>

                <!-- Comprehensive Security Management -->
                <div class="bg-white p-6 lg:p-8 rounded-lg shadow-lg text-center h-full flex flex-col">
                    <img
                        src="{{ asset('images/img6.png') }}"
                        alt="Comprehensive Security Management"
                        class="w-32 h-32 lg:w-[150px] lg:h-[150px] object-contain mx-auto mb-6"
                    />
                    <h3 class="text-lg lg:text-xl font-bold text-blue-900 mb-3 lg:mb-4">
                        Comprehensive Security Management
                    </h3>
                    <p class="text-gray-600 text-sm lg:text-base flex-grow">
                        Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.
                    </p>
                </div>
            </div>
        </div>
    </section>

<!-- Features Section -->
<section class="features-section py-16">
    <div class="container mx-auto px-4 md:px-6 lg:px-24">
        <h2 class="text-3xl lg:text-4xl font-bold text-center text-[#1E3A8A] mb-8 lg:mb-16">
            {{ __('Sangfor Cyber Command Features') }}
        </h2>

        <!-- First Row: 3 items -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
            <div class="feature-wrapper text-center">
                <img
                    src="{{ asset('images/img7.png') }}"
                    alt="Threat Intelligence"
                    class="feature-icon mx-auto mb-6"
                    width="150"
                />
                <h3 class="text-xl font-bold text-[#1E3A8A] mb-4">
                    Threat Intelligence
                </h3>
                <p class="text-gray-600">
                    Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.
                </p>
            </div>

            <div class="feature-wrapper text-center">
                <img
                    src="{{ asset('images/img8.png') }}"
                    alt="Real-Time Detections"
                    class="feature-icon mx-auto mb-6"
                    width="150"
                />
                <h3 class="text-xl font-bold text-[#1E3A8A] mb-4">
                    Real-Time Detections
                </h3>
                <p class="text-gray-600">
                    Real-time alert system provides instant notification of potential security incidents.
                </p>
            </div>

            <div class="feature-wrapper text-center">
                <img
                    src="{{ asset('images/img9.png') }}"
                    alt="Threats Investigation"
                    class="feature-icon mx-auto mb-6"
                    width="150"
                />
                <h3 class="text-xl font-bold text-[#1E3A8A] mb-4">
                    Threats Investigation
                </h3>
                <p class="text-gray-600">
                    In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.
                </p>
            </div>
        </div>

        <!-- Second Row: 2 items -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 justify-start max-w-[650px]">
            <div class="feature-wrapper text-center">
                <img
                    src="{{ asset('images/img10.png') }}"
                    alt="Comprehensive Security Solutions"
                    class="feature-icon mx-auto mt-8 mb-6"
                    width="150"
                />
                <h3 class="text-xl font-bold text-[#1E3A8A] mb-4">
                    Comprehensive Security Solutions
                </h3>
                <p class="text-gray-600">
                    In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.
                </p>
            </div>
            
            <div class="feature-wrapper text-center">
                <img
                    src="{{ asset('images/img11.png') }}"
                    alt="Rapid Response"
                    class="feature-icon mx-auto mt-8 mb-6"
                    width="150"
                />
                <h3 class="text-xl font-bold text-[#1E3A8A] mb-4">
                    Rapid Response
                </h3>
                <p class="text-gray-600">
                    Tight integration with network and endpoint security solutions enables quick response to potential security incidents, minimizing the impact of any attacks.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Customers Reference Section -->
<section class="customers-section pb-12">
    <div class="container mx-auto px-6">
        <div class="text-center">
            <div class="title-bar inline-block mb-16">
                <h2 class="text-3xl font-bold text-white">
                    {{ __('Cyber Command Customers Reference') }}
                </h2>
            </div>
        </div>
        <div class="flex flex-wrap justify-center gap-12 lg:gap-24">
            <!-- J&T -->
            <div>
                <img 
                    src="{{ asset('images/img12.png') }}" 
                    alt="J&T" 
                    class="customer-logo" 
                />
            </div>

            <!-- Jasa Raharja Putera -->
            <div>
                <img
                    src="{{ asset('images/img13.png') }}"
                    alt="Jasa Raharja Putera Insurance"
                    class="customer-logo"
                />
            </div>

            <!-- OK! BANK -->
            <div>
                <img
                    src="{{ asset('images/img14.png') }}"
                    alt="OK! BANK Indonesia"
                    class="customer-logo"
                />
            </div>

            <!-- SAMUDERA INDONESIA -->
            <div>
                <img
                    src="{{ asset('images/img15.png') }}"
                    alt="SAMUDERA INDONESIA"
                    class="customer-logo"
                />
            </div>
        </div>
    </div>
</section>

<!-- Explore Section -->
<section class="explore-section py-10">
    <div class="container mx-auto px-4 md:px-6">
        <div class="text-center mb-8 md:mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-[#1E3A8A] mb-3 md:mb-4">
                Explore Sangfor Cyber Command with Helios
            </h2>
            <p class="text-gray-600 text-sm md:text-base">
                Helios Informatika Nusantara as Sangfor Distributor will provide
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
            <!-- NDR Implementation -->
            <div class="explore-card">
                <div class="explore-icon w-16 h-16 md:w-24 md:h-24">
                    <img src="{{ asset('images/img16.png') }}" alt="NDR Implementation" 
                        class="w-8 h-8 md:w-12 md:h-12" />
                </div>
                <h3 class="text-lg md:text-xl font-bold text-[#1E3A8A]">
                    NDR Implementation
                </h3>
            </div>

            <!-- Incident Response -->
            <div class="explore-card">
                <div class="explore-icon w-16 h-16 md:w-24 md:h-24">
                    <img src="{{ asset('images/img17.png') }}" alt="Incident Response" 
                        class="w-8 h-8 md:w-12 md:h-12" />
                </div>
                <h3 class="text-lg md:text-xl font-bold text-[#1E3A8A]">
                    Incident Response<br />and Threat Hunting
                </h3>
            </div>

            <!-- Device Security -->
            <div class="explore-card">
                <div class="explore-icon w-16 h-16 md:w-24 md:h-24">
                    <img src="{{ asset('images/img18.png') }}" alt="Device Security" 
                        class="w-8 h-8 md:w-12 md:h-12" />
                </div>
                <h3 class="text-lg md:text-xl font-bold text-[#1E3A8A]">
                    Device Security<br />Maintenance
                </h3>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Add any JavaScript needed for the home page
</script>
@endpush