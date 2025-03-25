<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty - Adarsh Coaching Academy</title>
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
                    <a href="index.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">Home</a>
                    <a href="faculty.php" class="text-indigo-200 border-b-2 border-indigo-200">Faculty</a>
                    <a href="students.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">Students</a>
                    <a href="about.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">About Us</a>
                    <a href="contact.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">Contact</a>
                </div>
            </nav>
        </div>
    </header>
<!-- Faculty Section -->
<main class="container mx-auto px-4 py-12">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-extrabold text-indigo-800 mb-4 animate-slide-in-top">
            Meet Our Expert Faculty
        </h2>
        <p class="text-gray-600 max-w-2xl mx-auto animate-fade-in-delay">
            Our faculty comprises highly experienced and dedicated educators who are committed to student success and academic excellence.
        </p>
    </div>

    <!-- 2x2 Responsive Faculty Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mx-auto max-w-4xl">
        
        <!-- Faculty Card 1 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
            <div class="p-6 text-center">
                <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-indigo-100">
                    <img src="profile/Prathmesh.jpg" alt="Prathmesh Dudhale" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold text-indigo-800 mb-2">Prathmesh Dudhale</h3>
                <p class="text-gray-600 mb-4">Physics Department</p>
                <span class="bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full text-sm">15+ Years Experience</span>
            </div>
        </div>

        <!-- Faculty Card 2 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
            <div class="p-6 text-center">
                <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-indigo-100">
                    <img src="profile/vedant.jpeg" alt="Vedant Kale" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold text-indigo-800 mb-2">Vedant Kale</h3>
                <p class="text-gray-600 mb-4">Mathematics Department</p>
                <span class="bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full text-sm">10+ Years Experience</span>
            </div>
        </div>

        <!-- Faculty Card 3 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
            <div class="p-6 text-center">
                <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-indigo-100">
                    <img src="profile/Badal.jpg" alt="Badal Gaurkhede" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold text-indigo-800 mb-2">Badal Gaurkhede</h3>
                <p class="text-gray-600 mb-4">Chemistry Department</p>
                <span class="bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full text-sm">8+ Years Experience</span>
            </div>
        </div>

        <!-- Faculty Card 4 -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-500 hover:scale-105 hover:shadow-2xl">
            <div class="p-6 text-center">
                <div class="w-32 h-32 mx-auto mb-4 rounded-full overflow-hidden border-4 border-indigo-100">
                    <img src="profile/Arpit.png" alt="Arpit Gaikwad" class="w-full h-full object-cover">
                </div>
                <h3 class="text-xl font-semibold text-indigo-800 mb-2">Arpit Gaikwad</h3>
                <p class="text-gray-600 mb-4">English Department</p>
                <span class="bg-indigo-50 text-indigo-600 px-3 py-1 rounded-full text-sm">5+ Years Experience</span>
            </div>
        </div>

    </div>
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
        @keyframes slideInTop {
            from { 
                opacity: 0; 
                transform: translateY(-50px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        .animate-fade-in {
            animation: fadeIn 1s ease-out;
        }
        .animate-slide-in-top {
            animation: slideInTop 1s ease-out;
        }
        .animate-fade-in-delay {
            animation: fadeIn 1s ease-out 0.5s both;
        }
    </style>
</body>
</html>