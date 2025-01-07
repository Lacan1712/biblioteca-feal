@extends('template.template')

@section('title', 'Importar Excel')

@section('upload-livros-body')
<section class="py-12">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Importar Arquivo Excel</h2>
        <form action="{{ route('excel.upload') }}" method="POST" enctype="multipart/form-data" class="max-w-lg mx-auto">
            @csrf
            <label for="excel_file" class="block mb-4">
                <input type="file" name="excel_file" id="excel_file" class="block w-full text-sm text-gray-600
                file:mr-4 file:py-2 file:px-4
                file:rounded-full file:border-0
                file:text-sm file:font-semibold
                file:bg-blue-50 file:text-blue-700
                hover:file:bg-blue-100">
            </label>
            <button type="submit" class="bg-blue-700 text-white px-6 py-3 rounded-md hover:bg-blue-800">
                Enviar Arquivo
            </button>
        </form>
    </div>

    <!-- Popup de Sucesso -->
    @if (session('success'))
    <div x-data="{ open: true }" x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
        <div class="bg-white p-8 rounded-lg shadow-lg w-96">
            <h2 class="text-xl font-bold text-green-600 mb-4">Sucesso!</h2>
            <p class="text-gray-700 mb-4">Arquivo enviado com sucesso!</p>
            <button @click="open = false" class="bg-blue-700 text-white px-4 py-2 rounded-md hover:bg-blue-800">Fechar</button>
        </div>
    </div>
    @endif
</section>
@endsection
