<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                <table class="table align-middle min-w-full">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>File Type</td>
                            <td>Download Link</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($media as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->link }}</td>
                            </tr>
                        @empty
                            No Data
                        @endforelse                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
