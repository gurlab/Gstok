<x-main-layout>
    <x-slot name="header">Malzemeler</x-slot>

    <div class="">
        <a class="flex justify-center w-full px-2 py-1 mb-4 text-sm text-gray-700 bg-gray-200 border border-gray-400 shadow sm:w-32 hover:bg-gray-300 sm:rounded-lg"
            href="{{ route('materials.create') }}">
            <x-heroicon-o-plus class="w-5 h-5" />
            Malzeme Ekle
        </a>
    </div>

    @if($materials->count())
    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        MALZEME KODU
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        MALZEME ADI
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">

                @foreach($materials as $material)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div>
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $material->code }}
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <div>
                                <div class="text-sm font-medium text-gray-900">
                                    {{ $material->name }}
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                        <form action="{{ route('materials.destroy',$material->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" data-name="#{{ $material->code }} : {{ $material->name }}"
                                class="float-right ml-3 text-red-600 delete-confirmation hover:text-red-900">
                                <x-heroicon-o-trash class="w-5 h-5" />
                            </button>
                        </form>
                        <a href="{{ route('materials.edit', $material->id) }}"
                            class="float-right text-indigo-600 hover:text-indigo-900">
                            <x-heroicon-o-pencil-alt class="w-5 h-5" />
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $materials->links() }}</div>
    @else
    <p>Malzeme kaydı bulunamadı.</p>
    @endif
</x-main-layout>
