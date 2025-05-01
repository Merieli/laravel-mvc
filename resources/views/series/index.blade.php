<x-layout title="Séries">
    <a href="/series/criar"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-6">Adicionar</a>

    <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
        @foreach ($series as $serie)
            <li>{{ $serie->nome }}</li>
        @endforeach
    </ul>

    {{-- o `@` faz o blade ignorar a sintaxe blade e enviar para tela como string --}}
    {{-- @{{ algo }} --}}


    <script>
        // O `JS::from` converte o array do PHP para um array do JS
        const series = {{ Js::from($series) }}
    </script>
</x-layout>