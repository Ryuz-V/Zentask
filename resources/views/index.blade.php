<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/style.css" rel="stylesheet">
  @vite('resources/css/app.css')
  <title>Zentask</title>
<link rel="icon" type="image/png" href="{{ asset('images/Logo.png') }}">
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-roboto bg-gradient-to-br from-gray-50 to-blue-50 min-h-screen">
      <div class="bg-circle"></div>
  {{-- Navbar --}}
  <header class="px-4 sm:px-6 lg:px-8 py-4">
    <nav class="liquid-glass mx-auto max-w-6xl px-6 py-4 rounded-2xl relative">
      {{-- Efek cahaya di belakang navbar --}}
      <div class="relative flex justify-between items-center">
        {{-- Logo dan Brand --}}
        <div class="flex items-center space-x-3">
          <div class="logo-float">
            <img src="{{ asset('images/logo.png') }}" alt="Zentask Logo" class="w-10 h-10 mb-1 translate-x-3">
          </div>
        </div>

        {{-- Menu Navigasi (Desktop) --}}
        <div class="hidden md:flex items-center space-x-8 flex-1 ml-10">
          <a href="#" class="nav-item text-gray-700 font-medium hover:text-indigo-600 transition duration-300">Home</a>

          {{-- Solutions Dropdown --}}
          <div class="relative group">
            <button class="nav-item text-gray-700 font-medium hover:text-indigo-600 transition duration-300 flex items-center gap-1 py-2">
              Solutions
              <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>

            {{-- Dropdown Menu Solutions --}}
            <div class="absolute left-0 mt-2 w-[800px] bg-white rounded-xl shadow-2xl border border-gray-100 p-6 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:animate-fadeIn transition-all duration-300 z-50">
              <div class="grid grid-cols-2 gap-8">
                {{-- Kolom 1 --}}
                <div>
                  <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <div class="w-2 h-6 bg-indigo-600 rounded"></div>
                    Task Management
                  </h3>
                  <ul class="space-y-4">
                    <li>
                      <a href="#" class="flex items-start gap-3 p-3 rounded-lg hover:bg-indigo-50 transition duration-200">
                        <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center flex-shrink-0">
                          <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                          </svg>
                        </div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Project Boards</h4>
                          <p class="text-sm text-gray-600 mt-1">Visual task management with Kanban boards</p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="flex items-start gap-3 p-3 rounded-lg hover:bg-indigo-50 transition duration-200">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                          <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                          </svg>
                        </div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Time Tracking</h4>
                          <p class="text-sm text-gray-600 mt-1">Monitor time spent on tasks and projects</p>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>

                {{-- Kolom 2 --}}
                <div>
                  <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <div class="w-2 h-6 bg-green-600 rounded"></div>
                    Team Collaboration
                  </h3>
                  <ul class="space-y-4">
                    <li>
                      <a href="#" class="flex items-start gap-3 p-3 rounded-lg hover:bg-green-50 transition duration-200">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                          <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                          </svg>
                        </div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Team Chat</h4>
                          <p class="text-sm text-gray-600 mt-1">Real-time communication for teams</p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="flex items-start gap-3 p-3 rounded-lg hover:bg-green-50 transition duration-200">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                          <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                          </svg>
                        </div>
                        <div>
                          <h4 class="font-semibold text-gray-900">Approval Workflows</h4>
                          <p class="text-sm text-gray-600 mt-1">Streamline approval processes</p>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              {{-- CTA Footer --}}
              <div class="mt-8 pt-6 border-t border-gray-200">
                <a href="#" class="flex items-center justify-between p-4 bg-gradient-to-r from-indigo-50 to-blue-50 rounded-lg hover:from-indigo-100 hover:to-blue-100 transition duration-300">
                  <div>
                    <h4 class="font-bold text-gray-900">See all solutions</h4>
                    <p class="text-sm text-gray-600 mt-1">Explore our complete suite of tools</p>
                  </div>
                  <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                  </svg>
                </a>
              </div>
            </div>
          </div>

          {{-- Resources Dropdown --}}
          <div class="relative group">
            <button class="nav-item text-gray-700 font-medium hover:text-indigo-600 transition duration-300 flex items-center gap-1 py-2">
              Resources
              <svg class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>

            {{-- Dropdown Menu Resources --}}
            <div class="absolute left-0 mt-2 w-[800px] bg-white rounded-xl shadow-2xl border border-gray-100 p-6 opacity-0 invisible group-hover:opacity-100 group-hover:visible group-hover:animate-fadeIn transition-all duration-300 z-50">
              <div class="grid grid-cols-3 gap-8">
                {{-- Kolom 1: Learning --}}
                <div>
                  <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <div class="w-2 h-6 bg-orange-600 rounded"></div>
                    Learning Center
                  </h3>
                  <ul class="space-y-3">
                    <li><a href="#" class="block p-3 rounded-lg hover:bg-orange-50 transition duration-200 font-medium text-gray-800">Documentation</a></li>
                    <li><a href="#" class="block p-3 rounded-lg hover:bg-orange-50 transition duration-200 font-medium text-gray-800">Tutorials</a></li>
                    <li><a href="#" class="block p-3 rounded-lg hover:bg-orange-50 transition duration-200 font-medium text-gray-800">Video Guides</a></li>
                    <li><a href="#" class="block p-3 rounded-lg hover:bg-orange-50 transition duration-200 font-medium text-gray-800">API Reference</a></li>
                  </ul>
                </div>

                {{-- Kolom 2: Community --}}
                <div>
                  <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <div class="w-2 h-6 bg-blue-600 rounded"></div>
                    Community
                  </h3>
                  <ul class="space-y-3">
                    <li><a href="#" class="block p-3 rounded-lg hover:bg-blue-50 transition duration-200 font-medium text-gray-800">Blog & Articles</a></li>
                    <li><a href="#" class="block p-3 rounded-lg hover:bg-blue-50 transition duration-200 font-medium text-gray-800">Webinars</a></li>
                    <li><a href="#" class="block p-3 rounded-lg hover:bg-blue-50 transition duration-200 font-medium text-gray-800">Case Studies</a></li>
                    <li><a href="#" class="block p-3 rounded-lg hover:bg-blue-50 transition duration-200 font-medium text-gray-800">User Forum</a></li>
                  </ul>
                </div>

                {{-- Kolom 3: Development --}}
                <div>
                  <h3 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <div class="w-2 h-6 bg-purple-600 rounded"></div>
                    Developers
                  </h3>
                  <ul class="space-y-3">
                    <li><a href="#" class="block p-3 rounded-lg hover:bg-purple-50 transition duration-200 font-medium text-gray-800">SDKs & Libraries</a></li>
                    <li><a href="#" class="block p-3 rounded-lg hover:bg-purple-50 transition duration-200 font-medium text-gray-800">Integrations</a></li>
                    <li><a href="#" class="block p-3 rounded-lg hover:bg-purple-50 transition duration-200 font-medium text-gray-800">App Marketplace</a></li>
                    <li><a href="#" class="block p-3 rounded-lg hover:bg-purple-50 transition duration-200 font-medium text-gray-800">Developer Portal</a></li>
                  </ul>
                </div>
              </div>

              {{-- Resources Highlight --}}
              <div class="mt-8 grid grid-cols-2 gap-6">
                <a href="#" class="col-span-2 bg-gradient-to-r from-gray-900 to-gray-800 rounded-xl p-6 text-white hover:from-gray-800 hover:to-gray-700 transition duration-300">
                  <div class="flex items-center justify-between">
                    <div>
                      <h4 class="font-bold text-lg">Enterprise Whitepaper</h4>
                      <p class="text-gray-300 mt-2">Learn how top companies use Zentask to boost productivity by 40%</p>
                    </div>
                    <div class="bg-white text-gray-900 px-4 py-2 rounded-lg font-bold">
                      Download
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <a href="#" class="nav-item text-gray-700 font-medium hover:text-indigo-600 transition duration-300">Pricing</a>
        </div>

        {{-- Bagian Kanan (User & CTA) --}}
        <div class="flex items-center space-x-4">
          {{-- CTA Button --}}
                   <a href="#" class="hidden lg:flex items-center border border-gray-800 text-gray-700 font-medium hover:text-indigo-600 hover:border-indigo-600 transition duration-300 px-5 py-2.5 rounded-full text-sm">
        Contact Sales
         </a>
          <button class="cta-button text-white font-medium px-5 py-2.5 rounded-full text-sm">
            Sign Up
          </button>
        </div>

        {{-- Mobile Menu Button --}}
        <button id="mobile-menu-button" class="md:hidden text-gray-700 hover:text-indigo-600 focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>

      {{-- Mobile Menu (Hidden by default) --}}
      <div id="mobile-menu" class="hidden md:hidden mt-4 pt-4 border-t border-gray-200 border-opacity-30">
        <div class="flex flex-col space-y-4">
          <a href="#" class="nav-item text-gray-700 font-medium hover:text-indigo-600 transition duration-300 py-2">Home</a>

          {{-- Mobile Solutions --}}
          <div class="space-y-2">
            <button class="flex items-center justify-between w-full nav-item text-gray-700 font-medium hover:text-indigo-600 transition duration-300 py-2">
              Solutions
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="pl-4 space-y-2 hidden" id="mobile-solutions">
              <a href="#" class="block py-2 text-gray-600 hover:text-indigo-600">Project Boards</a>
              <a href="#" class="block py-2 text-gray-600 hover:text-indigo-600">Time Tracking</a>
              <a href="#" class="block py-2 text-gray-600 hover:text-indigo-600">Team Chat</a>
              <a href="#" class="block py-2 text-gray-600 hover:text-indigo-600">Approval Workflows</a>
            </div>
          </div>

          {{-- Mobile Resources --}}
          <div class="space-y-2">
            <button class="flex items-center justify-between w-full nav-item text-gray-700 font-medium hover:text-indigo-600 transition duration-300 py-2">
              Resources
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </button>
            <div class="pl-4 space-y-2 hidden" id="mobile-resources">
              <a href="#" class="block py-2 text-gray-600 hover:text-indigo-600">Documentation</a>
              <a href="#" class="block py-2 text-gray-600 hover:text-indigo-600">Tutorials</a>
              <a href="#" class="block py-2 text-gray-600 hover:text-indigo-600">Blog</a>
              <a href="#" class="block py-2 text-gray-600 hover:text-indigo-600">Webinars</a>
            </div>
          </div>

          <a href="#" class="nav-item text-gray-700 font-medium hover:text-indigo-600 transition duration-300 py-2">Pricing</a>
          <a href="#" class="nav-item text-gray-700 font-medium hover:text-indigo-600 transition duration-300">Support</a>

          <div class="flex flex-col space-y-2 pt-4">
            <button class="cta-button-log text-white font-medium px-5 py-2.5 rounded-full text-sm hover:bg-gray-800 transition duration-300">
              Login
            </button>
            <button class="cta-button text-white font-medium px-5 py-2.5 rounded-full text-sm">
              Sign Up
            </button>
          </div>
        </div>
      </div>
    </nav>
  </header>

{{-- Hero Section --}}





<script src="js/navbar.js"></script>
</body>
</html>
