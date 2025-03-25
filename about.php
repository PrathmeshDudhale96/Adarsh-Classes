<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Adarsh lite Coaching Academy</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen">
    <!-- Navigation -->
    <header class="bg-indigo-800 text-white shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <nav class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-2xl font-bold mb-4 md:mb-0 a   nimate-fade-in">
                    Adarsh Coaching Academy
                </div>
                <div class="flex flex-wrap justify-center space-x-4">
                    <a href="index.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">Home</a>
                    <a href="faculty.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">Faculty</a>
                    <a href="students.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">Students</a>
                    <a href="about.php" class="text-indigo-200 border-b-2 border-indigo-200">About Us</a>
                    <a href="contact.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">Contact</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-xl shadow-2xl overflow-hidden transform transition-all duration-500 hover:scale-105">
                <div class="p-8 text-center">
                    <h2 class="text-4xl font-extrabold text-indigo-800 mb-6 animate-slide-in-top">
                        Who We Are
                    </h2>
                    <div class="space-y-6">
                        <p class="text-gray-600 leading-relaxed text-lg animate-fade-in-delay">
                        Adarsh Coaching Academy is a premier educational institution dedicated to nurturing academic excellence and personal growth. We believe in transforming potential into performance through personalized mentoring and cutting-edge learning techniques.
                        </p>
                        <div class="grid md:grid-cols-3 gap-6 mt-8">
                            <div class="bg-indigo-50 p-6 rounded-lg shadow-md transform transition hover:scale-105 duration-300">
                                <h3 class="text-xl font-semibold text-indigo-800 mb-4">Our Mission</h3>
                                <p class="text-gray-600">Empowering students to achieve their academic and personal goals through innovative teaching methods.</p>
                            </div>
                            <div class="bg-indigo-50 p-6 rounded-lg shadow-md transform transition hover:scale-105 duration-300">
                                <h3 class="text-xl font-semibold text-indigo-800 mb-4">Our Vision</h3>
                                <p class="text-gray-600">To be a leading coaching institute that sets new standards in educational excellence.</p>
                            </div>
                            <div class="bg-indigo-50 p-6 rounded-lg shadow-md transform transition hover:scale-105 duration-300">
                                <h3 class="text-xl font-semibold text-indigo-800 mb-4">Our Values</h3>
                                <p class="text-gray-600">Integrity, Innovation, Individual Growth, and Inspiration.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Results Section -->
<section class="container mx-auto px-4 py-12">
    <h2 class="text-4xl font-extrabold text-indigo-800 text-center mb-8">📜 Student Results</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-lg rounded-lg overflow-hidden">
            <thead class="bg-indigo-700 text-white">
                <tr>
                    <th class="py-3 px-6 text-left">Student Name</th>
                    <th class="py-3 px-6 text-left">Class</th>
                    <th class="py-3 px-6 text-left">Marks Obtained</th>
                    <th class="py-3 px-6 text-left">Percentage</th>
                    <th class="py-3 px-6 text-left">Rank</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr class="border-b hover:bg-gray-100 transition">
                    <td class="py-4 px-6">Aditya Joshi</td>
                    <td class="py-4 px-6">10th Standard</td>
                    <td class="py-4 px-6">485 / 500</td>
                    <td class="py-4 px-6">97%</td>
                    <td class="py-4 px-6 text-green-600 font-semibold">1st</td>
                </tr>
                <tr class="border-b hover:bg-gray-100 transition">
                    <td class="py-4 px-6">Rohan Kadam</td>
                    <td class="py-4 px-6">10th Standard</td>
                    <td class="py-4 px-6">470 / 500</td>
                    <td class="py-4 px-6">94%</td>
                    <td class="py-4 px-6 text-blue-600 font-semibold">2nd</td>
                </tr>
                <tr class="hover:bg-gray-100 transition">
                    <td class="py-4 px-6">Shubhranvi Kapare</td>
                    <td class="py-4 px-6">10th Standard</td>
                    <td class="py-4 px-6">460 / 500</td>
                    <td class="py-4 px-6">92%</td>
                    <td class="py-4 px-6 text-purple-600 font-semibold">3rd</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>


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