<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Adarsh Coaching Academy</title>
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
                    <a href="faculty.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">Faculty</a>
                    <a href="students.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">Students</a>
                    <a href="about.php" class="hover:text-indigo-200 transition transform hover:scale-105 duration-300">About Us</a>
                    <a href="contact.php" class="text-indigo-200 border-b-2 border-indigo-200">Contact</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Contact Form -->
    <main class="container mx-auto px-4 py-12">
        <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-2xl overflow-hidden transform transition-all duration-500 hover:scale-105">
            <div class="p-8">
                <h2 class="text-4xl font-extrabold text-indigo-800 mb-6 text-center animate-slide-in-top">
                    Get in Touch
                </h2>
                <form action="contact_form.php" method="post" class="space-y-6 animate-fade-in-delay">
                    <div>
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            required 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300"
                            placeholder="Your Full Name"
                        >
                    </div>
                    
                    <div>
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300"
                            placeholder="your.email@example.com"
                        >
                    </div>
                    
                    <div>
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                        <textarea 
                            id="message" 
                            name="message" 
                            rows="5" 
                            required 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-300"
                            placeholder="Write your message here..."
                        ></textarea>
                    </div>
                    
                    <div class="text-center">
                        <button 
                            type="submit" 
                            class="bg-indigo-600 text-white px-8 py-3 rounded-lg hover:bg-indigo-700 transition transform hover:scale-105 duration-300 shadow-md"
                        >
                            Send Message
                        </button>
                    </div>
                </form>
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