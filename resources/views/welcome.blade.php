<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WareFlow</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Fonts -->
            <link href="https://fonts.googleapis.com" rel="preconnect">
            <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Vendor CSS Files -->
            <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
            <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
            <link href="{{ asset('vendor/aos/aos.css" rel="stylesheet') }}">
            <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
            <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

            <!-- Main CSS File -->
            <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>
    <body class="index-page">
        <header id="header" class="header d-flex align-items-center fixed-top">
            <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
        
              <a href="#hero" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">WareFlow</h1><span>.</span>
              </a>
        
              <nav id="navmenu" class="navmenu">
                <ul>
                  <li><a href="#hero" class="active">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="#services">Services</a></li>
                  <li><a href="#pricing">Pricing</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
              </nav>
        
                              <!-- For Backpack Login -->
                        <a href="{{ url('admin/login') }}">Login</a>

                           <!-- For Backpack Register (if enabled) -->
                        <a href="{{ url('admin/register') }}">Register</a>

            </div>
          </header>

        <main class="main">

            <!-- Hero Section -->
            <section id="hero" class="hero section dark-background">
        
              <img src="{{ asset('img/hero-bg.webp') }}" alt="" data-aos="fade-in"> 
        
              <div class="container">
                <div class="row">
                  <div class="col-lg-10">
                    <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Our Website</h2>
                    <p data-aos="fade-up" data-aos-delay="200">We Will Help You To Manege Your warehouse</p>
                  </div>
                </div>
              </div>
        
            </section><!-- /Hero Section -->
        
            <!-- About Section -->
            <section id="about" class="about section light-background">
        
              <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5">
        
                  <div class="col-xl-5 content">
                    <h3>About Us</h3>
                    <h2>Welcome to WareFlow, where efficiency meets reliability in warehouse operations</h2>
                    <p> Our platform is designed to simplify inventory management, optimize storage, and streamline workflows, helping businesses of all sizes enhance their warehouse operations.</p>
                  </div>
        
                  <div class="col-xl-7">
                    <div class="row gy-4 icon-boxes">
        
                      <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                          <i class="bi bi-buildings"></i>
                          <h3>We understand Your challenges</h3>
                          <p>we understand the challenges of managing inventory, orders, and warehouse spaces. </p>
                        </div>
                      </div> <!-- End Icon Box -->
        
                      <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                          <i class="bi bi-clipboard-pulse"></i>
                          <h3>real-time tracking</h3>
                          <p> Whether you're a small business or a large enterprise, our system adapts to your needs, 
                            offering real-time tracking, automated stock control, and detailed reporting.</p>
                        </div>
                      </div> <!-- End Icon Box -->
        
                      <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon-box">
                          <i class="bi bi-command"></i>
                          <h3>Developed Solutions</h3>
                          <p>That's why we've developed a solution tailored to improve accuracy, reduce costs, and ensure timely deliveries</p>
                        </div>
                      </div> <!-- End Icon Box -->
        
                      <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                          <i class="bi bi-graph-up-arrow"></i>
                          <h3>Helping Tools</h3>
                          <p>Our mission is to empower warehouse managers with the tools to make informed decisions, minimize human errors, and ensure smooth operations.</p>
                        </div>
                      </div> <!-- End Icon Box -->
        
                    </div>
                  </div>
        
                </div>
              </div>
        
            </section><!-- /About Section -->
        
            <!-- Stats Section -->
            <section id="stats" class="stats section dark-background">
        
              <img src="{{ asset('img/stats-bg.jpg') }}" alt="" data-aos="fade-in">
        
              <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        
                <div class="row gy-4">
        
                  <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                      <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                      <p>Clients</p>
                    </div>
                  </div><!-- End Stats Item -->
        
                  <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                      <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                      <p>Projects</p>
                    </div>
                  </div><!-- End Stats Item -->
        
                  <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                      <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
                      <p>Hours Of Support</p>
                    </div>
                  </div><!-- End Stats Item -->
        
                  <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                      <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                      <p>Workers</p>
                    </div>
                  </div><!-- End Stats Item -->
        
                </div>
        
              </div>
        
            </section><!-- /Stats Section -->
        
            <!-- Services Section -->
            <section id="services" class="services section">
        
              <!-- Section Title -->
              <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>We offer a comprehensive suite of services designed to streamline your warehouse operations and optimize inventory management.</p>
              </div><!-- End Section Title -->
        
              <div class="container">
        
                <div class="row gy-4">
        
                  <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex">
                      <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                      <div>
                        <h4 class="title"><a href="services-details.html" class="stretched-link">Inventory Management</a></h4>
                        <p class="description">Real-time tracking of stock levels,Automated restocking notifications,Detailed product categorization and labeling.</p>
                      </div>
                    </div>
                  </div>
                  <!-- End Service Item -->
        
                  <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item d-flex">
                      <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                      <div>
                        <h4 class="title"><a href="services-details.html" class="stretched-link">Order Fulfillment</a></h4>
                        <p class="description">Seamless order processing and tracking,Picking, packing, and shipping integration</p>
                      </div>
                    </div>
                  </div><!-- End Service Item -->
        
                  <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item d-flex">
                      <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                      <div>
                        <h4 class="title"><a href="services-details.html" class="stretched-link">Warehouse Optimization</a></h4>
                        <p class="description">Intelligent space utilization for maximizing storage,Automated suggestions for rearranging stock to optimize picking routes.</p>
                      </div>
                    </div>
                  </div><!-- End Service Item -->
        
                  <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item d-flex">
                      <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                      <div>
                        <h4 class="title"><a href="services-details.html" class="stretched-link">Reporting and Analytics</a></h4>
                        <p class="description">Comprehensive reports on stock movement, order trends, and warehouse efficiency.</p>
                      </div>
                    </div>
                  </div><!-- End Service Item -->
        
                  <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item d-flex">
                      <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                      <div>
                        <h4 class="title"><a href="services-details.html" class="stretched-link">Barcode Scanning and Integration</a></h4>
                        <p class="description">asy integration with barcode scanning devices for rapid stock updates,Support for QR codes and RFID for enhanced tracking.</p>
                      </div>
                    </div>
                  </div><!-- End Service Item -->
        
                  <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item d-flex">
                      <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                      <div>
                        <h4 class="title"><a href="services-details.html" class="stretched-link">Multi-Location Management</a></h4>
                        <p class="description">Manage multiple warehouses or storage locations from a single platform.</p>
                      </div>
                    </div>
                  </div><!-- End Service Item -->
        
                </div>
        
              </div>
        
            </section><!-- /Services Section -->
        
        
            <!-- Pricing Section -->
            <section id="pricing" class="pricing section">
        
              <!-- Section Title -->
              <div class="container section-title" data-aos="fade-up">
                <h2>Pricing</h2>
                <p>Discover our flexible pricing plans designed to provide exceptional value for your warehouse management needs.</p>
              </div><!-- End Section Title -->
        
              <div class="container" data-aos="zoom-in" data-aos-delay="100">
        
                <div class="row g-4">
        
                  <div class="col-lg-4">
                    <div class="pricing-item">
                      <h3>Free Plan</h3>
                      <div class="icon">
                        <i class="bi bi-box"></i>
                      </div>
                      <h4><sup>$</sup>0<span> / month</span></h4>
                      <ul>
                        <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                        <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                        <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                        <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
                        <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                      </ul>
                      <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                    </div>
                  </div><!-- End Pricing Item -->
        
                  <div class="col-lg-4">
                    <div class="pricing-item featured">
                      <h3>Business Plan</h3>
                      <div class="icon">
                        <i class="bi bi-rocket"></i>
                      </div>
        
                      <h4><sup>$</sup>29<span> / month</span></h4>
                      <ul>
                        <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                        <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                        <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                        <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                        <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                      </ul>
                      <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                    </div>
                  </div><!-- End Pricing Item -->
        
                  <div class="col-lg-4">
                    <div class="pricing-item">
                      <h3>Developer Plan</h3>
                      <div class="icon">
                        <i class="bi bi-send"></i>
                      </div>
                      <h4><sup>$</sup>49<span> / month</span></h4>
                      <ul>
                        <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
                        <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
                        <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
                        <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
                        <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                      </ul>
                      <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
                    </div>
                  </div><!-- End Pricing Item -->
        
                </div>
        
              </div>
        
            </section><!-- /Pricing Section -->
        
        
          </main>

         <!-- Vendor JS Files -->
            <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
            <script src="{{ asset('vendor/aos/aos.js') }}"></script>
            <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
            <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
            <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
            <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
            <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>

        <!-- Main JS File -->
           <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
