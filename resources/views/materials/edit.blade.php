<x-app-layout>
    <x-slot name="header">Malzeme Düzenle</x-slot>

    <div class="flex flex-row">
        <a class="flex justify-center float-left w-full px-2 py-1 mb-4 text-sm text-gray-700 bg-gray-200 border border-gray-400 shadow sm:w-40 hover:bg-gray-300 sm:rounded-lg"
            href="{{ route('materials.index') }}">
            <x-heroicon-o-chevron-double-left class="w-5 h-5" />
            Malzemeler'e Dön
        </a>
        <div class="flex flex-grow"></div>
        <form class="my-auto" action="{{ route('materials.destroy',$material->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="flex justify-center float-right w-full px-2 py-1 mb-4 text-sm text-gray-700 bg-red-400 border border-gray-400 shadow sm:w-20 hover:bg-red-300 sm:rounded-lg">
                <x-heroicon-o-trash class="w-5 h-5 mr-1" />
                Kaldır
            </button>
        </form>
    </div>

    <div class="flex flex-col p-4 bg-white sm:flex-row">
        <div
            class="justify-center flex-1 w-full pb-4 mb-4 text-center border-b border-gray-400 sm:pr-4 sm:border-b-0 sm:border-r sm:border-gray-400 sm:mb-0 sm:pb-0">
            <form class="" method="POST" action="{{ route('materials.update', $material->id) }}">
                @csrf
                @method('PUT')

                <div class="flex flex-col mb-4">
                    <label>Malzeme Kodu</label>
                    <input class="border border-gray-400" name="code" type="text"
                        value="@if(!old('code')){{$material->code}}@endif{{ old('code') }}" required>
                </div>
                <div class="flex flex-col mb-4">
                    <label>Malzeme Adı</label>
                    <input class="border border-gray-400" name="name" type="text"
                        value="@if(!old('name')){{$material->name}}@endif{{ old('name') }}" required>
                </div>
                <button
                    class="flex justify-center w-full px-2 py-1 mx-auto mb-4 text-sm text-gray-700 bg-gray-200 border border-gray-400 shadow sm:w-20 hover:bg-gray-300 sm:rounded-lg"
                    type="submit">
                    <x-heroicon-o-check class="w-5 h-5" />
                    Onayla
                </button>
            </form>
        </div>
        <div class="flex flex-col w-full sm:pl-4 sm:w-64">
            <div class="w-full p-1 mb-1 font-bold">
                # {{ $material->code }}
            </div>
            <div class="w-full p-1 mb-2">
                {{ $material->name }}
            </div>
            {{-- <material class="flex mb-1 text-sm">
                <m_code class="flex flex-1 p-1 pr-2 bg-gray-300">{{ $material->code }}</m_code>
            <m_name class="flex flex-1 p-1 pl-2 bg-gray-200">{{ $material->name }}</m_name>
            </material> --}}
        </div>
    </div>
</x-app-layout>
