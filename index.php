<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Header</title>
    <link rel="stylesheet" href="layout/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"
      rel="stylesheet"
    />
  </head>

  <body class="bg-gray-100 text-gray-900">
    <header>
      <nav>
        <div class="Logo">
          <img src="img/logoputihtest.png" alt="Logo Website" width="100" />
        </div>
        <ul>
          <li><a href="index.php">About</a></li>
          <li><a href="about.html">Rate</a></li>
          <li><a href="contact.html">features</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">register</a></li>
        </ul>
      </nav>
    </header>
    <!-- About -->
    <main>
      <section class="bg-white py-20 pl-9">
        <div class="container mx-auto flex flex-nowrap md:flex-row items-start">
          <div class="md:w-1/2">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
              Find Your Dream Job and Connect with Other People With UNIONE
            </h1>
            <p class="text-gray-700 mb-6 font-bold">
              today’s competitive job market, finding the right opportunity and
              building a strong professional network can make all the
              difference.
              <styles>
                <b class="text-black">Unione</b>
              </styles>
              is designed to simplify and enhance your job search experience
              while helping you create valuable connections. Here’s how
              <styles>
                <b class="text-black">Unione</b>
              </styles>
              can revolutionize your career journey.
            </p>
            <a href="login.html">
              <button
                class="px-6 py-3 bg-black text-white font-semibold rounded-lg hover:bg-blue-600"
              >
                Get Started
              </button>
            </a>
          </div>
          <div class="md:w-1/2 flex justify-center mt-10 md:mt-0">
            <img src="img/ilustrasion-landing-page.png" alt="Hero Image" />
          </div>
        </div>
        <!-- End About -->

        <!-- Partnership -->
      </section>
      <section class="bg-black py-10">
        <p class="text-white text-center p-2 font-bold text-lg">Our Clients</p>
        <div
          class="container mx-auto flex items-center justify-around space-x-2.5 pt-6"
        >
          <img src="img/microsoft.png" alt="Logo 1" class="h-10" />
          <img src="img/Facebook.png" alt="Logo 2" class="h-10" />
          <img src="img/microsoft.png" alt="Logo 3" class="h-10" />
          <img src="img/google.png" alt="Logo 4" class="h-10" />
          <img src="img/Facebook.png" alt="Logo 5" class="h-10" />
        </div>
      </section>
      <!--End Partnership -->

      <!-- Rating -->
      <section class="py-16 bg-white">
        <div class="flex justify-center space-x-4">
          <!-- Card 1 -->
          <div
            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
          >
            <div class="flex justify-end px-4 pt-4">
              <button
                id="dropdownButton"
                data-dropdown-toggle="dropdown"
                class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                type="button"
              >
                <span class="sr-only">Open dropdown</span>
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  viewBox="0 0 16 3"
                >
                  <path
                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"
                  />
                </svg>
              </button>
              <!-- Dropdown menu -->
              <div
                id="dropdown"
                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
              >
                <ul class="py-2" aria-labelledby="dropdownButton">
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                      >Edit</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                      >Export Data</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                      >Delete</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="flex flex-col items-center pb-10">
              <img
                class="w-24 h-24 mb-3 rounded-full shadow-lg object-cover"
                src="img/landing-page photo.png"
                alt="Bonnie image"
              />
              <h5
                class="mb-1 text-xl font-medium text-gray-900 dark:text-white"
              >
                Bonnie Green
              </h5>
              <p class="text-yellow-500">★★★★★</p>
              <span class="text-sm text-gray-500 dark:text-gray-400"
                >Visual Designer</span
              >
              <div class="flex mt-4 md:mt-6">
                <a
                  href="#"
                  class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >Info</a
                >
                <a
                  href="#"
                  class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                  >profile</a
                >
              </div>
              <p class="text-white p-10 Center">
                "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse
                minus veritatis dicta quis quo. Omnis amet perferendis dolorum
                eum sapiente alias modi, magni laudantium tenetur ullam illo
                dolore reiciendis molestiae!"
              </p>
            </div>
          </div>
          <!-- Card 2 -->
          <div
            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"
          >
            <div class="flex justify-end px-4 pt-4">
              <button
                id="dropdownButton"
                data-dropdown-toggle="dropdown"
                class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                type="button"
              >
                <span class="sr-only">Open dropdown</span>
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor"
                  viewBox="0 0 16 3"
                >
                  <path
                    d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"
                  />
                </svg>
              </button>
              <!-- Dropdown menu -->
              <div
                id="dropdown"
                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
              >
                <ul class="py-2" aria-labelledby="dropdownButton">
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                      >Edit</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                      >Export Data</a
                    >
                  </li>
                  <li>
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"
                      >Delete</a
                    >
                  </li>
                </ul>
              </div>
            </div>
            <div class="flex flex-col items-center pb-10">
              <img
                class="w-24 h-24 mb-3 rounded-full shadow-lg object-cover fit"
                src="img/review.png"
                alt="Bonnie image"
              />
              <h5
                class="mb-1 text-xl font-medium text-gray-900 dark:text-white"
              >
                anton Greenfields
              </h5>
              <p class="text-yellow-500">★★★★★</p>
              <span class="text-sm text-gray-500 dark:text-gray-400 font-bold"
                >Visual Designer</span
              >
              <div class="flex mt-4 md:mt-6">
                <a
                  href="#"
                  class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  >info</a
                >
                <a
                  href="#"
                  class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                  >profile</a
                >
              </div>
              <p class="text-white p-10 Center">
                "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse
                minus veritatis dicta quis quo. Omnis amet perferendis dolorum
                eum sapiente alias modi, magni laudantium tenetur ullam illo
                dolore reiciendis molestiae!"
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- End Rating -->

      <!-- feature -->
      <section class="py-16 bg-gray-50 pl-9">
        <div class="container mx-auto text-center">
          <h2 class="text-3xl font-bold mb-8">Our Features</h2>
          <div class="grid md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
              <h3 class="text-xl font-semibold mb-2">Jobs</h3>
              <p class="text-gray-600">
                Maximize your job search and networking potential with our
                powerful platform! Our job search feature allows you to filter
                opportunities based on salary, job title, graduation status, and
                specific job criteria such as full-time, part-time, or
                internships.
              </p>
            </div>
            <!-- Feature 2 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
              <h3 class="text-xl font-semibold mb-2">Courses</h3>
              <p class="text-gray-600">
                Enhance your skills and boost your career prospects with our
                integrated course feature! Our platform offers a variety of
                video lessons that you can watch at your own pace, covering
                essential topics to help you excel in your chosen field.
              </p>
            </div>
            <!-- Feature 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
              <h3 class="text-xl font-semibold mb-2">Connections</h3>
              <p class="text-gray-600">
                Enhance your career journey with our platform's robust
                networking feature! Connect with friends and expand your
                professional network effortlessly. Our platform allows you to
                build relationships with colleagues, industry leaders, and
                like-minded professionals.
              </p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
              <h3 class="text-xl font-semibold mb-2">Connections</h3>
              <p class="text-gray-600">
                Join our vibrant job community groups and expand your
                professional network! Our platform features specialized groups
                where you can connect with users who share similar career
                interests and goals. Engage in discussions, share insights, and
                stay updated with relevant posts.
              </p>
            </div>
            <!-- Feature 5 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
              <h3 class="text-xl font-semibold mb-2">Connections</h3>
              <p class="text-gray-600">
                Access the latest information about the job market and stay
                updated on trending topics in the professional world. Our news
                section provides insights into industry developments, emerging
                career opportunities, and tips for career growth
              </p>
            </div>
            <!-- Feature 6 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
              <h3 class="text-xl font-semibold mb-2">Connections</h3>
              <p class="text-gray-600">
                Streamline your job application process with our platform’s
                personalized CV download feature! Easily create and download a
                professional CV based on your profile, ensuring all your skills
                and experiences are highlighted effectively.
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
  <!-- footer -->
  <footer>
    <hr />
    <footer class="footer">
      <footer class="footer bg-base-300 text-white p-10">
        <nav>
          <h6 class="footer-title">Services</h6>
          <a class="link link-hover">Branding</a>
          <a class="link link-hover">Design</a>
          <a class="link link-hover">Marketing</a>
          <a class="link link-hover">Advertisement</a>
        </nav>
        <nav>
          <h6 class="footer-title">Company</h6>
          <a class="link link-hover">About us</a>
          <a class="link link-hover">Contact</a>
          <a class="link link-hover">Jobs</a>
          <a class="link link-hover">Press kit</a>
        </nav>
        <nav>
          <h6 class="footer-title">Social</h6>
          <div class="grid grid-flow-col gap-4">
            <a>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                class="fill-current"
              >
                <path
                  d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"
                ></path>
              </svg>
            </a>
            <a>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                class="fill-current"
              >
                <path
                  d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"
                ></path>
              </svg>
            </a>
            <a>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                class="fill-current"
              >
                <path
                  d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"
                ></path>
              </svg>
            </a>
          </div>
        </nav>
      </footer>
    </footer>
  </footer>
</html>
=======

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