<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>biblioteca FEAL</title>
  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

  <!-- Header -->
  <header class="bg-gradient-to-r from-blue-700 to-blue-900 text-white shadow-md">
    <div class="container mx-auto flex items-center justify-between py-4 px-6">
      <h1 class="text-2xl font-bold">Biblioteca FEAL</h1>
      <nav class="flex space-x-4">
        <a href="#" class="hover:underline">Início</a>
        <a href="#" class="hover:underline">Categorias</a>
        <a href="{{ route('showUpload') }}" class="hover:underline">Livros</a>
        <a href="#" class="hover:underline">Sobre</a>
        <a href="#" class="hover:underline">Contato</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-blue-100 py-12">
    <div class="container mx-auto text-center">
      <h2 class="text-4xl font-bold text-blue-800 mb-4">Bem-vindo à Biblioteca FEAL</h2>
      <p class="text-lg text-gray-700 mb-6">Explore livros em diversas categorias.</p>
      <form class="max-w-lg mx-auto flex">
        <input type="text" placeholder="Procure por livros, autores, categorias ou identificador" class="w-full p-3 rounded-l-md border border-gray-300 focus:ring-2 focus:ring-blue-500">
        <button type="submit" class="bg-blue-700 text-white px-4 py-3 rounded-r-md hover:bg-blue-800">Buscar</button>
      </form>
    </div>
  </section>

  <!-- Main Content -->
  <main class="flex-grow">
    @yield('home-body')
    @yield('upload-livros-body')
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center">
      <p>&copy; 2025 Biblioteca Online. Todos os direitos reservados.</p>
      <p class="mt-2">
        <a href="#" class="hover:underline">Política de Privacidade</a> | 
        <a href="#" class="hover:underline">Termos de Serviço</a>
      </p>
    </div>
  </footer>
  @livewireScripts
</body>
</html>
