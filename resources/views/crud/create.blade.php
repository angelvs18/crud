<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Empleados') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('crud.store') }}" method="POST" class="space-y-4">
                        @csrf
                        <div>
                          <label for="nombre" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Nombre</label>
                          <input type="text" name="nombre" id="nombre" class="block w-full mt-1 text-gray-800 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Ingrese su nombre" required>
                        </div>

                        <div>
                          <label for="edad" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Edad</label>
                          <input type="number" name="edad" id="edad" class="block w-full mt-1 text-gray-800 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Ingrese su edad" required>
                        </div>

                        <div>
                          <label for="puesto" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Puesto</label>
                          <input type="text" name="puesto" id="puesto" class="block w-full mt-1 text-gray-800 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Ingrese su puesto" required>
                        </div>

                        <div>
                          <label for="mail" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Correo electrónico</label>
                          <input type="email" name="mail" id="mail" class="block w-full mt-1 text-gray-800 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Ingrese su correo electrónico" required>
                        </div>

                        <div>
                          <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Enviar
                          </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
