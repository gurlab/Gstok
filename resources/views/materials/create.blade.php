<x-app-layout>
    <x-slot name="header">Malzeme Oluştur</x-slot>

    <div class="flex flex-row">
        <a class="flex justify-center float-left w-full px-2 py-1 mb-4 text-sm text-gray-700 bg-gray-200 border border-gray-400 shadow sm:w-40 hover:bg-gray-300 sm:rounded-lg"
            href="{{ route('materials.index') }}">
            <x-heroicon-o-chevron-double-left class="w-5 h-5" />
            Malzemeler'e Dön
        </a>
        <div class="flex flex-grow"></div>
    </div>

    <div class="flex flex-col p-4 text-sm bg-white sm:flex-row">
        <div
            class="justify-center flex-1 w-full pb-4 mb-4 text-center border-b border-gray-400 sm:pr-4 sm:border-b-0 sm:border-r sm:border-gray-400 sm:mb-0 sm:pb-0">
            <form class="" method="POST" action="{{ route('materials.store') }}">
                @csrf

                <div class="flex flex-col mb-4">
                    <label>Malzeme Kodu</label>
                    <input class="border border-gray-400" name="code" type="text" required>
                </div>
                <div class="flex flex-col mb-4">
                    <label>Malzeme Adı</label>
                    <input class="border border-gray-400" name="name" type="text" required>
                </div>
                <button
                    class="flex justify-center w-full px-2 py-1 mx-auto mb-4 text-sm text-gray-700 bg-gray-200 border border-gray-400 shadow sm:w-20 hover:bg-gray-300 sm:rounded-lg"
                    type="submit">
                    <x-heroicon-o-check class="w-5 h-5" />
                    Onayla
                </button>
            </form>
        </div>
        <div class="flex flex-col w-full sm:pl-4 sm:w-96">
            <div class="w-full py-1 mb-2 font-bold">
                Son Eklenen Malzemeler
            </div>
            <div class="divide-y divide-dashed">
                @forelse ($materials as $material)
                <div class="flex py-1 text-sm">
                    <div class="flex flex-1 pr-2">{{ $material->code }}</div>
                    <div class="flex flex-1 pl-2">{{ $material->name }}</div>
                    <div class="flex flex-1 pl-2">
                        <a href="{{ route('materials.edit', $material->id) }}"
                            class="float-right text-indigo-600 hover:text-indigo-900">
                            <x-heroicon-o-pencil-alt class="w-5 h-5" />
                        </a>
                        <form class="my-auto" action="{{ route('materials.destroy',$material->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="float-right ml-3 text-red-600 hover:text-red-900">
                                <x-heroicon-o-trash class="w-5 h-5" />
                            </button>
                        </form>
                    </div>
                </div>
                @empty
            </div>
            <p>Herhangi bir malzeme yok.</p>
            @endforelse
        </div>
    </div>
</x-app-layout>
