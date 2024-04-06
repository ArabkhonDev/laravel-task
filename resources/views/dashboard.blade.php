<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        .main{
            width: 1000px;
        }
    </style>
    <div class="w-7xl mx-auto sm:px-6 main">
        <div class="bg-white dark:bg-gray-800  shadow-sm">
            <div class="p-6 text-gray-900 dark:text-gray-100 min-h-screen">
                @if (auth()->user()->role->name == 'manager')
                    @include('application.index')
                @else
                    @include('application.create')
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
