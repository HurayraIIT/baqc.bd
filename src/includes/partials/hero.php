    <!-- Hero Section -->
    <section id="home" class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
      <!-- Background pattern -->
      <div class="absolute top-0 left-0 right-0 h-full bg-linear-to-b from-green-50/50 to-white -z-10"></div>
      <div class="absolute -top-24 -right-24 w-96 h-96 bg-baqc-green/10 rounded-full blur-3xl"></div>
      <div class="absolute top-1/2 -left-24 w-72 h-72 bg-baqc-red/10 rounded-full blur-3xl"></div>

      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-green-100 text-baqc-green text-sm font-semibold mb-6 border border-green-200">
          <span class="w-2 h-2 rounded-full bg-baqc-red animate-pulse"></span>
          Shaping the future of QA in Bangladesh
        </div>
        
        <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold text-baqc-dark tracking-tight leading-tight mb-6">
          Bangladesh <span class="text-transparent bg-clip-text bg-linear-to-r from-baqc-green to-teal-600">Aspiring QA</span> Community - <span class="decoration-baqc-red decoration-4 underline underline-offset-4">BAQC</span>
        </h1>
        
        <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto mb-10 leading-relaxed">
          Join the largest community of QA professionals. Elevate your skills, network with industry experts, and lead the charge for software excellence.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12">
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSfiUoGuxdoP8XeFNSL2K2BPGZry9Ql3Ac9UFLWq1SLbkK9NWg/viewform?usp=header" target="_blank" class="w-full sm:w-auto px-8 py-4 bg-baqc-red text-white text-lg font-bold rounded-lg shadow-lg hover:bg-red-600 transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2 ring-4 ring-red-100">
            <span>Register Now</span>
            <?php include_svg('register-arrow'); ?>
          </a>
          <a href="https://discord.gg/3mgszv3J" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto px-8 py-4 bg-baqc-green text-white text-lg font-bold rounded-lg shadow-lg hover:bg-green-800 transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2 ring-4 ring-green-100">
            <?php include_svg('discord-icon'); ?>
            <span>Join Discord</span>
          </a>
        </div>

        <div class="flex flex-wrap justify-center gap-4 sm:gap-8 text-sm sm:text-base font-medium text-gray-600">
          <a href="https://www.linkedin.com/company/baqc" target="_blank" class="flex items-center gap-2 hover:text-baqc-green transition-colors group focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-baqc-green rounded-md" aria-label="Visit BAQC LinkedIn Page">
            <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center group-hover:bg-baqc-green group-hover:text-white transition-colors" aria-hidden="true">
              <?php include_svg('linkedin-icon'); ?>
            </span>
            LinkedIn Page
          </a>
          <a href="https://www.linkedin.com/groups/15891061/" target="_blank" class="flex items-center gap-2 hover:text-baqc-green transition-colors group focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-baqc-green rounded-md" aria-label="Join BAQC LinkedIn Group">
            <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center group-hover:bg-baqc-green group-hover:text-white transition-colors" aria-hidden="true">
              <?php include_svg('linkedin-group-icon'); ?>
            </span>
            LinkedIn Group
          </a>
          <a href="https://drive.google.com/file/d/1g4jopeAtDhMzLLhb_HFJWMii7ZwQqNMo/view?usp=drive_link" target="_blank" class="flex items-center gap-2 hover:text-baqc-green transition-colors group focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-baqc-green rounded-md" aria-label="View Community Guidelines">
            <span class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center group-hover:bg-baqc-green group-hover:text-white transition-colors" aria-hidden="true">
              <?php include_svg('community-guidelines-icon'); ?>
            </span>
            Community Guidelines
          </a>
        </div>
      </div>
    </section>
