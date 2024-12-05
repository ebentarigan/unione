<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Header</title>
    <link rel="stylesheet" href="layout/style.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 text-gray-900">
    <?php
    include "layout/header.html";

    ?>
    <main>
        <section class="bg-white py-20">
            <div class="container mx-auto flex flex-col md:flex-row items-center">
              <div class="md:w-1/2">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Find Your Dream Job and Connect with Other People With UNIONE</h1>
                <p class="text-gray-700 mb-6">
                  In today's competitive job market, finding the right opportunity and building a strong professional network can make all the difference.
                </p>
                <button class="px-6 py-3 bg-black text-white font-semibold rounded-lg hover:bg-blue-600">
                  Get Started
                </button>
              </div>
              <div class="md:w-1/2 flex justify-center mt-10 md:mt-0">
                <img src= "img/landing-page photo.png" alt="Hero Image" >
              </div>
            </div>

          </section>
          <section class="bg-gray-900 py-10">
            <div class="container mx-auto flex items-center justify-around">
              <img src="img/google-icon-1024x1024-ilkrdfcp.png" alt="Logo 1" class="h-10">
              <img src="img/Facebook.png" alt="Logo 2" class="h-10">
              <img src="img/microsoft.jpg" alt="Logo 3" class="h-10">
              <img src="" alt="Logo 4" class="h-10">
              <img src="https://via.placeholder.com/100" alt="Logo 5" class="h-10">
            </div>
          </section>

          <section class="py-16 bg-white">
            <div class="container mx-auto text-center">
              <h2 class="text-3xl font-bold mb-8">What Our Users Are Saying About UNIONE</h2>
              <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3">
                  <img src="img/review.png" alt="User" class="rounded-full mx-auto mb-4">
                  <h3 class="text-xl font-bold">Aleksandro Pradito</h3>
                  <p class="text-yellow-500">★★★★★</p>
                </div>
                <div class="md:w-2/3 bg-gray-100 p-6 rounded-lg shadow-md">
                  <p class="text-gray-700 mb-4">
                    Discovering new opportunities and expanding professional networks has never been easier with UNIONE. The platform makes everything streamlined and user-friendly.
                  </p>
                  <p class="text-sm text-gray-600">- Senior Data Scientist at Apple</p>
                </div>
              </div>
            </div>
          </section>
    </main>


    <!-- footer -->
    <?php
    include "layout/footer.html";
    ?>
    <!--  -->
</body>

</html>