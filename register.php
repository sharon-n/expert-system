<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Startup Expert System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <!-- Navbar -->
    <nav class="bg-white shadow-md p-4">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-semibold">Startup Expert System</h1>
            <a href="index.php" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Home</a>
        </div>
    </nav>

    <!-- Register Form -->
    <section class="max-w-md mx-auto mt-16 bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center">Create Your Account</h2>
        <form action="register_action.php" method="POST" class="mt-6">
            <div class="mb-4">
                <label for="name" class="block text-gray-600">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" class="w-full p-3 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" class="w-full p-3 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" class="w-full p-3 border rounded-md" required>
            </div>
            <div class="mb-4">
                <label for="role" class="block text-gray-600">Role</label>
                <select id="role" name="role" class="w-full p-3 border rounded-md" required>
                    <option value="entrepreneur">Entrepreneur</option>
                    <option value="investor">Investor</option>
                    <option value="consultant">Consultant</option>
                </select>
            </div>
            <button type="submit" class="w-full py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700">Register</button>
        </form>
        <p class="mt-4 text-center text-gray-600">Already have an account? <a href="login.php" class="text-blue-600 hover:text-blue-700">Login here</a>.</p>
    </section>
</body>
</html>
