
<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Xavier Jeanne | Développeur Fullstack | Portfolio">
  <meta name="author" content="Xavier Jeanne">
  <meta name="keywords" content="Xavier Jeanne, Développeur, Fullstack, Portfolio, Laravel, Livewire, Tailwind CSS, PHP, JavaScript, HTML, CSS">
  <meta name="robots" content="index, follow">
  <meta name="googlebot" content="index, follow">
  <meta name="theme-color" content="#0F172A">
  <meta name="title" content="Xavier Jeanne | Développeur Fullstack">
  <title>Xavier Jeanne | Développeur Fullstack</title>
  <link rel="icon" type="image/x-icon" href="{{asset('logo.png')}}">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @php use Illuminate\Support\Facades\Storage; @endphp
</head>
<body class="bg-[#0F172A] text-[#E0E7FF] font-sans">

<!-- Sidebar flottant gauche (desktop) -->
<aside id="sidebar"
       class="hidden md:flex fixed top-1/2 left-4 transform -translate-y-1/2 flex-col space-y-6
              bg-[#1E293B] border border-[#0F172A] shadow-2xl rounded-xl p-2 z-50 transition-opacity duration-300">
  <!-- Présentation -->
  <a href="#presentation"
   class="relative group text-[#A5B4FC]
          p-2 rounded-lg transition-all duration-150 
          hover:translate-y-[2px] hover:scale-90 hover:shadow-inner hover:bg-[#0F172A]"
   aria-label="Présentation">
  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
      d="M5.121 17.804A7 7 0 0112 15a7 7 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
  </svg>
</a>

  <!-- Compétences -->
  <a href="#skills" class="relative group text-[#A5B4FC]
          p-2 rounded-lg transition-all duration-150 
          hover:translate-y-[2px] hover:scale-90 hover:shadow-inner hover:bg-[#0F172A]" aria-label="Compétences">
    <!-- Nouveau SVG -->
    <svg class="w-6 h-6" fill="#A5B4FC" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <g>
        <path d="M43.84,46.76a5.35,5.35,0,1,1,5.46-5.34A5.41,5.41,0,0,1,43.84,46.76Z" fill-rule="evenodd"/>
        <path d="M77.33,55.7,70.06,44.9V44A24,24,0,0,0,46.19,20a22,22,0,0,0-5.67.7A23.89,23.89,0,0,0,22.31,44a21.92,21.92,0,0,0,3.58,12.7c4.18,6,7,10.8,5.27,17.3a4.58,4.58,0,0,0,.9,4.2A4.43,4.43,0,0,0,35.74,80h19.6A4.72,4.72,0,0,0,60,76.2a5,5,0,0,0,.2-1.2,2.37,2.37,0,0,1,2.39-2H64a4.72,4.72,0,0,0,4.68-3.4A41.31,41.31,0,0,0,70.16,60h5.17a2.78,2.78,0,0,0,2.19-1.6A2.86,2.86,0,0,0,77.33,55.7ZM57.49,47.33l-1,1.57a2.22,2.22,0,0,1-1.76.94,2.38,2.38,0,0,1-.72-.16l-2.65-1a11.64,11.64,0,0,1-3.85,2.2l-.48,2.91a2,2,0,0,1-2,1.65h-2a2,2,0,0,1-2-1.65l-.48-2.91a10,10,0,0,1-3.69-2l-2.81,1a2.38,2.38,0,0,1-.72.16,2.1,2.1,0,0,1-1.76-1l-1-1.65a1.94,1.94,0,0,1,.48-2.51l2.33-1.89a10.11,10.11,0,0,1-.24-2.12,9.41,9.41,0,0,1,.24-2L31.1,36.88a1.92,1.92,0,0,1-.48-2.51l1-1.65a2,2,0,0,1,1.76-1,2.38,2.38,0,0,1,.72.16l2.81,1a11.52,11.52,0,0,1,3.69-2.12L41,28a1.91,1.91,0,0,1,2-1.57h2a1.92,1.92,0,0,1,2,1.49l.48,2.83a11.31,11.31,0,0,1,3.69,2l2.81-1a2.38,2.38,0,0,1,.72-.16,2.1,2.1,0,0,1,1.76,1l1,1.65A2,2,0,0,1,57,36.8l-2.33,1.89a9.56,9.56,0,0,1,.24,2.12,9.41,9.41,0,0,1-.24,2L57,44.74A2,2,0,0,1,57.49,47.33Z" fill-rule="evenodd"/>
      </g>
    </svg>

    <!-- Tooltip -->
    <span class="absolute left-10 top-1/2 -translate-y-1/2 bg-[#1E293B] text-white text-sm px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-50">
      Compétences
    </span>
  </a>

  <!-- Expérience -->
  <a href="#experience" class="relative group text-[#A5B4FC]
          p-2 rounded-lg transition-all duration-150 
          hover:translate-y-[2px] hover:scale-90 hover:shadow-inner hover:bg-[#0F172A]" aria-label="Expérience">
    <!-- Nouveau SVG -->
    <svg class="w-6 h-6" fill="#A5B4FC" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
      <path d="M20,12.5L20,12.5c0,0.276,0.224,0.5,0.5,0.5h7c0.276,0,0.5-0.224,0.5-0.5v0c0-0.276-0.224-0.5-0.5-0.5
        h-7C20.224,12,20,12.224,20,12.5z M20.5,15h7c0.276,0,0.5-0.224,0.5-0.5v0c0-0.276-0.224-0.5-0.5-0.5h-7
        c-0.276,0-0.5,0.224-0.5,0.5v0C20,14.776,20.224,15,20.5,15z M20.5,17h7c0.276,0,0.5-0.224,0.5-0.5l0,0c0-0.276-0.224-0.5-0.5-0.5
        h-7c-0.276,0-0.5,0.224-0.5,0.5l0,0C20,16.776,20.224,17,20.5,17z M20.5,19h7c0.276,0,0.5-0.224,0.5-0.5l0,0c0-0.276-0.224-0.5-0.5-0.5
        h-7c-0.276,0-0.5,0.224-0.5,0.5l0,0C20,18.776,20.224,19,20.5,19z M16,18v-6c0-0.552-0.448-1-1-1h-1c-0.552,0-1,0.448-1,1v6h-1v-4
        c0-0.552-0.448-1-1-1h-1c-0.552,0-1,0.448-1,1v4H8v-5c0-0.552-0.448-1-1-1H6c-0.552,0-1,0.448-1,1v5H4.5C4.224,18,4,18.224,4,18.5
        l0,0C4,18.776,4.224,19,4.5,19h12c0.276,0,0.5-0.224,0.5-0.5l0,0c0-0.276-0.224-0.5-0.5-0.5H16z M7,18H6v-5h1V18z M11,18h-1v-4h1V18
        z M15,18h-1v-6h1V18z M29,4H3C1.343,4,0,5.343,0,7v16c0,1.657,1.343,3,3,3h9v3h-1.5c-0.276,0-0.5,0.224-0.5,0.5l0,0
        c0,0.276,0.224,0.5,0.5,0.5h11c0.276,0,0.5-0.224,0.5-0.5l0,0c0-0.276-0.224-0.5-0.5-0.5H20v-3h9c1.657,0,3-1.343,3-3V7
        C32,5.343,30.657,4,29,4z M19,29h-6v-3h6V29z M31,23c0,1.105-0.895,2-2,2H3c-1.105,0-2-0.895-2-2V7c0-1.105,0.895-2,2-2h26
        c1.105,0,2,0.895,2,2V23z"/>
    </svg>

    <!-- Tooltip -->
    <span class="absolute left-10 top-1/2 -translate-y-1/2 bg-[#1E293B] text-white text-sm px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-50">
      Expérience
    </span>
  </a>


  <a href="#formation" class="relative group text-[#A5B4FC]
          p-2 rounded-lg transition-all duration-150 
          hover:translate-y-[2px] hover:scale-90 hover:shadow-inner hover:bg-[#0F172A]" aria-label="Formation">
    <!-- SVG Formation (exemple : chapeau de diplômé) -->
    <svg class="w-6 h-6" fill="#A5B4FC" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
      <path d="M32 4L2 20l30 16 30-16L32 4zm0 28L12 24v12l20 10 20-10V24L32 32zm0 12l-20-10v12l20 10 20-10V34L32 44z"/>
    </svg>

    <!-- Tooltip -->
    <span class="absolute left-10 top-1/2 -translate-y-1/2 bg-[#1E293B] text-white text-sm px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-50">
      Formation
    </span>
  </a>
  <!-- Réalisations -->
  <a href="#realisations" class="relative group text-[#A5B4FC]
          p-2 rounded-lg transition-all duration-150 
          hover:translate-y-[2px] hover:scale-90 hover:shadow-inner hover:bg-[#0F172A]" aria-label="Réalisations">
    <!-- SVG Réalisations -->
    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M4 12H3V8C3 6.89543 3.89543 6 5 6H9M4 12V18C4 19.1046 4.89543 20 6 20H18C19.1046 20 20 19.1046 20 18V12M4 12H10M20 12H21V8C21 6.89543 20.1046 6 19 6H15M20 12H14M14 12V10H10V12M14 12V14H10V12M9 6V5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V6M9 6H15" stroke="#A5B4FC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>

    <!-- Tooltip -->
    <span class="absolute left-10 top-1/2 -translate-y-1/2 bg-[#1E293B] text-white text-sm px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-50">
      Réalisations
    </span>
  </a>


  <a href="#contact" class="relative group text-[#A5B4FC]
          p-2 rounded-lg transition-all duration-150 
          hover:translate-y-[2px] hover:scale-90 hover:shadow-inner hover:bg-[#0F172A]" aria-label="Contact">
    <!-- SVG Contact -->
    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M19.2715 18.2637L20.9996 20M11.5 19H6.2C5.0799 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2C3 7.0799 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H17.8C18.9201 5 19.4802 5 19.908 5.21799C20.2843 5.40973 20.5903 5.71569 20.782 6.09202C21 6.51984 21 7.0799 21 8.2V11M20.6067 8.26229L15.5499 11.6335C14.2669 12.4888 13.6254 12.9165 12.932 13.0827C12.3192 13.2295 11.6804 13.2295 11.0677 13.0827C10.3743 12.9165 9.73279 12.4888 8.44975 11.6335L3.14746 8.09863M20 16.5C20 17.8807 18.8807 19 17.5 19C16.1193 19 15 17.8807 15 16.5C15 15.1193 16.1193 14 17.5 14C18.8807 14 20 15.1193 20 16.5Z" stroke="#A5B4FC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>

    <!-- Tooltip -->
    <span class="absolute left-10 top-1/2 -translate-y-1/2 bg-[#1E293B] text-white text-sm px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-50">
      Contact
    </span>
  </a>

</aside>


<!-- Bulle flottante mobile -->
<button id="menuBubble" class="fixed top-4 right-4 bg-[#06B6D4] text-white p-3 rounded-full shadow-lg hover:bg-[#3B82F6] transition md:hidden z-50">
  <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
    <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
  </svg>
</button>


<!-- Menu mobile -->
<div id="mobileMenu" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40">
  <div class="absolute top-0 right-0 w-3/4 max-w-sm h-full bg-[#1E293B] shadow-lg p-6 transform translate-x-full transition duration-300" id="mobileMenuPanel">
    <button id="closeMenu" class="mb-6 text-[#E0E7FF] hover:text-[#6366F1]">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>
    <nav class="flex flex-col space-y-4 text-[#E0E7FF]">
      <a href="#presentation" class="hover:text-[#6366F1]">Présentation</a>
      <a href="#skills" class="hover:text-[#6366F1]">Compétences</a>
      <a href="#experience" class="hover:text-[#6366F1]">Expérience</a>
      <a href="#formation" class="hover:text-[#6366F1]">Formation</a>
      <a href="#realisations" class="hover:text-[#6366F1]">Réalisations</a>
      <a href="#contact" class="hover:text-[#6366F1]">Contact</a>
    </nav>
  </div>
</div>

  <section id="presentation" class="min-h-screen flex items-center justify-center px-6 bg-[#0F172A] fade-in">
  <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-center">
    <div class="flex justify-center">
   <img src="{{ asset('logo.png') }}" alt="Photo de Xavier Jeanne"
     class="w-32 h-32 md:w-48 md:h-48 rounded-2xl object-cover shadow-lg border-1 border-[#06B6D4]"></div>
    <div>
      <h1 class="text-4xl font-bold text-[#E0E7FF] mb-4">{{$user->name}}</h1>
      <h2 class="text-xl text-[#A5B4FC] mb-6">Développeur Fullstack</h2>
      <p class="text-[#06B6D4] leading-relaxed">
       {{$user->description}}
      </p>
    </div>
  </div>
</section>

<section id="skills" class="bg-[#1E293B] py-20 px-6 fade-in">
  <h2 class="text-3xl font-semibold text-center text-[#E0E7FF] mb-12">Compétences</h2>
  <div class="grid grid-cols-1 md:grid-cols-4 gap-8 max-w-4xl mx-auto">

    @forelse($skills as $skill)
      <div class="p-4 bg-[#0F172A] rounded-xl flex flex-col justify-between h-56 relative">

        {{-- Logo en haut à droite --}}
        <div class="flex justify-end">
          <img src="{{ $skill->logo ? Storage::url($skill->logo) : asset('logo.png') }}" 
               alt="{{ $skill->title }}" 
               class="w-12 h-12">
        </div>

        {{-- Titre et description en bas à gauche --}}
        <div class="text-left mt-2">
          <h3 class="font-semibold text-[#E0E7FF] mb-1">{{ $skill->title }}</h3>
          @if($skill->description)
            <p class="text-sm text-[#A5B4FC]">{{ $skill->description }}</p>
          @endif
        </div>

        {{-- Jauge de niveau en bas --}}
        @if($skill->level)
          <div class="mt-4">
            <div class="w-full bg-[#334155] rounded-full h-3">
              <div class="bg-[#06B6D4] h-3 rounded-full"
                   style="width: {{ ($skill->level / 20) * 100 }}%">
              </div>
            </div>
          </div>
        @endif

      </div>

    @empty
      <div class="p-4 bg-[#0F172A] rounded-xl text-left text-[#E0E7FF]">
        Aucune compétence trouvée
      </div>
    @endforelse

  </div>
</section>





<section id="experience" class="bg-[#0F172A] py-20 px-6 fade-in">
  <h2 class="text-3xl font-semibold text-center text-[#E0E7FF] mb-12">Expérience</h2>
  <div class="max-w-3xl mx-auto space-y-8">

    @forelse($experiences as $exp)
      <div class="text-left">
        {{-- Titre et entreprise --}}
        <h3 class="text-xl font-bold text-[#E0E7FF]">
          {{ $exp->title }} – {{ $exp->entreprise }}
        </h3>

        {{-- Dates --}}
        @php
            $dateDebut = \Carbon\Carbon::parse($exp->date_debut)->translatedFormat('F Y');
            $dateFin = $exp->date_fin ? \Carbon\Carbon::parse($exp->date_fin)->translatedFormat('F Y') : 'Aujourd’hui';
        @endphp
        <p class="text-sm mb-2 text-[#A5B4FC]">
          {{ $dateDebut }} – {{ $dateFin }}
        </p>

        {{-- Description --}}
        @if($exp->description)
          <p class="text-[#06B6D4]">{{ $exp->description }}</p>
        @endif
      </div>
      <hr>
    @empty
      <div class="text-left text-[#E0E7FF]">
        Aucune expérience trouvée
      </div>
    @endforelse

  </div>
</section>


<section id="formation" class="bg-[#1E293B] py-20 px-6 fade-in">
  <h2 class="text-3xl font-semibold text-center text-[#E0E7FF] mb-12">Formation</h2>
  
  <div class="max-w-3xl mx-auto space-y-8 text-[#A5B4FC]">
    
    @forelse($formations as $formation)
      <div class="rounded-xl flex flex-col bg-[#0F172A] p-4">
        {{-- Titre et organisme --}}
        <h3 class="text-xl font-bold text-[#E0E7FF]">
          {{ $formation->organisme }} – {{ $formation->title }}
        </h3>

        {{-- Date --}}
        @if($formation->date)
          <p class="text-sm mb-2 text-[#A5B4FC]">{{ $formation->date }}</p>
        @endif

        {{-- Niveau --}}
        @if($formation->level)
          <p class="text-sm mb-2 text-[#06B6D4]">Niveau : {{ $formation->level }}</p>
        @endif

        {{-- Description --}}
        @if($formation->description)
          <p class="text-[#06B6D4]">{{ $formation->description }}</p>
        @endif
      </div>
    @empty
      <div class="p-4 bg-[#0F172A] rounded-xl text-[#E0E7FF]">
        Aucune formation trouvée
      </div>
    @endforelse

  </div>
</section>


<section id="realisations" class="bg-[#0F172A] py-20 px-6 fade-in">
  <h2 class="text-3xl font-semibold text-center text-[#E0E7FF] mb-12">Réalisations</h2>
  <div class="max-w-5xl mx-auto flex flex-wrap justify-center gap-8">
    @forelse($realisations as $realisation)
      
    <a href="{{ $realisation->link }}" target="_blank"
       class="block bg-[#1E293B] border border-[#0F172A] rounded-xl shadow-lg hover:shadow-2xl  transition-all p-4 w-full max-w-sm group">

      <!-- Image -->
      <div class="w-full h-40 bg-[#0F172A] rounded-md overflow-hidden flex items-center justify-center">
        <img src="{{ $realisation->logo ? Storage::url($realisation->logo) : asset('logo.png') }}"
             alt="{{ $realisation->title }}"
             class="object-contain max-h-full ">
      </div>

      <!-- Titre + Description -->
      <div class="mt-4">
        <h3 class="text-xl font-bold text-[#E0E7FF]">{{ $realisation->title }}</h3>
        <p class="text-[#94A3B8] text-sm mt-1">{{ $realisation->description }}</p>
      </div>

      <!-- Entreprise -->
      <div class="mt-3 text-sm text-[#CBD5E1] font-medium">
        Entreprise : <span class="text-[#E0E7FF]">{{ $realisation->company }}</span>
      </div>

      <!-- Skills -->
      <div class="flex flex-wrap items-center gap-2 mt-3">
        @foreach($realisation->skills as $skill)
        <span class="flex items-center gap-1 px-2 py-1 bg-[#334155] rounded-full text-sm text-[#E0E7FF]">
          <img src="{{ $skill->logo ? Storage::url($skill->logo) : asset('logo.png') }}"
               alt="{{ $skill->title }}"
               class="w-4 h-4">
          {{ $skill->title }}
        </span>
        @endforeach
      </div>

    </a>
    @empty
      <div class="p-4 bg-[#1E293B] rounded-xl text-[#E0E7FF] text-center">
        Aucune réalisation trouvée
      </div>
    @endforelse
  </div>
</section>

<section id="contact" class="bg-[#1E293B] py-20 px-6 fade-in">
  <h2 class="text-3xl font-semibold text-center text-[#E0E7FF] mb-12">Contact</h2>

  <div class="max-w-xl mx-auto text-left space-y-4 text-[#A5B4FC]">

    
    {{-- Email --}}
    <p class="flex items-center gap-2">
       <svg viewBox="0 -2.5 20 20" class="w-6 h-6 text-[#06B6D4]" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#06B6D4">
        <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>email [#1572]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -922.000000)" fill="#06B6D4"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M294,774.474 L284,765.649 L284,777 L304,777 L304,765.649 L294,774.474 Z M294.001,771.812 L284,762.981 L284,762 L304,762 L304,762.981 L294.001,771.812 Z" id="email-[#1572]"> </path> </g> </g> </g> </g></svg>
      <a href="mailto:{{$user->email}}" class="text-white hover:underline">{{$user->email}}</a>
    </p>

    {{-- LinkedIn --}}
    <p class="flex items-center gap-2">
      <svg class="w-6 h-6 text-[#06B6D4]" fill="currentColor" viewBox="0 0 24 24">
        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11.75 19h-3.5v-9h3.5v9zm-1.75-10.25c-1.104 0-2-.896-2-2s.896-2 2-2 2 .896 2 2-.896 2-2 2zm13.5 10.25h-3.5v-4.5c0-1.072-.928-2-2-2s-2 .928-2 2v4.5h-3.5v-9h3.5v1.25c.537-.829 1.46-1.25 2.5-1.25 1.933 0 3.5 1.567 3.5 3.5v5.5z"/>
      </svg>
      <a href="{{$user->linkedin}}" target="_blank" class="text-white hover:underline">{{$user->linkedin}}</a>
    </p>

    {{-- GitHub --}}
    <p class="flex items-center gap-2">
      <svg class="w-6 h-6 text-[#06B6D4]" fill="currentColor" viewBox="0 0 24 24">
        <path d="M12 .5c-6.627 0-12 5.373-12 12 0 5.302 3.438 9.8 8.205 11.387.6.113.82-.263.82-.583v-2.234c-3.338.724-4.033-1.61-4.033-1.61-.546-1.387-1.333-1.756-1.333-1.756-1.09-.745.083-.73.083-.73 1.205.084 1.84 1.238 1.84 1.238 1.07 1.834 2.807 1.304 3.492.997.108-.775.418-1.305.762-1.605-2.665-.305-5.467-1.334-5.467-5.932 0-1.31.468-2.381 1.236-3.221-.123-.304-.536-1.527.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.656 1.649.243 2.872.12 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.625-5.479 5.921.429.369.812 1.096.812 2.211v3.281c0 .321.218.699.825.581C20.565 22.295 24 17.798 24 12.5 24 5.873 18.627.5 12 .5z"/>
      </svg>

      <a href="{{$user->github}}" target="_blank" class="text-white hover:underline">{{$user->github}}</a>
    </p>

   

    <p class="flex items-center gap-2">
      <svg viewBox="0 0 24 24" class="w-6 h-6 text-[#06B6D4]" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M17 17H17.01M17.4 14H18C18.9319 14 19.3978 14 19.7654 14.1522C20.2554 14.3552 20.6448 14.7446 20.8478 15.2346C21 15.6022 21 16.0681 21 17C21 17.9319 21 18.3978 20.8478 18.7654C20.6448 19.2554 20.2554 19.6448 19.7654 19.8478C19.3978 20 18.9319 20 18 20H6C5.06812 20 4.60218 20 4.23463 19.8478C3.74458 19.6448 3.35523 19.2554 3.15224 18.7654C3 18.3978 3 17.9319 3 17C3 16.0681 3 15.6022 3.15224 15.2346C3.35523 14.7446 3.74458 14.3552 4.23463 14.1522C4.60218 14 5.06812 14 6 14H6.6M12 15V4M12 15L9 12M12 15L15 12" stroke="#06B6D4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
     
      <a href="{{ asset('cv.pdf') }}" download class="text-white hover:underline">Télécharger mon CV</a>
    </p>

  </div>
</section>
    <!-- Bouton retour haut -->
    <button id="backToTop" class="hidden fixed bottom-6 right-6 bg-[#A5B4FC] text-white p-3 rounded-full shadow-lg hover:bg-[#A5B4FC] transition duration-300 z-50">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M5 15l7-7 7 7"/>
      </svg>
    </button>
    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 text-center py-6">
      <p>© 2025 Xavier Jeanne. Tous droits réservés.</p>
    </footer>

  </body>
</html>
