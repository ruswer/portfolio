<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 mx-auto">
    <!-- Start #Navbar -->
    <nav class="w-full bg-white shadow-md fixed top-0 left-0 z-10">
        <div class="w-11/12 md:w-4/5 mx-auto flex justify-between items-center py-6">
            <!-- Logo -->
            <h1 class="text-3xl font-bold text-blue-600">My Portfolio</h1>
    
            <!-- Hamburger Button (Mobil uchun) -->
            <div class="md:hidden flex items-center">
                <button id="hamburger-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
    
            <!-- Nav Links (Desktop uchun) -->
            <div class="hidden md:flex flex-wrap justify-center md:justify-end mt-2 md:mt-0 space-x-6">
                <a href="#" class="text-gray-700 hover:text-blue-500 text-xl font-semibold transition-all duration-300">About</a>
                <a href="#skills" class="text-gray-700 hover:text-blue-500 text-xl font-semibold transition-all duration-300">Skills</a>
                <a href="#projects" class="text-gray-700 hover:text-blue-500 text-xl font-semibold transition-all duration-300">Projects</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-500 text-xl font-semibold transition-all duration-300">Contact</a>
            </div>
        </div>
    
        <!-- Mobile Menu (Initially hidden) -->
        <div id="mobile-menu" class="md:hidden bg-white shadow-md p-4 hidden">
            <a href="#" class="block text-gray-700 py-2 hover:text-blue-500 font-semibold">About</a>
            <a href="#skills" class="block text-gray-700 py-2 hover:text-blue-500 font-semibold">Skills</a>
            <a href="#projects" class="block text-gray-700 py-2 hover:text-blue-500 font-semibold">Projects</a>
            <a href="#contact" class="block text-gray-700 py-2 hover:text-blue-500 font-semibold">Contact</a>
        </div>
    </nav>    
    <!-- End Navbar -->

    <!-- Sart #Header -->
    <header class="bg-white py-12 mt-20">
        <div class="mx-auto flex flex-col md:flex-row items-center justify-between px-4 md:px-0 w-4/5">
            <!-- Chap tomon (Matn) -->
            <div class="text-center md:text-left md:w-1/2 mb-6 md:mb-0">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">Hi, I'm Doniyor Rustamov</h2>
                <p class="text-gray-600 mt-2 text-base md:text-xl">A Web Developer</p>
                <!-- View Projects Tugmasi -->
                <div class="mt-6">
                    <a href="#projects" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-4 rounded text-lg md:text-xl transition-all duration-300">
                        View Projects
                    </a>
                </div>
                <!-- Social Links -->
                <div class="flex space-x-6 mt-6 justify-center md:justify-start">
                    <a href="#" class="text-gray-600 hover:text-blue-500 text-3xl transition-all duration-300">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-blue-500 text-3xl transition-all duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-600 hover:text-blue-500 text-3xl transition-all duration-300">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
            <!-- O'ng tomon (Rasm) -->
            <div class="md:w-1/2 flex justify-center mt-6 md:mt-0">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQr1E35If-I2-LP6J90fC8Xl4fH_I0ykNwUb4OxLrtM1-BFvzUmqySJ9GDSC4bE15TdkYI&usqp=CAU" alt="Doniyor Rustamov" class="rounded-full shadow-lg w-48 h-48 md:w-80 md:h-80 object-cover">
            </div>
        </div>
    </header>    
    <!-- End Header -->
    
    <!-- Start #Skills -->
    <section id="skills" class="bg-gray-100 pt-10">
        <!-- Skills Sarlavhasi -->
        <h3 class="text-4xl font-extrabold text-center mb-8 text-blue-600">Skills</h3>
      
        <div class="w-4/5 flex flex-wrap justify-between gap-6 mx-auto">
          
          <!-- Card 1: HTML & CSS -->
          <div class="bg-white shadow-lg rounded-lg hover:shadow-xl transition duration-200 w-full sm:w-[48%] lg:w-[30%] max-w-sm mx-auto h-[350px]">
            <img class="rounded-t-lg h-48 w-full object-cover" src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" alt="HTML & CSS" />
            <div class="py-4 px-6 h-[calc(100%-192px)] overflow-hidden">
              <h1 class="hover:cursor-pointer text-gray-900 font-bold text-xl tracking-tight">
                HTML & CSS
              </h1>
              <p class="hover:cursor-pointer py-2 text-gray-600 text-sm leading-6">
                Responsive va zamonaviy veb-saytlar yaratish uchun asosiy texnologiyalar.
              </p>
            </div>
          </div>
      
          <!-- Card 2: PHP & Laravel -->
          <div class="bg-white shadow-lg rounded-lg hover:shadow-xl transition duration-200 w-full sm:w-[48%] lg:w-[30%] max-w-sm mx-auto h-[350px]">
            <img class="rounded-t-lg h-48 w-full object-cover" src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="PHP & Laravel" />
            <div class="py-4 px-6 h-[calc(100%-192px)] overflow-hidden">
              <h1 class="hover:cursor-pointer text-gray-900 font-bold text-xl tracking-tight">
                PHP & Laravel
              </h1>
              <p class="hover:cursor-pointer py-2 text-gray-600 text-sm leading-6">
                Backend dasturlash va Laravel freymvorki yordamida kuchli veb-ilovalar yaratish.
              </p>
            </div>
          </div>
      
          <!-- Card 3: MySQL -->
          <div class="bg-white shadow-lg rounded-lg hover:shadow-xl transition duration-200 w-full sm:w-[48%] lg:w-[30%] max-w-sm mx-auto h-[350px]">
            <img class="rounded-t-lg h-48 w-full object-cover" src="https://upload.wikimedia.org/wikipedia/en/d/dd/MySQL_logo.svg" alt="MySQL" />
            <div class="py-4 px-6 h-[calc(100%-192px)] overflow-hidden">
              <h1 class="hover:cursor-pointer text-gray-900 font-bold text-xl tracking-tight">
                MySQL
              </h1>
              <p class="hover:cursor-pointer py-2 text-gray-600 text-sm leading-6">
                Ma'lumotlar bazasini boshqarish va optimallashtirish uchun kuchli vosita.
              </p>
            </div>
          </div>
      
        </div>
    </section>
    <!-- End Skills -->

    <!-- Start #My Projects -->
    <section id="projects" class="w-full mx-auto py-16 bg-gray-50 mt-16">
        <div class="w-4/5 mx-auto">
            <h3 class="text-4xl font-extrabold text-center mb-8 text-blue-600">My Projects</h3>
            <!-- Filter Tugmalari -->
            <div class="flex flex-wrap justify-center space-x-2 md:space-x-4 mb-6">
                <button class="filter-btn active bg-blue-500 text-white px-6 py-3 rounded-lg text-lg" data-filter="all">All</button>
                <button class="filter-btn bg-gray-200 text-gray-700 px-6 py-3 rounded-lg text-lg" data-filter="html-css">HTML & CSS</button>
                <button class="filter-btn bg-gray-200 text-gray-700 px-6 py-3 rounded-lg text-lg" data-filter="php">PHP</button>
                <button class="filter-btn bg-gray-200 text-gray-700 px-6 py-3 rounded-lg text-lg" data-filter="laravel">Laravel</button>
                <button class="filter-btn bg-gray-200 text-gray-700 px-6 py-3 rounded-lg text-lg" data-filter="javascript">JavaScript</button>
            </div>
            <!-- Loyihalar Ro‘yxati -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="project bg-white p-6 shadow-md rounded-lg transition-transform duration-300 hover:scale-105" data-category="html-css">
                    <h4 class="text-2xl font-semibold text-blue-600">Landing Page</h4>
                    <p class="text-gray-700 mt-2">HTML & CSS bilan yaratilgan veb-sayt.</p>
                </div>
    
                <div class="project bg-white p-6 shadow-md rounded-lg transition-transform duration-300 hover:scale-105" data-category="php">
                    <h4 class="text-2xl font-semibold text-blue-600">Blog System</h4>
                    <p class="text-gray-700 mt-2">PHP bilan yozilgan blog tizimi.</p>
                </div>
    
                <div class="project bg-white p-6 shadow-md rounded-lg transition-transform duration-300 hover:scale-105" data-category="laravel">
                    <h4 class="text-2xl font-semibold text-blue-600">Job Portal</h4>
                    <p class="text-gray-700 mt-2">Laravel asosida ish e'lonlari platformasi.</p>
                </div>
    
                <div class="project bg-white p-6 shadow-md rounded-lg transition-transform duration-300 hover:scale-105" data-category="javascript">
                    <h4 class="text-2xl font-semibold text-blue-600">To-do App</h4>
                    <p class="text-gray-700 mt-2">JavaScript bilan yozilgan vazifalar dasturi.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End My Projects -->
    
    <span class="flex items-center py-6">
        <span class="h-px flex-1 bg-gradient-to-r from-gray-400 to-gray-200"></span>
        <span class="shrink-0 px-4 text-4xl font-semibold text-blue-600">Contact me</span>
        <span class="h-px flex-1 bg-gradient-to-l from-gray-400 to-gray-200"></span>
    </span>
    
    <!-- Start #Footer -->
    <section id="contact" class="py-8 bg-gray-200 w-full">
        <div class="w-4/5 mx-auto flex flex-col md:flex-row justify-between">
            <!-- Chap tomon: Email va manzillar -->
            <div class="md:w-2/3 mb-6 md:mb-0">
                <h4 class="text-3xl font-bold mb-4">Contact Information</h4>
                <p class="text-xl text-gray-800 mb-2">Email: example@example.com</p>
                <p class="text-xl text-gray-800 mb-2">Address: 123 Street Name, City, Country</p>
                <p class="text-xl text-gray-800 mb-2">Phone: +123 456 7890</p>
            </div>
            
            <!-- O'ng tomon: Form -->
            <div class="md:w-1/3">
                <form action="{{ route('contact.send') }}" method="POST" class="bg-white p-6 shadow-md rounded">
                    @csrf
                    <input type="text" name="name" placeholder="Your Name" class="w-full p-3 border mb-4 rounded text-lg" required>
                    <input type="email" name="email" placeholder="Your Email" class="w-full p-3 border mb-4 rounded text-lg" required>
                    <textarea name="message" placeholder="Your Message" class="w-full p-3 border mb-4 rounded text-lg" required></textarea>
                    <button type="submit" class="bg-green-500 text-white px-6 py-3 rounded text-lg font-semibold">Send</button>
                </form>

                @if(session('success'))
                    <p class="text-green-500 mt-4">{{ session('success') }}</p>
                @endif
            </div>
        </div>
    </section>
    <!-- End Footer -->

    <!-- Start #Footer under social links -->
    <section id="social" class="py-4 bg-gray-100 w-full">
        <div class="w-4/5 mx-auto text-center">
            <h4 class="text-2xl font-semibold mb-4">Follow Me</h4>
            <div class="flex justify-center space-x-6">
                <a href="#" class="text-gray-700 hover:text-blue-500">
                    <i class="fab fa-facebook-f text-2xl"></i>
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-500">
                    <i class="fab fa-instagram text-2xl"></i>
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-500">
                    <i class="fab fa-linkedin-in text-2xl"></i>
                </a>
                <a href="#" class="text-gray-700 hover:text-blue-500">
                    <i class="fab fa-github text-2xl"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- End Footer under social links -->

    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" aria-label="Scroll to top" class="fixed bottom-6 right-6 bg-gradient-to-r from-blue-500 to-blue-700 text-white p-4 rounded-full shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-110 w-14 h-14">
        <i class="fas fa-arrow-up text-xl"></i>
    </button>

    <!--My projects categoriylar buyicha ajratish-->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
