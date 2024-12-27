<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sign UP</title>
</head>
<body class="bg-gray-50 text-gray-800">

<nav class="bg-white dark:bg-black">
  <div class="flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="../front_end/index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="img/logo_cuisine.png" class="h-16" alt="Logo" />
    </a>
    <div class="flex md:order-2 space-x-3 rtl:space-x-reverse">
      <a href="../login/signup.php" class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-base px-6 py-3">Sign Up</a>
      <button id="burger-menu-btn" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none">
        <span class="sr-only">Open menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 5h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1zm0 7h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm0 7h18a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1z" clip-rule="evenodd" />
        </svg>
      </button>
    </div>

    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
  <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700">
  <li >
        <a href="../front_end/index.php" class="text-white hover:text-orange-500 transition duration-300">Home</a>
      </li>
      <li>
        <a href="../front_end/reservation.php" class="text-white hover:text-orange-500 transition duration-300">Reservation</a>
      </li>
      <li>
        <a href="#" class="text-white hover:text-orange-500 transition duration-300">Contact</a>
      </li>
    </ul>
  </div>
  </div>

    <div id="mobile-menu" class="hidden md:hidden bg-black w-full shadow-lg mt-4 p-6">
      <ul class="space-y-4">
        <li><a href="../front_end/index.php" class="text-white hover:text-orange-500 transition duration-300">Home</a></li>
        <li><a href="../front_end/reservation.php" class="text-white hover:text-orange-500 transition duration-300">Reserver</a></li>
        <li><a href="#" class="text-white hover:text-orange-500 transition duration-300">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

    <section class="py-16">
  <div class="mx-auto max-w-md bg-gray-200 p-8 rounded-lg shadow-lg">
    <h2 class="text-3xl font-bold text-center text-orange-500 mb-6">Se Connecter à votre compte</h2>
    <form action="signin.php" method="POST">
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" required />
      </div>
      <div class="mb-6">
        <label for="password" class="block text-gray-700 font-medium mb-2">Mot de Passe</label>
        <input type="password" id="password" name="password" placeholder="Mot de passe" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" required />
      </div>
    <div>
      <button type="submit" class="w-full bg-orange-500 text-white py-3 rounded-lg font-semibold hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500">Se connecter et continuer</button>
      </div>
    <p class="mt-4 text-center text-gray-600">Vous n’avez pas de compte ? <a href="../login/signup.php" class="text-orange-600 hover:text-orange-700 font-semibold">Inscrivez-vous</a></p>
  </div>
  </form>
</section>


<!-- Footer -->
<footer class="bg-black text-white py-12">
        <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 justify-items-center">
        <div>
                    <h3 class="text-xl font-semibold mb-4">Navigation</h3>
                    <ul class="space-y-2">
                        <li><a href="../front_end/index.php" class="text-white hover:text-orange-500 transition duration-300">Home</a></li>
                        <li><a href="../front_end/reservation.php" class="text-white hover:text-orange-500 transition duration-300">Réservations</a></li>
                        <li><a href="#" class="text-white hover:text-orange-500 transition duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-4">Suivez-nous</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-orange-500 transition duration-300"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.148 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.148-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.058 1.264-.072 1.684-.072 4.948 0 3.259.014 3.667.072 4.947.2 4.358 2.618 6.78 6.98 6.98 1.264.057 1.684.072 4.947.072 3.259 0 3.667-.014 4.948-.072 4.358-.2 6.78-2.618 6.98-6.98.058-1.264.072-1.684.072-4.947 0-3.259-.014-3.667-.072-4.948-.2-4.358-2.618-6.78-6.98-6.98-1.264-.057-1.684-.072-4.948-.072z" /></svg></a>
                        <a href="#" class="text-white hover:text-orange-500 transition duration-300"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.497 12c0-6.075-4.925-11-11-11s-11 4.925-11 11c0 6.073 4.925 11 11 11s11-4.925 11-11zM12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.148 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.148-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069z" /></svg></a>
                    </div>
                </div>
        </div>
    </footer>
</body>
</html>

