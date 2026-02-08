<!doctype html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BAQC - Bangladesh Aspiring QA Community</title>
    <meta name="description" content="Join the Bangladesh Aspiring QA Community (BAQC). Building a Quality Future for Bangladesh through mentorship, workshops, and networking." />
    
    <!-- Social Media Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="BAQC - Bangladesh Aspiring QA Community">
    <meta property="og:description" content="Join the Bangladesh Aspiring QA Community (BAQC). Building a Quality Future for Bangladesh through mentorship, workshops, and networking.">
    <meta property="og:url" content="https://baqc.bd">
    <meta property="og:image" content="https://baqc.bd/assets/images/baqc-icon-512.png">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="BAQC - Bangladesh Aspiring QA Community">
    <meta name="twitter:description" content="Join the Bangladesh Aspiring QA Community (BAQC). Building a Quality Future for Bangladesh through mentorship, workshops, and networking.">
    <meta name="twitter:image" content="https://baqc.bd/assets/images/baqc-icon-512.png">
    
    <!-- Preconnect to CDNs -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net">

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
      @theme {
        --color-baqc-green: #006a4e;
        --color-baqc-red: #d9253a;
        --color-baqc-dark: #0f172a;
        --font-sans: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
    </style>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "What is BAQC?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "BAQC (Bangladesh Aspiring QA Community) is a non-profit initiative dedicated to building a quality future for Bangladesh by empowering QA professionals through mentorship, workshops, and networking."
        }
      }, {
        "@type": "Question",
        "name": "How can I join BAQC?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You can join by filling out our registration form and joining our Discord community. It's the best way to stay updated on events and resources."
        }
      }, {
        "@type": "Question",
        "name": "Is there a fee to join the community?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "No, membership is completely free. We believe in accessible knowledge sharing for everyone."
        }
      }, {
        "@type": "Question",
        "name": "How do I get the personal subdomain?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Registered members who actively build their portfolio can request a personalized username.baqc.bd subdomain to showcase their skills to the world."
        }
      }, {
        "@type": "Question",
        "name": "Who can attend workshops?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Our workshops are open to everyone, from students to seasoned professionals, regardless of their background."
        }
      }, {
        "@type": "Question",
        "name": "How can I be a volunteer?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We welcome passionate individuals! Reach out to us via email at contact@baqc.bd or drop a message in our community group to express your interest."
        }
      }]
    }
    </script>
  </head>
  <body class="font-sans antialiased text-slate-800 bg-white">
    
    <!-- Header -->
    <header class="fixed w-full z-50 bg-white/90 backdrop-blur-sm border-b border-gray-100 transition-all duration-300" id="header">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
          <div class="flex-shrink-0 flex items-center gap-2">
            <!-- Brand -->
            <a href="#" class="flex items-center gap-2">
              <img src="assets/images/baqc-icon-128.png" alt="BAQC Logo" class="w-10 h-10 rounded-full border-2 border-baqc-red">
              <span class="font-bold text-2xl tracking-tighter text-baqc-green">BAQC<span class="text-baqc-red">.bd</span></span>
            </a>
          </div>
          
          <!-- Desktop Menu -->
          <nav class="hidden md:flex space-x-8 items-center">
            <a href="#home" class="text-gray-600 hover:text-baqc-green font-medium transition-colors">Home</a>
            <a href="#workshops" class="text-gray-600 hover:text-baqc-green font-medium transition-colors">Workshops</a>
            <a href="#about" class="text-gray-600 hover:text-baqc-green font-medium transition-colors">About</a>
            <a href="#benefits" class="text-gray-600 hover:text-baqc-green font-medium transition-colors">Benefits</a>
            <a href="https://discord.gg/3mgszv3J" target="_blank" rel="noopener noreferrer" class="px-5 py-2.5 rounded-full bg-baqc-green text-white font-medium hover:bg-green-800 transition-all shadow-md hover:shadow-lg">
              Join Community
            </a>
          </nav>

          <!-- Mobile Menu Button -->
          <div class="md:hidden flex items-center">
            <button id="mobile-menu-btn" class="text-gray-600 hover:text-baqc-green focus:outline-none focus:ring-2 focus:ring-baqc-green rounded-md p-1" aria-label="Open mobile menu">
              <?php include_svg('menu-icon'); ?>
            </button>
          </div>
        </div>
      </div>
      
      <!-- Mobile Menu -->
      <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 absolute w-full left-0 top-20 shadow-lg">
        <div class="px-4 pt-2 pb-6 space-y-1">
          <a href="#home" class="block px-3 py-3 text-base font-medium text-gray-700 hover:text-baqc-green hover:bg-gray-50 rounded-md">Home</a>
          <a href="#workshops" class="block px-3 py-3 text-base font-medium text-gray-700 hover:text-baqc-green hover:bg-gray-50 rounded-md">Workshops</a>
          <a href="#about" class="block px-3 py-3 text-base font-medium text-gray-700 hover:text-baqc-green hover:bg-gray-50 rounded-md">About</a>
          <a href="#benefits" class="block px-3 py-3 text-base font-medium text-gray-700 hover:text-baqc-green hover:bg-gray-50 rounded-md">Benefits</a>
          <div class="pt-4">
             <a href="https://discord.gg/3mgszv3J" target="_blank" rel="noopener noreferrer" class="block w-full text-center px-5 py-3 rounded-md bg-baqc-green text-white font-medium hover:bg-green-800">
              Join Community
            </a>
          </div>
        </div>
      </div>
    </header>
