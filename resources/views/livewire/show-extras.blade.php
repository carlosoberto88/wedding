<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="container mx-auto mt-5">
                    <x-slot name="header">
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            Extras de {{ $guest->first_name }}
                        </h2>
                    </x-slot>
                    <div class="flex justify-center">
                        <div class="w-full max-w-5xl">
                            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                                <div class="px-6 py-4 text-center bg-gray-100 dark:bg-gray-900">
                                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">Acompañantes</h2>
                                </div>
                                <div class="px-6 py-4">
                                    <div class="mb-4">
                                        <a href="{{ route('dashboard') }}" class="text-blue-500 hover:text-blue-700">
                                            &larr; Volver a Invitados
                                        </a>
                                    </div>
                                    <div class="overflow-x-auto">
                                        <table class="min-w-full w-full bg-white dark:bg-gray-800">
                                            <thead class="bg-gray-100 dark:bg-gray-900">
                                                <tr>
                                                    <th class="py-2 px-4 border-b text-center text-gray-800 dark:text-white">Invitado</th>
                                                    <th class="py-2 px-4 border-b text-center text-gray-800 dark:text-white">Acompañante</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($extras as $extra)
                                                    <tr>
                                                        <td class="py-2 px-4 border-b text-center text-gray-800 dark:text-white">{{ $extra['name'] }}</td>
                                                        <td class="py-2 px-4 border-b text-center text-gray-800 dark:text-white">{{ $guest->first_name }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
