<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Detalles del Empleado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <p><strong>Nombre:</strong> {{ $crud->nombre }}</p>
                        <p><strong>Edad:</strong> {{ $crud->edad }}</p>
                        <p><strong>Puesto:</strong> {{ $crud->puesto }}</p>
                        <p><strong>Correo Electrónico:</strong> {{ $crud->mail }}</p>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('crud.edit', $crud->id) }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-green-500 border border-transparent rounded-md shadow-sm hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Editar
                        </a>
                        <a href="{{ route('crud.index') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-transparent rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Regresar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
