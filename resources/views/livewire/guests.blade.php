<div class="container mx-auto mt-5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <div class="flex justify-center">
        <div class="w-full max-w-5xl">
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                <div class="px-6 py-4 text-center bg-gray-100 dark:bg-gray-900">
                    <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Invitados</h2>
                </div>
                <div class="px-6 py-4">
                    <input type="text" class="form-input mb-4 w-full p-2 rounded border border-gray-300 text-black"
                        placeholder="Search Guests..." wire:model.debounce.300ms="search">
                    <div class="overflow-x-auto">
                        <table class="min-w-full w-full bg-white dark:bg-gray-800">
                            <thead class="bg-gray-100 dark:bg-gray-900">
                                <tr>
                                    <th class="py-2 px-4 border-b text-center">Invitado</th>
                                    <th class="py-2 px-4 border-b text-center">Telefono</th>
                                    <th class="py-2 px-4 border-b text-center">Estado</th>
                                    <th class="py-2 px-4 border-b text-center">Codigo</th>
                                    <th class="py-2 px-4 border-b text-center">Acompañantes</th>
                                    <th class="py-2 px-4 border-b text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guests as $guest)
                                    <tr>
                                        <td class="py-2 px-4 border-b text-center">{{ $guest->first_name }}</td>
                                        <td class="py-2 px-4 border-b text-center">{{ $guest->phone }}</td>
                                        <td class="py-2 px-4 border-b text-center">{{ $guest->status }}</td>
                                        <td class="py-2 px-4 border-b text-center">{{ $guest->code }}</td>
                                        <td class="py-2 px-4 border-b text-center">{{ $guest->extra ? $guest->extra->name : '' }}</td>
                                        <td class="py-2 px-4 border-b text-center">
                                            <a href="{{ route('guests.edit', $guest->id) }}" class="text-green-500 hover:text-green-700">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $guests->links('pagination::tailwind') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
