<?php

namespace App\Http\Controllers\Livros;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function upload(Request $request)
    {
        // Validação do arquivo
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls,csv|max:2048', // Tipos de arquivo permitidos
        ]);

        // Caminho fixo para o arquivo
        $filePath = 'excel_files/livros.xlsx';

        // Deleta o arquivo anterior, se existir
        if (Storage::exists($filePath)) {
            Storage::delete($filePath);
        }

        // Salva o novo arquivo com o nome fixo
        $request->file('excel_file')->storeAs('excel_files', 'livros.xlsx');

        // Retorna para a página com a mensagem de sucesso
        return redirect()->back()->with('success', 'Arquivo enviado com sucesso!');
    }

    public function showUpload(){
        return view('contents.livros');
    }
}
