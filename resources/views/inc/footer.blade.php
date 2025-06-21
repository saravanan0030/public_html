<!-- footer sec -->
<section class="py-5 bg-black rounded-md-5 rounded-5 m-md-5 m-2">
        <div class="container">
            <div class="row">
                <div class="py-5">
                    <img src="\assets\logo.png" width="100" class="img-fluid" alt="logo">
                </div>
            </div>
            <div class="row py-2">
                <div class="col-lg-4 col-12 ">
                    <h2 class="text-blue">Zelvo Engineering Solution Pvt Ltd</h2>
                    <p class="text-white fs-10 opacity-75">Zelvo Energy Solution Pvt Ltd (ZESPL) is your reliable
                        partner in the energy sector, offering end-to-end solutions from inception to execution. We
                        excel in delivering advanced infrastructure for new developments, engineering construction, and
                        industrial maintenance. Our capabilities include specialized services and the supply of a
                        diverse range of electrical and construction materials, with a dedicated emphasis on renewable
                        energy. At ZESPL, we are passionate about driving sustainable innovation to power the future.
                        Partner with us to illuminate the path toward a cleaner, greener tomorrow.</p>
                    <div class="pb-4">
                        <h5 class="text-white">Follows Us</h5>
                        <div class="">
                            <a href="https://www.facebook.com/share/1AEJM1CeMr/"><i class="bi bi-facebook text-theme fs-5"></i></a>
                            <a href="https://www.instagram.com/zelvoenergyofficial?igsh=MW56YWs2cmtja2F3dQ=="><i class="bi bi-instagram mx-2 text-theme fs-5"></i></a>
                            <a href="https://x.com/zelvoenergy"><i class="bi bi-twitter-x me-2 text-theme fs-5"></i></a>
                            <a href="https://www.linkedin.com/company/zelvo-energy-solution-pvt-ltd/"><i class="bi bi-linkedin text-theme fs-5"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12 ">
                    <div class="ms-lg-5 m-0">
                        <h3 class="text-theme">Quick Links</h3>
                        <ul class="list-unstyled">
                            <li class="text-white py-2">
                                <a href="/home" class="text-decoration-none text-white opacity-75">Home</a>
                            </li>
                            <li class="text-white py-2">
                                <a href="/services" class="text-decoration-none text-white opacity-75">Services</a>
                            </li>
                            <li class="text-white py-2">
                                <a href="/engineeringsolutions" class="text-decoration-none text-white opacity-75">Products</a>
                            </li>
                            <li class="text-white py-2">
                                <a href="/contact-us" class="text-decoration-none text-white opacity-75">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-12 ">
                    <div class="ms-lg-5 m-0">
                        <h3 class="text-theme">Links</h3>
                        <ul class="list-unstyled">
                            <li class="text-white py-2">
                                <a href="/about" class="text-decoration-none text-white opacity-75">About us</a>
                            </li>
                            
                            <li class="text-white py-2">
                                <a href="/policy" class="text-decoration-none text-white opacity-75">Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 ">
                    <div class="me-lg-5 m-0">
                        <h3 class="text-theme">Contact Us</h3>
                        <ul class="list-unstyled">
                            <li class="text-white py-2">
                                <h6>Company Location</h6>
                                <p class="fs-10 opacity-75">Zelvo Energy Solution Pvt Ltd No.150/1B, Nethaji Nagar,
                                    Thanakkankulam Main Road,
                                    Thirunagar(PO), Madurai, Tamil Nadu, India, Zip – 625 006</p>
                            </li>
                            <li class="text-white py-2">
                                <h6>Call</h6>
                                <p class="fs-10 opacity-75"> +91 9600 888 600</p>
                            </li>
                            <li class="text-white py-2">
                                <h6>Email</h6>
                                <p class="fs-10 opacity-75">gsr@zelvoenergy.com | business@zelvoenergy.com </p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-dark py-2">
        <div class="container">
            <div class="row text-center">
                <h6 class="text-white fs-10">Copyright © 2025 Zelvo Engineering Solution Pvt Ltd.</h6>
            </div>
        </div>
    </section>



<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!--  -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const lazyImages = document.querySelectorAll('img.lazy');

    if ('IntersectionObserver' in window) {
      let lazyImageObserver = new IntersectionObserver(function (entries, observer) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            let img = entry.target;
            img.src = img.dataset.src; // Replace placeholder with real image
            img.classList.remove('lazy');
            lazyImageObserver.unobserve(img);
          }
        });
      });

      lazyImages.forEach(function (img) {
        lazyImageObserver.observe(img);
      });
    } else {
      // Fallback for old browsers
      lazyImages.forEach(function (img) {
        img.src = img.dataset.src;
      });
    }
  });
</script>

<!-- Initialize Swiper -->
<script>
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress);
          progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
      }
    });
  </script>

<script>
  // Function to animate the count
  function animateCount(el, target) {
    let current = 0;
    const increment = Math.ceil(target / 100);
    const interval = setInterval(() => {
      current += increment;
      if (current >= target) {
        el.textContent = target + '+';
        clearInterval(interval);
      } else {
        el.textContent = current + '+';
      }
    }, 20);
  }

  // Run when the page loads
  window.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.display-5');

    counters.forEach(counter => {
      const text = counter.textContent.trim();
      const number = parseInt(text); // Extract number before '+'
      if (!isNaN(number)) {
        animateCount(counter, number);
      }
    });
  });
</script>
