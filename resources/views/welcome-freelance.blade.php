<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- SEO Meta Tags -->
  <meta name="description" content="Développeur Web Freelance spécialisé en Laravel, Livewire et Vue.js. Création d'applications web sur mesure, sites vitrines optimisés et refonte de projets existants. Expertise PHP & JavaScript pour vos projets digitaux.">
  <meta name="author" content="{{ $user->name ?? 'Xavier Jeanne' }}">
  <meta name="keywords" content="développeur freelance, Laravel, Livewire, Vue.js, PHP, applications web, développement sur mesure, refonte site web, optimisation performances, {{ $user->name ?? 'Xavier Jeanne' }}">
  <meta name="robots" content="index, follow">
  <meta name="googlebot" content="index, follow">
  <meta name="theme-color" content="#0F172A">

  <!-- Canonical URL -->
  <link rel="canonical" href="{{ url()->current() }}">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="{{ $user->name ?? 'Xavier Jeanne' }} | Développeur Web Freelance Full Stack">
  <meta property="og:description" content="Développeur Web Freelance spécialisé en Laravel, Livewire et Vue.js. Création d'applications web performantes et maintenables pour vos projets digitaux.">
  <meta property="og:image" content="{{ asset('logo.png') }}">
  <meta property="og:locale" content="fr_FR">
  <meta property="og:site_name" content="{{ $user->name ?? 'Xavier Jeanne' }} - Développeur Freelance">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="{{ url()->current() }}">
  <meta name="twitter:title" content="{{ $user->name ?? 'Xavier Jeanne' }} | Développeur Web Freelance">
  <meta name="twitter:description" content="Développeur Web Freelance spécialisé en Laravel, Livewire et Vue.js. Création d'applications web performantes.">
  <meta name="twitter:image" content="{{ asset('logo.png') }}">

  <title>{{ $user->name ?? 'Xavier Jeanne' }} | Développeur Web Freelance Full Stack - Laravel, Livewire, Vue.js</title>
  <link rel="icon" type="image/x-icon" href="{{asset('logo.png')}}">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @php use Illuminate\Support\Facades\Storage; @endphp

  <!-- Schema.org JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "{{ $user->name ?? 'Xavier Jeanne' }}",
    "jobTitle": "Développeur Web Freelance Full Stack",
    "description": "{{ $user->description ?? 'Développeur Web Freelance spécialisé en Laravel, Livewire et Vue.js' }}",
    "url": "{{ url()->current() }}",
    "email": "{{ $user->email ?? '' }}",
    "sameAs": [
      @if($user->linkedin ?? false)"{{ $user->linkedin }}"@endif
      @if($user->github ?? false)"{{ $user->github }}"@endif
    ],
    "knowsAbout": [
      "Laravel",
      "Livewire",
      "Vue.js",
      "PHP",
      "JavaScript",
      "MySQL",
      "Tailwind CSS",
      "Développement Web",
      "Applications Web"
    ],
    "hasOccupation": {
      "@type": "Occupation",
      "name": "Développeur Web Freelance",
      "occupationLocation": {
        "@type": "Country",
        "name": "France"
      }
    }
  }
  </script>
</head>
<body class="bg-[#0F172A] text-[#E0E7FF] font-sans antialiased">

<!-- Sidebar flottant gauche (desktop) -->
<aside id="sidebar"
       class="hidden md:flex fixed top-1/2 left-4 transform -translate-y-1/2 flex-col space-y-4
              bg-[#1E293B] border-2 border-[#334155] shadow-2xl rounded-xl p-3 z-50 transition-all duration-300
              hover:border-[#06B6D4]">
  <!-- Services -->
  <a href="#services"
     class="relative group text-[#A5B4FC] p-2 rounded-lg transition-all duration-300
            hover:bg-[#06B6D4] hover:text-white hover:scale-110"
     aria-label="Services">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
    </svg>
    <span class="absolute left-12 top-1/2 -translate-y-1/2 bg-[#1E293B] border border-[#334155] text-white text-sm px-3 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-50">
      Services
    </span>
  </a>

  <!-- Stack -->
  <a href="#stack"
     class="relative group text-[#A5B4FC] p-2 rounded-lg transition-all duration-300
            hover:bg-[#06B6D4] hover:text-white hover:scale-110"
     aria-label="Stack Technique">
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 100 100">
      <path d="M43.84,46.76a5.35,5.35,0,1,1,5.46-5.34A5.41,5.41,0,0,1,43.84,46.76Z" fill-rule="evenodd"/>
      <path d="M77.33,55.7,70.06,44.9V44A24,24,0,0,0,46.19,20a22,22,0,0,0-5.67.7A23.89,23.89,0,0,0,22.31,44a21.92,21.92,0,0,0,3.58,12.7c4.18,6,7,10.8,5.27,17.3a4.58,4.58,0,0,0,.9,4.2A4.43,4.43,0,0,0,35.74,80h19.6A4.72,4.72,0,0,0,60,76.2a5,5,0,0,0,.2-1.2,2.37,2.37,0,0,1,2.39-2H64a4.72,4.72,0,0,0,4.68-3.4A41.31,41.31,0,0,0,70.16,60h5.17a2.78,2.78,0,0,0,2.19-1.6A2.86,2.86,0,0,0,77.33,55.7Z" fill-rule="evenodd"/>
    </svg>
    <span class="absolute left-12 top-1/2 -translate-y-1/2 bg-[#1E293B] border border-[#334155] text-white text-sm px-3 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-50">
      Stack Technique
    </span>
  </a>

  <!-- Projets -->
  <a href="#projects"
     class="relative group text-[#A5B4FC] p-2 rounded-lg transition-all duration-300
            hover:bg-[#06B6D4] hover:text-white hover:scale-110"
     aria-label="Projets">
    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
      <path d="M4 12H3V8C3 6.89543 3.89543 6 5 6H9M4 12V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V12M4 12H10M20 12H21V8C21 6.89543 20.1046 6 19 6H15M20 12H14M14 12V10H10V12M14 12V14H10V12M9 6V5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V6M9 6H15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <span class="absolute left-12 top-1/2 -translate-y-1/2 bg-[#1E293B] border border-[#334155] text-white text-sm px-3 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-50">
      Projets
    </span>
  </a>

  <!-- À propos -->
  <a href="#about"
     class="relative group text-[#A5B4FC] p-2 rounded-lg transition-all duration-300
            hover:bg-[#06B6D4] hover:text-white hover:scale-110"
     aria-label="À propos">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5.121 17.804A7 7 0 0112 15a7 7 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
    </svg>
    <span class="absolute left-12 top-1/2 -translate-y-1/2 bg-[#1E293B] border border-[#334155] text-white text-sm px-3 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-50">
      À propos
    </span>
  </a>

  <!-- Contact -->
  <a href="#contact"
     class="relative group text-[#A5B4FC] p-2 rounded-lg transition-all duration-300
            hover:bg-[#06B6D4] hover:text-white hover:scale-110"
     aria-label="Contact">
    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none">
      <path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <span class="absolute left-12 top-1/2 -translate-y-1/2 bg-[#1E293B] border border-[#334155] text-white text-sm px-3 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-50">
      Contact
    </span>
  </a>
</aside>

<!-- Bulle flottante mobile -->
<button id="menuBubble" class="fixed top-4 right-4 bg-[#06B6D4] text-white p-3 rounded-full shadow-lg hover:bg-[#0891B2] hover:scale-110 transition-all duration-300 md:hidden z-50">
  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
  </svg>
</button>

<!-- Menu mobile -->
<div id="mobileMenu" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40">
  <div class="absolute top-0 right-0 w-3/4 max-w-sm h-full bg-[#1E293B] shadow-lg p-6 transform translate-x-full transition-transform duration-300" id="mobileMenuPanel">
    <button id="closeMenu" class="mb-6 text-[#E0E7FF] hover:text-[#06B6D4] transition-colors">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>
    <nav class="flex flex-col space-y-4 text-[#E0E7FF]">
      <a href="#hero" class="hover:text-[#06B6D4] transition-colors py-2">Accueil</a>
      <a href="#services" class="hover:text-[#06B6D4] transition-colors py-2">Services</a>
      <a href="#stack" class="hover:text-[#06B6D4] transition-colors py-2">Stack Technique</a>
      <a href="#projects" class="hover:text-[#06B6D4] transition-colors py-2">Projets</a>
      <a href="#about" class="hover:text-[#06B6D4] transition-colors py-2">À propos</a>
      <a href="#process" class="hover:text-[#06B6D4] transition-colors py-2">Process</a>
      <a href="#contact" class="hover:text-[#06B6D4] transition-colors py-2">Contact</a>
    </nav>
  </div>
</div>

<!-- ========================================
     1️⃣ SECTION HERO - ACCROCHE IMMÉDIATE
     ======================================== -->
<section id="hero" class="min-h-screen flex items-center justify-center px-6 py-20">
  <div class="max-w-4xl mx-auto text-center fade-in">
    <div class="mb-8 animate-fade-in-down">
      <h1 class="text-5xl md:text-7xl font-bold text-[#E0E7FF] mb-6">
        Développeur Web Freelance Full Stack
      </h1>
      <div class="flex items-center justify-center gap-3 text-[#8B5CF6] text-xl md:text-2xl mb-8 flex-wrap animate-fade-in-up">
        {{$user->name }}
      </div>
    </div>

    <p class="text-[#94A3B8] text-xl md:text-2xl leading-relaxed mb-12 max-w-2xl mx-auto animate-fade-in">
      Création d'applications web performantes et évolutives.<br>
      Code propre, maintenable et optimisé SEO.<br>
      <span class="text-[#A5B4FC]">Disponible pour vos projets digitaux en France.</span>
    </p>

    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 animate-fade-in-up">
      <a href="#contact"
         class="px-8 py-4 bg-[#06B6D4] text-white rounded-xl font-semibold text-lg
                hover:bg-[#0891B2] transition-all duration-300
                hover:shadow-lg hover:shadow-[#06B6D4]/30
                hover:-translate-y-1 hover:scale-105 transform
                w-full sm:w-auto text-center">
        Me contacter
      </a>
      <a href="#projects"
         class="px-8 py-4 bg-transparent border-2 border-[#334155] text-[#E0E7FF] rounded-xl font-semibold text-lg
                hover:border-[#06B6D4] hover:text-[#06B6D4] transition-all duration-300
                hover:-translate-y-1 transform
                w-full sm:w-auto text-center">
        Voir les projets
      </a>
    </div>
  </div>
</section>

<!-- ========================================
     2️⃣ SECTION SERVICES - CADRAGE DES MISSIONS
     ======================================== -->
<section id="services" class="bg-[#1E293B] py-20 px-6">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-4xl font-bold text-center text-[#E0E7FF] mb-16 fade-in">
      Services
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Service 1: Site vitrine -->
      <div class="bg-[#0F172A] rounded-2xl p-8 border-2 border-[#334155] hover:border-[#06B6D4] transition-all duration-300 hover:-translate-y-2 fade-in">
        <div class="text-[#06B6D4] mb-4">
          <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-[#E0E7FF] mb-4">
          Site web vitrine
        </h3>
        <p class="text-[#94A3B8] mb-6 leading-relaxed">
          Créez une présence en ligne professionnelle qui convertit vos visiteurs en clients. Site vitrine moderne, rapide et optimisé pour le référencement naturel (SEO). Design responsive adapté à tous les écrans (mobile, tablette, desktop).
        </p>
        <div class="text-sm text-[#8B5CF6] space-y-2">
          <p>✓ Laravel / WordPress sur mesure</p>
          <p>✓ Design responsive multi-écrans</p>
          <p>✓ SEO optimisé pour Google</p>
          <p>✓ Hébergement & maintenance inclus</p>
        </div>
      </div>

      <!-- Service 2: Application sur mesure -->
      <div class="bg-[#0F172A] rounded-2xl p-8 border-2 border-[#334155] hover:border-[#06B6D4] transition-all duration-300 hover:-translate-y-2 fade-in">
        <div class="text-[#06B6D4] mb-4">
          <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-[#E0E7FF] mb-4">
          Application web sur mesure
        </h3>
        <p class="text-[#94A3B8] mb-6 leading-relaxed">
          Développement d'applications web métier adaptées à vos processus et contraintes spécifiques. Solutions SaaS, CRM, ERP, plateformes e-commerce ou outils de gestion interne avec interfaces modernes et intuitives.
        </p>
        <div class="text-sm text-[#8B5CF6] space-y-2">
          <p>✓ Laravel + Livewire / Vue.js</p>
          <p>✓ Architecture scalable & sécurisée</p>
          <p>✓ API REST & intégrations tierces</p>
          <p>✓ Dashboard admin personnalisé</p>
        </div>
      </div>

      <!-- Service 3: Amélioration & reprise -->
      <div class="bg-[#0F172A] rounded-2xl p-8 border-2 border-[#334155] hover:border-[#06B6D4] transition-all duration-300 hover:-translate-y-2 fade-in">
        <div class="text-[#06B6D4] mb-4">
          <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M13 10V3L4 14h7v7l9-11h-7z"/>
          </svg>
        </div>
        <h3 class="text-2xl font-bold text-[#E0E7FF] mb-4">
          Amélioration & reprise de projet
        </h3>
        <p class="text-[#94A3B8] mb-6 leading-relaxed">
          Audit, optimisation et modernisation de vos applications existantes. Correction de bugs, amélioration des performances, mise à jour des dépendances, refonte UI/UX et migration vers des technologies récentes pour prolonger la vie de votre projet.
        </p>
        <div class="text-sm text-[#8B5CF6] space-y-2">
          <p>✓ Audit de code & sécurité</p>
          <p>✓ Correction bugs & maintenance</p>
          <p>✓ Refactoring & modernisation</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========================================
     3️⃣ SECTION STACK TECHNIQUE - CRÉDIBILITÉ
     ======================================== -->
<section id="stack" class="bg-[#0F172A] py-20 px-6">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-4xl font-bold text-center text-[#E0E7FF] mb-16 fade-in">
      Compétences & Stack Technique
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-5 gap-8">
      @forelse($skills as $skill)
      <div class="bg-[#1E293B] rounded-2xl p-6 border-2 border-[#334155] hover:border-[#06B6D4] transition-all duration-300 hover:-translate-y-2 fade-in flex flex-col items-center justify-center text-center">
        <!-- Logo -->
        <div class="mb-4 w-16 h-16 flex items-center justify-center">
          <img src="{{ $skill->logo ? Storage::url($skill->logo) : asset('logo.png') }}"
               alt="Logo {{ $skill->title }} - Compétence technique {{ $user->name ?? 'développeur freelance' }}"
               title="{{ $skill->title }}"
               loading="lazy"
               class="w-full h-full object-contain">
        </div>

        <!-- Titre -->
        <h3 class="font-bold text-[#E0E7FF] text-lg">
          {{ $skill->title }}
        </h3>
      </div>
      @empty
      <div class="col-span-full text-center text-[#64748B] py-12">
        Compétences en cours de mise à jour
      </div>
      @endforelse
    </div>
  </div>
</section>
<section id="projects" class="bg-[#1E293B] py-20 px-6">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-4xl font-bold text-center text-[#E0E7FF] mb-16 fade-in">
      Projets
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      @foreach($realisations as $realisation)
      <div class="bg-[#0F172A] rounded-2xl p-8 border-2 border-[#334155] hover:border-[#06B6D4] transition-all duration-300 hover:-translate-y-2 fade-in">
        <div class="mb-6">
          <h3 class="text-2xl font-bold text-[#E0E7FF] mb-2">
            {{ $realisation->title }}
          </h3>
          <div class="text-[#06B6D4] text-sm mb-3">
            Stack: {{ $realisation->skills->pluck('title')->join(' · ') }}
          </div>
        </div>

        <p class="text-[#94A3B8] leading-relaxed mb-6">
          {{ $realisation->description }}
        </p>

        @if($realisation->company)
        <p class="text-sm text-[#64748B] mb-6">
          Client: <span class="text-[#A5B4FC]">{{ $realisation->company }}</span>
        </p>
        @endif

        @if($realisation->link)
        <a href="{{ $realisation->link }}" target="_blank"
           class="inline-flex items-center gap-2 text-[#06B6D4] hover:text-[#0891B2] transition-colors">
          <span>Voir détails</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
          </svg>
        </a>
        @endif
      </div>
      @endforeach

      @if($realisations->count() === 0)
      <div class="col-span-full text-center text-[#64748B] py-12">
        Projets en cours de mise à jour
      </div>
      @endif
    </div>
  </div>
</section>

<!-- ========================================
     5️⃣ SECTION À PROPOS - CONFIANCE
     ======================================== -->
<section id="about" class="bg-[#0F172A] py-20 px-6">
  <div class="max-w-4xl mx-auto fade-in">
    <h2 class="text-4xl font-bold text-center text-[#E0E7FF] mb-12">
      À propos de moi
    </h2>

    <div class="grid md:grid-cols-2 gap-12 mb-12">
      <div class="space-y-6">
        <h3 class="text-2xl font-bold text-[#8B5CF6]">
          Mon parcours
        </h3>
        <p class="text-[#94A3B8] text-lg leading-relaxed">
          {{ $user->description ?? 'Développeur web passionné avec plusieurs années d\'expérience dans la création d\'applications web modernes. Spécialisé dans l\'écosystème Laravel et les frameworks JavaScript, j\'accompagne entreprises et startups dans leurs projets digitaux.' }}
        </p>
        @if($experiences->count() > 0)
        <div class="space-y-3">
          <h4 class="text-lg font-semibold text-[#E0E7FF]">Expériences clés</h4>
          @foreach($experiences->take(2) as $experience)
          <div class="border-l-2 border-[#8B5CF6] pl-4">
            <p class="text-[#A5B4FC] font-semibold">{{ $experience->title }}</p>
            <p class="text-[#64748B] text-sm">{{ $experience->company }} · {{ $experience->start_date ? \Carbon\Carbon::parse($experience->start_date)->format('Y') : '' }}</p>
          </div>
          @endforeach
        </div>
        @endif
      </div>

      <div class="space-y-6">
        <h3 class="text-2xl font-bold text-[#8B5CF6]">
          Mon approche
        </h3>
        <div class="space-y-4 text-[#94A3B8] text-lg leading-relaxed">
          <p>
            <strong class="text-[#E0E7FF]">Code de qualité</strong> : Architecture propre, tests automatisés et documentation complète pour faciliter la maintenance et l'évolution de vos projets.
          </p>
          <p>
            <strong class="text-[#E0E7FF]">Performance</strong> : Optimisation systématique (lazy loading, cache, requêtes SQL) pour des applications rapides et une expérience utilisateur fluide.
          </p>
          <p>
            <strong class="text-[#E0E7FF]">Communication</strong> : Points réguliers, transparence sur l'avancement et disponibilité pour répondre à vos questions tout au long du projet.
          </p>
        </div>

        @if($formations->count() > 0)
        <div class="mt-6">
          <h4 class="text-lg font-semibold text-[#E0E7FF] mb-3">Formation</h4>
          @foreach($formations->take(2) as $formation)
          <div class="border-l-2 border-[#8B5CF6] pl-4">
            <p class="text-[#A5B4FC] font-semibold">{{ $formation->title }}</p>
            <p class="text-[#64748B] text-sm">{{ $formation->school }}</p>
          </div>
          @endforeach
        </div>
        @endif
      </div>
    </div>

    <div class="bg-[#1E293B] border-2 border-[#334155] rounded-2xl p-8 text-center">
      <p class="text-[#A5B4FC] text-xl font-semibold mb-2">
        Disponible pour de nouveaux projets
      </p>
      <p class="text-[#94A3B8]">
        Missions en freelance · Contrats courts et longs · TJM adapté à votre budget
      </p>
    </div>
  </div>
</section>

<!-- ========================================
     6️⃣ SECTION PROCESS - ÉNORME VALEUR PERÇUE
     ======================================== -->
<section id="process" class="bg-[#1E293B] py-20 px-6">
  <div class="max-w-6xl mx-auto">
    <h2 class="text-4xl font-bold text-center text-[#E0E7FF] mb-16 fade-in">
      Processus de travail
    </h2>

    <div class="relative">
      <!-- Ligne de connexion (desktop) -->
      <div class="hidden md:block absolute top-8 left-0 right-0 h-1 bg-gradient-to-r from-[#8B5CF6] via-[#A78BFA] to-[#8B5CF6] opacity-30" style="margin: 0 12.5%;"></div>

      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
        <!-- Étape 1 -->
        <div class="text-center fade-in relative">
          <div class="w-16 h-16 bg-gradient-to-br from-[#8B5CF6] to-[#7C3AED] rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4 shadow-lg shadow-[#8B5CF6]/50 relative z-10">
            1
          </div>
          <h3 class="text-xl font-bold text-[#E0E7FF] mb-3">
            Échange & cadrage
          </h3>
          <p class="text-[#94A3B8] leading-relaxed">
            Entretien gratuit pour comprendre vos besoins métier, contraintes techniques et objectifs business. Analyse du périmètre fonctionnel et définition des priorités.
          </p>
        </div>

        <!-- Étape 2 -->
        <div class="text-center fade-in relative">
          <div class="w-16 h-16 bg-gradient-to-br from-[#8B5CF6] to-[#7C3AED] rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4 shadow-lg shadow-[#8B5CF6]/50 relative z-10">
            2
          </div>
          <h3 class="text-xl font-bold text-[#E0E7FF] mb-3">
            Devis détaillé
          </h3>
          <p class="text-[#94A3B8] leading-relaxed">
            Proposition chiffrée avec découpage fonctionnel, planning prévisionnel et conditions. Pas de frais cachés, tarif forfaitaire ou au TJM selon votre préférence.
          </p>
        </div>

        <!-- Étape 3 -->
        <div class="text-center fade-in relative">
          <div class="w-16 h-16 bg-gradient-to-br from-[#8B5CF6] to-[#7C3AED] rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4 shadow-lg shadow-[#8B5CF6]/50 relative z-10">
            3
          </div>
          <h3 class="text-xl font-bold text-[#E0E7FF] mb-3">
            Développement agile
          </h3>
          <p class="text-[#94A3B8] leading-relaxed">
            Réalisation itérative avec démonstrations régulières (sprints). Accès à un environnement de staging pour suivre l'avancement en temps réel et valider les fonctionnalités.
          </p>
        </div>

        <!-- Étape 4 -->
        <div class="text-center fade-in relative">
          <div class="w-16 h-16 bg-gradient-to-br from-[#8B5CF6] to-[#7C3AED] rounded-full flex items-center justify-center text-white text-2xl font-bold mx-auto mb-4 shadow-lg shadow-[#8B5CF6]/50 relative z-10">
            4
          </div>
          <h3 class="text-xl font-bold text-[#E0E7FF] mb-3">
            Livraison & support
          </h3>
          <p class="text-[#94A3B8] leading-relaxed">
            Mise en production sécurisée, formation à l'utilisation, documentation technique complète. Support post-livraison inclus (garantie bugs) et maintenance évolutive disponible.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========================================
     7️⃣ SECTION CONTACT - CONVERSION
     ======================================== -->
<section id="contact" class="bg-[#0F172A] py-20 px-6">
  <div class="max-w-3xl mx-auto text-center fade-in">
    <h2 class="text-4xl font-bold text-[#E0E7FF] mb-6">
      Travaillons ensemble
    </h2>

    <p class="text-[#94A3B8] text-xl mb-12">
      Un projet web ? Une mission freelance ?
    </p>

    <div class="space-y-6 mb-12">
      <a href="mailto:{{$user->email ?? 'xavier@o42l1passe.dev'}}"
         class="flex items-center justify-center gap-3 text-[#06B6D4] hover:text-[#0891B2] text-xl transition-colors">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
        </svg>
        {{$user->email ?? 'xavier@o42l1passe.dev'}}
      </a>

      @if($user->linkedin ?? false)
      <a href="{{$user->linkedin}}" target="_blank"
         class="flex items-center justify-center gap-3 text-[#06B6D4] hover:text-[#0891B2] text-xl transition-colors">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11.75 19h-3.5v-9h3.5v9zm-1.75-10.25c-1.104 0-2-.896-2-2s.896-2 2-2 2 .896 2 2-.896 2-2 2zm13.5 10.25h-3.5v-4.5c0-1.072-.928-2-2-2s-2 .928-2 2v4.5h-3.5v-9h3.5v1.25c.537-.829 1.46-1.25 2.5-1.25 1.933 0 3.5 1.567 3.5 3.5v5.5z"/>
        </svg>
        LinkedIn
      </a>
      @endif

      @if($user->github ?? false)
      <a href="{{$user->github}}" target="_blank"
         class="flex items-center justify-center gap-3 text-[#06B6D4] hover:text-[#0891B2] text-xl transition-colors">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 .5c-6.627 0-12 5.373-12 12 0 5.302 3.438 9.8 8.205 11.387.6.113.82-.263.82-.583v-2.234c-3.338.724-4.033-1.61-4.033-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.083-.73.083-.73 1.205.084 1.84 1.238 1.84 1.238 1.07 1.834 2.807 1.304 3.492.997.108-.775.418-1.305.762-1.605-2.665-.305-5.467-1.334-5.467-5.932 0-1.31.468-2.381 1.236-3.221-.123-.304-.536-1.527.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.656 1.649.243 2.872.12 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.625-5.479 5.921.429.369.812 1.096.812 2.211v3.281c0 .321.218.699.825.581C20.565 22.295 24 17.798 24 12.5 24 5.873 18.627.5 12 .5z"/>
        </svg>
        GitHub
      </a>
      @endif
    </div>

    <a href="mailto:{{$user->email ?? 'xavier@o42l1passe.dev'}}"
       class="inline-block px-8 py-4 bg-[#06B6D4] text-white rounded-xl font-semibold text-lg
              hover:bg-[#0891B2] transition-all duration-300
              hover:shadow-lg hover:shadow-[#06B6D4]/30
              hover:-translate-y-1 transform">
      Me contacter
    </a>
  </div>
</section>

<!-- ========================================
     8️⃣ FOOTER - LÉGAL & PRO
     ======================================== -->
<footer class="bg-[#1E293B] border-t border-[#334155] py-12 px-6">
  <div class="max-w-6xl mx-auto">
    <div class="flex flex-col md:flex-row items-center justify-between gap-6 text-center md:text-left">
      <div>
        <p class="text-[#E0E7FF] font-semibold text-lg mb-2">
          © {{ date('Y') }} {{ $user->name ?? 'O42l1passe' }}
        </p>
        <p class="text-[#94A3B8] text-sm">
          {{ $user->name ?? 'Xavier Jeanne' }} — Micro-entrepreneur
        </p>
      </div>

      <div class="text-[#8B5CF6] text-sm">
        <p>Laravel · Livewire · Vue.js</p>
      </div>
    </div>
  </div>
</footer>

<!-- Bouton retour haut -->
<button id="backToTop"
        class="hidden fixed bottom-6 right-6 bg-[#06B6D4] text-white p-3 rounded-full shadow-lg
               hover:bg-[#0891B2] transition duration-300 z-50 hover:-translate-y-1 transform">
  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/>
  </svg>
</button>

<script>
  // Bouton retour haut
  const backToTop = document.getElementById('backToTop');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
      backToTop.classList.remove('hidden');
      backToTop.classList.add('animate-bounce');
    } else {
      backToTop.classList.add('hidden');
      backToTop.classList.remove('animate-bounce');
    }
  });

  backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  // Menu mobile
  const menuBubble = document.getElementById('menuBubble');
  const mobileMenu = document.getElementById('mobileMenu');
  const mobileMenuPanel = document.getElementById('mobileMenuPanel');
  const closeMenu = document.getElementById('closeMenu');

  menuBubble.addEventListener('click', () => {
    mobileMenu.classList.remove('hidden');
    setTimeout(() => {
      mobileMenuPanel.classList.remove('translate-x-full');
    }, 10);
  });

  closeMenu.addEventListener('click', () => {
    mobileMenuPanel.classList.add('translate-x-full');
    setTimeout(() => {
      mobileMenu.classList.add('hidden');
    }, 300);
  });

  mobileMenu.addEventListener('click', (e) => {
    if (e.target === mobileMenu) {
      mobileMenuPanel.classList.add('translate-x-full');
      setTimeout(() => {
        mobileMenu.classList.add('hidden');
      }, 300);
    }
  });

  // Fermer le menu mobile lors du clic sur un lien
  document.querySelectorAll('#mobileMenuPanel a').forEach(link => {
    link.addEventListener('click', () => {
      mobileMenuPanel.classList.add('translate-x-full');
      setTimeout(() => {
        mobileMenu.classList.add('hidden');
      }, 300);
    });
  });

  // Animation au scroll
  const fadeElements = document.querySelectorAll('.fade-in');

  const fadeObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      }
    });
  }, { threshold: 0.1 });

  fadeElements.forEach(el => fadeObserver.observe(el));

  // Animation des cartes au hover
  document.querySelectorAll('.hover\\:-translate-y-2').forEach(card => {
    card.addEventListener('mouseenter', function() {
      this.style.transform = 'translateY(-8px) scale(1.02)';
    });
    card.addEventListener('mouseleave', function() {
      this.style.transform = '';
    });
  });

  // Parallax effect pour le hero
  window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const hero = document.querySelector('#hero');
    if (hero) {
      hero.style.transform = `translateY(${scrolled * 0.5}px)`;
      hero.style.opacity = 1 - (scrolled / 800);
    }
  });
</script>

</body>
</html>
