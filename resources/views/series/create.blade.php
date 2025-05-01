<x-layout title="Nova Serie">
    {{-- A diretiva CRSF adiciona uma camada de segurança para os formulários que é exigida no laravel --}}
    <form action="/series/salvar" method="post">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nome">Nome</label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                type="text" name="nome" id="nome">
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
            Adicionar
        </button>
    </form>
</x-layout>