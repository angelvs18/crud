<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Editar Empleado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('crud.update', $crud->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="nombre" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Nombre</label>
                            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $crud->nombre) }}" class="block w-full mt-1 text-gray-800 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        <div>
                            <label for="edad" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Edad</label>
                            <input type="number" name="edad" id="edad" value="{{ old('edad', $crud->edad) }}" class="block w-full mt-1 text-gray-800 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        <div>
                            <label for="puesto" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Puesto</label>
                            <input type="text" name="puesto" id="puesto" value="{{ old('puesto', $crud->puesto) }}" class="block w-full mt-1 text-gray-800 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        <div>
                            <label for="mail" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Correo electrónico</label>
                            <input type="email" name="mail" id="mail" value="{{ old('mail', $crud->mail) }}" class="block w-full mt-1 text-gray-800 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Guardar cambios
                            </button>
                            <a href="{{ route('crud.index') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-500 border border-transparent rounded-md shadow-sm hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
