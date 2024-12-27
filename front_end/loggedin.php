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
        <a href="../front_end/loggedin.php" class="text-white hover:text-orange-500 transition duration-300">Home</a>
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
                    <a href="../front_end/reservation.php" class="text-white hover:text-orange-500 transition duration-300">Reserver</a>
                </li>
                <li>
                    <a href="#" class="text-white hover:text-orange-500 transition duration-300">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

<section class="relative h-screen overflow-hidden bg-cover bg-center" style="background-image: url('../imgbg.jpg');">
  <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
    <h1 class="text-orange-500 text-4xl md:text-6xl font-bold text-center">Bienvenue dans nos Activités de Voyage</h1>
  </div>
</section>

<!-- Activités Section -->
<section class="container mx-auto text-center mt-12" id="activities">
  <h2 class="text-4xl font-extrabold text-orange-500 mb-12">Nos Activités de Voyage</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8 pl-8">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition flex flex-col">
      <img alt="Visite guidée de la ville" class="w-full h-96 object-cover" src="../Visite-guidee.jpg">
      <div class="p-6 flex flex-col justify-between flex-grow">
        <h3 class="text-xl font-semibold text-gray-800">Visite Guidée de la Ville</h3>
        <p class="text-gray-600 mt-2">
          Découvrez l'histoire fascinante de la ville avec un guide expérimenté. Explorez les monuments emblématiques, les musées et les quartiers pittoresques.<br><br>
          Durée: 2 heures<br>
          Points d'intérêt: Musée d'art, Place historique, Quartier ancien
        </p>
        <p class="text-orange-500 font-bold mt-4">50€</p>
      </div>
    </div>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition flex flex-col">
      <img alt="Randonnée dans les montagnes" class="w-full h-96 object-cover" src="../Montagne.jpg" />
      <div class="p-6 flex flex-col justify-between flex-grow">
        <h3 class="text-xl font-semibold text-gray-800">Randonnée dans les montagnes</h3>
        <p class="text-gray-600 mt-2">
          Partez à l'aventure dans les montagnes, avec des vues panoramiques spectaculaires et des sentiers pittoresques. Une expérience pour les amoureux de la nature.<br><br>
          Durée: 6 heures<br>
          Niveau de difficulté: Modéré<br>
          Points d'intérêt: Vues sur la vallée, Flora alpine, Cascade cachée
        </p>
        <p class="text-orange-500 font-bold mt-4">80€</p>
      </div>
    </div>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition flex flex-col">
      <img alt="Safari en Afrique" class="w-full h-96 object-cover" src="../Safari.jpg" />
      <div class="p-6 flex flex-col justify-between flex-grow">
        <h3 class="text-xl font-semibold text-gray-800">Safari en Afrique</h3>
        <p class="text-gray-600 mt-2">
          Plongez dans l'aventure avec un safari guidé à travers les savanes africaines. Observez des animaux sauvages dans leur habitat naturel et capturez des moments inoubliables.<br><br>
          Durée: 4 heures<br>
          Activités: Observation des lions, Safaris en 4x4, Prise de photos animalières
        </p>
        <p class="text-orange-500 font-bold mt-4">150€</p>
      </div>
    </div>
    <div class="bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-2xl transition flex flex-col">
      <img alt="Plongée sous-marine" class="w-full h-96 object-cover" src="../sous-marin.jpg" />
      <div class="p-6 flex flex-col justify-between flex-grow">
        <h3 class="text-xl font-semibold text-gray-800">Plongée sous-marine</h3>
        <p class="text-gray-600 mt-2">
          Découvrez les merveilles sous-marines en explorant les récifs coralliens colorés et la vie marine exceptionnelle dans les eaux cristallines.<br><br>
          Durée: 3 heures<br>
          Activités: Plongée avec tuba, Exploration des coraux, Observation des poissons tropicaux
        </p>
        <p class="text-orange-500 font-bold mt-4">120€</p>
      </div>
    </div>
  </div>
  <div class="flex justify-center mt-8 mb-8">
    <a href="../front_end/reservation.php" class="w-full md:w-auto bg-orange-500 text-white py-4 px-8 rounded-lg font-semibold hover:bg-gradient-to-l hover:bg-orange-600 transition duration-300 text-center block">Réserver Une Activité</a>
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
