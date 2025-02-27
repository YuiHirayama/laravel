<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <x-flash-messeage status="session('status')" />
                  <div class="flex justify-end mb-4">
                    <button onclick="location.href='{{ route('owner.images.create') }}'" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">新規登録</button>
                  </div>
                  <div class="flex flex-wrap">
                    @foreach ($images as $image)
                      <div class="w-1/4 p-2 md:p-4">
                      <a href="{{ route('owner.images.edit', ['image' => $image->id]) }}">
                      <div class="border rounded-md p-4">
                        <x-thumbnail :filename="$image->filename" type="products" />
                        <div class="text-gray-700">{{ $image->title }}</div>
                      </div>
                      </a>
                      </div>
                    @endforeach
                  </div>
                    {{ $images->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
