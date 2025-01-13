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
                            <!-- Slider main container -->
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    @if($product->imageFirst->filename !== null)
                                      <img src="{{ asset('storage/products/' . $product->imageFirst->filename) }}">
                                    @else
                                      <img src="">
                                    @endif
                                </div>
                                <div class="swiper-slide">
                                    @if($product->imageSecond->filename !== null)
                                      <img src="{{ asset('storage/products/' . $product->imageSecond->filename) }}">
                                    @else
                                      <img src="">
                                    @endif
                                </div>
                                <div class="swiper-slide">
                                    @if($product->imageThird->filename !== null)
                                      <img src="{{ asset('storage/products/' . $product->imageThird->filename) }}">
                                    @else
                                      <img src="">
                                    @endif
                                </div>
                                <div class="swiper-slide">
                                    @if($product->imageFourth->filename !== null)
                                      <img src="{{ asset('storage/products/' . $product->imageFourth->filename) }}">
                                    @else
                                      <img src="">
                                    @endif
                                </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-scrollbar"></div>
                            </div>
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
            <div class="border-t border-gray-400 my-8"></div>
            <div class="mb-4 text-center">この商品を販売しているショップ</div>
            <div class="mb-4 text-center">{{ $product->shop->name }}</div>
            <div class="mb-4 text-center">
                @if($product->shop->filename !== null)
                <img class="w-40 h-40 rounded-full mx-auto object-cover" src="{{ asset('storage/shops/' . $product->shop->filename) }}">
                @else
                <img src="">
                @endif
            </div>
            <div class="mb-4 text-center">
                <button data-micromodal-trigger="modal-1" href='javascript:;' type="button" class="text-white bg-gray-400 border-0 py-2 px-6 focus:outline-none hover:bg-gray-500 rounded">ショップの詳細を見る</button>
            </div>
        </div>
    </div>

    <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
          <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <header class="modal__header">
              <h2 class="text-xl text-gray-700 modal__title" id="modal-1-title">
                {{ $product->shop->name }}
              </h2>
              <button type="button" class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main class="modal__content" id="modal-1-content">
              <p>
                {{ $product->shop->information }}
              </p>
            </main>
            <footer class="modal__footer">
              <button type="button" class="modal__btn" data-micromodal-close aria-label="Close this dialog window">閉じる</button>
            </footer>
          </div>
        </div>
      </div>
</x-app-layout>
