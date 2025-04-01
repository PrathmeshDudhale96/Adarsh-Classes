<?php
// index.php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adarsh Coaching Academy - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen">
    <!-- Navigation -->
    <header class="bg-indigo-800 text-white shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <nav class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-2xl font-bold mb-4 md:mb-0 animate-fade-in">
                Adarsh Coaching Academy
                </div>
                <div class="flex flex-wrap justify-center space-x-4">
                    <a href="index.php" class="text-indigo-200 border-b-2 border-indigo-200">Home</a>
                    <a href="faculty.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">Faculty</a>
                    <a href="students.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">Students</a>
                    <a href="contact.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">Contact</a>
                    <?php if (isset($_SESSION['username'])): ?>
                        <a href="logout.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">Logout (<?= htmlspecialchars($_SESSION['username']) ?>)</a>
                    <?php else: ?>
                        <a href="login.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">Login</a>
                        <a href="register.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">Register</a>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <main class="container mx-auto px-4 py-12">
        <section class="grid md:grid-cols-2 gap-8 items-center">
            <div class="text-left animate-slide-in-left">
                <h1 class="text-5xl font-extrabold text-indigo-800 mb-6">
                    Empower Your Academic Journey
                </h1>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Unlock your potential with our comprehensive coaching programs. We provide personalized learning experiences that transform students into future leaders.
                </p>
                <div class="flex space-x-4">
                    <a href="about.php" class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition transform hover:scale-105 duration-300 shadow-md">
                        Learn More
                    </a>
                    <a href="contact.php" class="bg-white text-indigo-600 px-6 py-3 rounded-lg border border-indigo-600 hover:bg-indigo-50 transition transform hover:scale-105 duration-300 shadow-md">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="hidden md:block animate-slide-in-right">
    <div class="bg-indigo-100 rounded-xl p-8">
        <div class="grid grid-cols-3 gap-4">
            <a href="students.php" class="bg-white rounded-lg p-4 text-center shadow-md transform hover:scale-105 transition duration-300 block">
                <svg class="w-12 h-12 mx-auto text-indigo-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                <p class="text-sm text-gray-600">Study Materials</p>
            </a>
            <a href="faculty.php" class="bg-white rounded-lg p-4 text-center shadow-md transform hover:scale-105 transition duration-300 block">
                <svg class="w-12 h-12 mx-auto text-green-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                </svg>
                <p class="text-sm text-gray-600">Expert Faculty</p>
            </a>
            <a href="students.php" class="bg-white rounded-lg p-4 text-center shadow-md transform hover:scale-105 transition duration-300 block">
                <svg class="w-12 h-12 mx-auto text-purple-600 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <p class="text-sm text-gray-600">Batch Schedule</p>
            </a>
        </div>
    </div>
</div>

        </section>

        <!-- Key Features -->
        <section class="mt-16 text-center">
            <h2 class="text-3xl font-bold text-indigo-800 mb-12">Why Choose Adarsh Coaching Academy?</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                    <svg class="w-16 h-16 mx-auto text-indigo-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold mb-4">Personalized Learning</h3>
                    <p class="text-gray-600">Tailored teaching approaches to match individual student needs.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                    <svg class="w-16 h-16 mx-auto text-green-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                    <h3 class="text-xl font-semibold mb-4">Comprehensive Study Material</h3>
                    <p class="text-gray-600">High-quality, up-to-date resources for effective learning.</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg transform hover:scale-105 transition duration-300">
                    <svg class="w-16 h-16 mx-auto text-purple-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.768-.231-1.494-.657-2.121C15.781 14.805 14.48 14 13 14c-1.48 0-2.781.805-3.343 1.879A3.001 3.001 0 007 20m10 0v-2a3 3 0 00-3-3H7a3 3 0 00-3 3v2h10zM7 7a3 3 0 116 0 3 3 0 01-6 0z"></path>
                    </svg>
                    <h3 class="text-xl font-semibold mb-4">Expert Mentorship</h3>
                    <p class="text-gray-600">Guidance from experienced and passionate educators.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-indigo-900 text-white py-6 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Adarsh Coaching Academy. All Rights Reserved.</p>
        </div>
    </footer>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideInLeft {
            from { 
                opacity: 0; 
                transform: translateX(-50px);
            }
            to { 
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes slideInRight {
            from { 
                opacity: 0; 
                transform: translateX(50px);
            }
            to { 
                opacity: 1;
                transform: translateX(0);
            }
        }
        .animate-fade-in {
            animation: fadeIn 1s ease-out;
        }
        .animate-slide-in-left {
            animation: slideInLeft 1s ease-out;
        }
        .animate-slide-in-right {
            animation: slideInRight 1s ease-out;
        }
    </style>
</body>
</html>