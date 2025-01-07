@extends('template.template')

@section('home-body')
<!-- Categories -->
<section class="py-12">
    <div class="container mx-auto">
      <h3 class="text-3xl font-bold text-center mb-8">Categorias Populares</h3>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md text-center hover:bg-blue-100">
          <h4 class="font-bold text-lg">Categoria</h4>
          <p class="text-gray-600 mt-2">Descrição.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md text-center hover:bg-blue-100">
          <h4 class="font-bold text-lg">Categoria</h4>
          <p class="text-gray-600 mt-2">Descrição.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md text-center hover:bg-blue-100">
          <h4 class="font-bold text-lg">Categoria</h4>
          <p class="text-gray-600 mt-2">Descrição.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md text-center hover:bg-blue-100">
          <h4 class="font-bold text-lg">Categoria</h4>
          <p class="text-gray-600 mt-2">Descrição.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Books -->
  <section class="py-12 bg-gray-50">
    <div class="container mx-auto">
      <h3 class="text-3xl font-bold text-center mb-8">Livros em Destaque</h3>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="p-6">
            <h4 class="font-bold text-xl">Título do Livro 1</h4>
            <p class="text-gray-600 mt-2">Autor: Nome do Autor</p>
            <p class="text-gray-700 mt-4">Descrição breve sobre o livro.</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="p-6">
            <h4 class="font-bold text-xl">Título do Livro 2</h4>
            <p class="text-gray-600 mt-2">Autor: Nome do Autor</p>
            <p class="text-gray-700 mt-4">Descrição breve sobre o livro.</p>
          </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <div class="p-6">
            <h4 class="font-bold text-xl">Título do Livro 3</h4>
            <p class="text-gray-600 mt-2">Autor: Nome do Autor</p>
            <p class="text-gray-700 mt-4">Descrição breve sobre o livro.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
