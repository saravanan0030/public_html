@include('inc/header')


{{-- about --}}

<section class="Arch-banner hero-bg pt-3 mt-5 mx-5 black-shadow-box ">
  <div class="color-overlay"></div>
  <div class="container position-relative z-2">
    <div class="row py-5 align-items-center justify-content-center">
      <div class="col text-center text-light animate-text">
        <h1 class="text-theme f-1 display-6 fw-bold">Leading Electrical Panel Board Distributor In Madurai</h1>
        <p class="w-75 font m-auto py-3 ">
      Zelvo Energy Solution Pvt Ltd (ZESPL) is an ISO 9001:2015 certified company offering end-to-end solutions in the energy sector. Starting in 2011 as M/s. LIT Energy, we have grown into a trusted provider of engineering and management services, including infrastructure development, construction, maintenance, and supply of electrical and sheet metal products.
        </p>
        <p class="w-75 font m-auto f-1 pb-3">
             Established as a corporate entity in 2018, ZESPL is now a leading turnkey developer for wind and solar projects. We manage all aspects of energy projects, from liaisons to construction, ensuring comprehensive support for our clients. Our mission is to be the go-to partner for all energy needs in the renewable sector.
        </p>
        <p class="w-75 font m-auto f-1 pb-4">
    Zelvo Energy Solution Pvt Ltd (ZESPL) works with customers to execute their project by providing all engineering & management services under one roof. 15 years of enriched technical and management experience has been enhanced as a proprietorship firm, firmly known as M/s.Lakshmutha Infratech (LIT) in 2011. We have started our journey with civil foundation work for Wind turbines.
        </p>
          {{-- <p class="w-75 font f-1 m-auto pb-4">
            Later we entered to provide all the service in Wind power projects- Liaisons service from Government authorities, Road work, Electrical line work, Earthing work, Erection work, etc, We became Turnkey wind & solar project developers. ZESPL is having very strong footprints in this field. Our aim is to provide an end-to-end solution from one stop. ZESPL was established as a corporate entity on 09th July 2018.
        </p> --}}
          <button class="explore__card-btn nw-ct-btn re-hero-btn">Reach Out <i class="bi bi-arrow-right"></i></button>
      </div>
    </div>
  </div>
</section>


{{-- Our Certificates --}}
 <section class=" pb-5 mx-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 py-4 text-center">
          <h2 class="text-blue fw-bold fs-2 my-5">
            Our <span class="text-blue ">Certificates</span>
          </h2>
        </div>
      </div>

      <div class="row justify-content-center row-cols-1 row-cols-md-3 g-4">
        <div class="col d-flex justify-content-center">
          <div class="border p-3 bg-white rounded text-center shadow-sm certificate-box animate-slide-up" style="width: 100%; max-width: 300px;">
            <img src="assets/certified/certified-one.png" class="img-fluid" alt="Green Renewable Solutions Corporation Company" />
          </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="border p-3 bg-white rounded text-center shadow-sm certificate-box animate-zoom-in" style="width: 100%; max-width: 300px;">
            <img src="assets/certified/certified-two.png" class="img-fluid" alt="Msme Certified Company - Zelvo Energy Solutions" />
          </div>
        </div>
        <div class="col d-flex justify-content-center">
          <div class="border p-3 bg-white rounded text-center shadow-sm certificate-box animate-flip-in" style="width: 100%; max-width: 300px;">
            <img src="assets/certified/certified-three.png" class="img-fluid" alt="ISO Certified Solar and Wind Power Solutions Company - Zelvo" />
          </div>
        </div>
      </div>
    </div>
  </section>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


{{-- Engineering Professional --}}



<section class="profile-section py-5 mx-5 my-5">
  <div class="container">
    <div class="row align-items-center">


      <div class="col-md-5 text-center mb-4 mb-md-0">
        <img src="assets/logo.png" alt="ZESPL Logo" class="img-fluid profile-img w-50">
      </div>


      <div class="col-md-7">
        <div class="animate-on-scroll">
          <h2 class="text-blue fw-bold mb-4">Engineering Professional </h2>
          <p>
            With extensive <strong>domestic and international experience</strong> in Project Management,
            Construction Management, Control & Instrumentation, and Electrical Systems, we have
            contributed across <strong>UAE, Qatar, Saudi Arabia, Sudan</strong> and <strong>Iran</strong>.
          </p>
          <p>
            In <strong>2011</strong>, <strong>M/s. Lakshmutha Infratech (LIT)</strong> began its journey
            with civil foundation works for wind turbines. Today, we are a <strong>Turnkey Wind & Solar Project Developer</strong>,
            offering <strong>end-to-end solutions</strong>.
          </p>
          <p>
            Our corporate arm, <strong>Zelvo Energy Solution Pvt. Ltd. (ZESPL)</strong>, established on
            <strong>9th July</strong>, is led by seasoned technocrats delivering <strong>high-quality
            electrical solutions</strong>.
          </p>
          <p class="fw-semibold text-dark">
            “We believe there is only one way to earn trust — by delivering quality products on time.”
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const animatedItems = document.querySelectorAll('.animate-on-scroll');

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });

    animatedItems.forEach(item => {
      observer.observe(item);
    });
  });
</script>

{{-- what does zelvo stand for? --}}

 <section class="zelvo-meaning-section py-5 mx-5 my-5">
  <div class="container text-center">
    <h2 class="section-title  animate-on-scroll py-4">What Does <span class="text-blue">ZELVO</span> Stand For?</h2>
    <div class="row justify-content-center">

      <!-- Z -->
      <div class="col-md-4 mb-4 animate-on-scroll delay-1">
        <div class="zelvo-box">
          <h3>Z</h3>
          <p><strong>Zeal & Ambition</strong><br>Driven by passion and purpose to deliver excellence.</p>
        </div>
      </div>

      <!-- E -->
      <div class="col-md-4 mb-4 animate-on-scroll delay-2">
        <div class="zelvo-box">
          <h3>E</h3>
          <p><strong>Endurance & Strength</strong><br>Resilient engineering through challenges.</p>
        </div>
      </div>

      <!-- L -->
      <div class="col-md-4 mb-4 animate-on-scroll delay-3">
        <div class="zelvo-box">
          <h3>L</h3>
          <p><strong>Loyalty & Reliability</strong><br>Trusted delivery, every time.</p>
        </div>
      </div>

      <!-- V -->
      <div class="col-md-4 mb-4 animate-on-scroll delay-4">
        <div class="zelvo-box">
          <h3>V</h3>
          <p><strong>Vision & Determination</strong><br>Pushing boundaries with clear purpose.</p>
        </div>
      </div>

      <!-- O -->
      <div class="col-md-4 mb-4 animate-on-scroll delay-5">
        <div class="zelvo-box">
          <h3>O</h3>
          <p><strong>Operational Professionalism</strong><br>Precision, discipline, and technical integrity.</p>
        </div>
      </div>

    </div>
  </div>
</section>

{{-- what Does zelvo means? --}}

 <section class="zelvo-section  py-5 mx-5 ">
  <div class="container text-center">
    <h2 class="zelvo-title animate-on-scroll py-4">What Does <span class="highlight">ZELVO</span> Mean?</h2>

    <div class="zelvo-description animate-on-scroll delay-1">
      <p><strong>Success</strong> and <strong>Endurance</strong> define ZELVO. We set ambitious goals and pursue them with relentless determination.</p>
      <p>We don't aim to be ordinary. We rise, strive, and never give up — yet, we know how to enjoy life by sometimes taking it less seriously.</p>
      <p>Our people rely on us because we are <strong>responsible</strong>, <strong>reliable</strong>, and committed to doing things the right way.</p>
    </div>

    <div class="mantra-box animate-on-scroll delay-2">
      <h3 class="mantra-title">Our Mantra</h3>
      <div class="mantra-animated-line">
        <span>Right Things</span>
        <span class="symbol">&gt;</span>
        <span>Right Place</span>
        <span class="symbol">&gt;</span>
        <span>Right Time</span>
      </div>
      <p class="mt-3"><strong>Right Things:</strong> We never compromise on quality.</p>
      <p><strong>Right Place:</strong> We focus our solutions where they matter most.</p>
      <p><strong>Right Time:</strong> We deliver with precision, always on time.</p>
      <p class="mt-3">We’re committed to customer satisfaction through quality products and services — powered by trust.</p>
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll('.animate-on-scroll');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target); // One-time animation
        }
      });
    }, { threshold: 0.1 });

    items.forEach(item => observer.observe(item));
  });
</script>



{{-- Customer First --}}
 <section class="customer-first-section py-5 mx-5">
  <div class="container text-center">
    <h2 class="section-heading animate-on-scroll py-4">Customer First</h2>

    <div class="row justify-content-center mt-4">
      <div class="col-lg-9 animate-on-scroll delay-1">
        <p class="lead">
          Being world-class means taking full responsibility in every aspect of our business.
          We work closely with customers and suppliers — not afraid to stand up for what’s right
          to achieve world-class results.
        </p>
      </div>
    </div>

    <h3 class="subheading mt-5 animate-on-scroll delay-2">
      Right Time, Quality and On-Time Delivery is a Mindset
    </h3>
    <div class="row justify-content-center mt-3">
      <div class="col-lg-9 animate-on-scroll delay-3">
        <p class="lead">
          Our performance is the key to success. Delivering the required quality at the right time
          is not just a goal — it's our first priority and mindset.
        </p>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const scrollItems = document.querySelectorAll('.animate-on-scroll');
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.2 });

    scrollItems.forEach(item => observer.observe(item));
  });
</script>

{{-- our services --}}
 <section class="services-section px-5 ">
  <h2 class="py-3 pt-1">Our Services</h2>

  <div class="scroll-container">
    <div class="scroll-track">

      <div class="service-item"><i class="fas fa-bolt"></i><div>Industrial Electrification</div></div>
      <div class="service-item"><i class="fas fa-wind"></i><div>Wind Power Solution</div></div>
      <div class="service-item"><i class="fas fa-solar-panel"></i><div>Solar Power Solution</div></div>
      <div class="service-item"><i class="fas fa-fire"></i><div>Solar Thermal Solution</div></div>
      <div class="service-item"><i class="fas fa-map-marked-alt"></i><div>Land Procurement</div></div>
      <div class="service-item"><i class="fas fa-hard-hat"></i><div>Engineering Consultancy</div></div>
      <div class="service-item"><i class="fas fa-tools"></i><div>Operation & Maintenance</div></div>
      <div class="service-item"><i class="fas fa-certificate"></i><div>Certification Consultancy</div></div>
      <div class="service-item"><i class="fas fa-lightbulb"></i><div>Energy Audit Consultancy</div></div>
      <div class="service-item"><i class="fas fa-industry"></i><div>Erection & Commissioning</div></div>
      <div class="service-item"><i class="fas fa-users-cog"></i><div>Security & Manpower</div></div>


      <div class="service-item"><i class="fas fa-bolt"></i><div>Industrial Electrification</div></div>
      <div class="service-item"><i class="fas fa-wind"></i><div>Wind Power Solution</div></div>
      <div class="service-item"><i class="fas fa-solar-panel"></i><div>Solar Power Solution</div></div>
      <div class="service-item"><i class="fas fa-fire"></i><div>Solar Thermal Solution</div></div>
      <div class="service-item"><i class="fas fa-map-marked-alt"></i><div>Land Procurement</div></div>
    </div>
  </div>

<script>

  const items = document.querySelectorAll('.service-item');
  const observer = new IntersectionObserver(entries => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        setTimeout(() => {
          entry.target.classList.add('show');
        }, i * 100);
      }
    });
  }, {
    threshold: 0.1
  });

  items.forEach(item => observer.observe(item));



</script>


</section>
 <section class="difference-section">
  <div class="icon-box">
    <i class="fas fa-lightbulb"></i>
  </div>
  <h3 class="difference-title">How are we <span class="text-black">different?</span></h3>
  <p class="difference-text">
    We combine <strong>innovation</strong>, <strong>precision</strong>, and
    <strong>dedication</strong> to deliver sustainable energy solutions tailored to your needs.
  </p>
</section>


<style>
     body{
        margin: 0;
        padding: 0;


    }

</style>

@include('inc/footer')
