<?php

namespace App\Support;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class PublicUpload
{
    public static function store(
        UploadedFile $file,
        string $directory,
        string $prefix = 'file'
    ): string {
        $directory = trim($directory, '/');

        $destination = public_path('uploads/' . $directory);

        if (!is_dir($destination)) {
            mkdir($destination, 0755, true);
        }

        $extension = strtolower(
            $file->getClientOriginalExtension()
        );

        $filename =
            $prefix
            . '_'
            . now()->format('YmdHis')
            . '_'
            . Str::random(12)
            . '.'
            . $extension;

        $file->move(
            $destination,
            $filename
        );

        return 'uploads/' . $directory . '/' . $filename;
    }

    public static function delete(?string $path): void
    {
        if (!$path) {
            return;
        }

        /*
         * Não apagamos imagens estáticas do projeto.
         * Apenas arquivos gerenciados pelo painel.
         */
        if (!Str::startsWith($path, 'uploads/')) {
            return;
        }

        $absolutePath = public_path($path);

        if (is_file($absolutePath)) {
            unlink($absolutePath);
        }
    }
}