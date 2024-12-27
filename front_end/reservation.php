<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Le Chef - Alain Passard</title>
</head>
<body class="bg-gray-50 text-gray-800">

<nav class="bg-orange-300 dark:bg-black">
  <div class="flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="../front_end/index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="img/logotravel-removebg-preview.png" class="h-16" alt="Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
  <a href="../login/signin.php" class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none font-medium rounded-lg text-base px-6 py-3 text-center dark:bg-orange-500 dark:hover:bg-orange-600">
    Sign In
</a>
<button id="burger-menu-btn" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
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

  <div id="mobile-menu" class="md:hidden hidden bg-black w-full shadow-lg mt-4 p-6">
            <ul class="space-y-4">
                <li>
                    <a href="../front_end/index.php" class="text-white hover:text-orange-500 transition duration-300">Home</a>
                </li>
                <li>
                    <a href="./reservation.php" class="text-white hover:text-orange-500 transition duration-300">Reserver</a>
                </li>
                <li>
                    <a href="#" class="text-white hover:text-orange-500 transition duration-300">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="py-16" id="reservation">
  <div class="mx-auto text-center">
    <h2 class="text-4xl font-extrabold text-orange-500 mb-8">Réservez votre Table</h2>
    <p class="text-lg font-semibold text-black mb-12">Venez savourer une expérience culinaire inoubliable. Réservez une table dès maintenant.</p>
    <form class="max-w-3xl mx-auto bg-gray-200 p-10 rounded-xl shadow-xl" method="POST" action="">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="mb-6">
      <label class="block text-black font-semibold mb-2" for="name">Nom</label>
      <input class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" id="name" name="nom" type="text" placeholder="Votre nom" required />
    </div>
    <div class="mb-6">
      <label class="block text-black font-semibold mb-2" for="date">Date</label>
      <input class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" id="date" name="date_reservation" type="date" required />
    </div>
    <div class="mb-6">
      <label class="block text-black font-semibold mb-2" for="time">Heure</label>
      <input class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" id="time" name="heure_reservation" type="time" required />
    </div>
    <div class="mb-6">
      <label class="block text-black font-semibold mb-2" for="guests">Nombre de personnes</label>
      <input class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" id="guests" name="nombre_personnes" type="number" placeholder="Nombre de personnes" required max="10" />
    </div>
  </div>

  <div class="mb-6">
  <label class="block text-black font-semibold mb-2" for="menu">Choisir un menu</label>
  <select class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" id="menu" name="id_menu" required>
    <option value="" disabled selected>Choisir un menu</option>



            </select>
</div>
<button type="submit" class="w-full bg-orange-500 text-white py-4 rounded-lg font-semibold hover:bg-gradient-to-l hover:bg-orange-600 transition duration-300 mt-4">Réserver Maintenant</button>
</form>
  </div>
</section>

<!-- Footer -->
<footer class="bg-black text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-3 gap-8 justify-items-center">
            <div>
                <h3 class="text-xl font-semibold mb-4">Navigation</h3>
                <ul class="space-y-2">
                    <li><a href="../front_end/index.php" class="text-white hover:text-orange-500 transition duration-300">Home</a></li>
                    <li><a href="../front_end/reservation.php" class="text-white hover:text-orange-500 transition duration-300">Reservation</a></li>
                    <li><a href="#" class="text-white hover:text-orange-500 transition duration-300">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4">Suivez-nous</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-white hover:text-orange-500 transition duration-300"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.148 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.148-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162S8.597 18.163 12 18.163s6.162-2.759 6.162-6.162S15.403 5.838 12 5.838zm0 10.162c-2.209 0-4-1.791-4-4s1.791-4 4-4 4 1.791 4 4-1.791 4-4 4z"></path></svg></a>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
