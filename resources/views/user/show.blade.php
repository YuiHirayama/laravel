<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            商品の詳細
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="md:flex md:justify-around">
                        <div class="md:w-1/2 mb-4">
                            <x-thumbnail filename="{{ $product->imageFirst->filename ?? ''}}" type="products" />
                        </div>
                        <div class="md:w-1/2 ml-4">
                            <h2 class="text-sm title-font text-gray-500 tracking-widest mb-2">{{ $product->category->name }}</h2>
                            <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{ $product->name }}</h1>
                            <p class="leading-relaxed mb-4">{{ $product->information }}</p>
                            <div>
                                <div class="flex justify-between items-center">
                                    <div>
                                        <span class="title-font font-medium text-2xl text-gray-900">{{ number_format($product->price) }}</span>
                                        <span class="text-sm text-gray-700">円(税込)</span>
                                    </div>
                                <div class="flex items-center gap-4">
                                    <span>数量</span>
                                    <div class="relative">
                                      <select class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                                        <option>SM</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                      </select>
                                </div>
                                <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">カートに入れる</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
