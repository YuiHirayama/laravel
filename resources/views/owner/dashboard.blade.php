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
                    ■owner(店舗側)画面について<br>
                    <br>
                    1.<a class="text-blue-500 hover:text-blue-800 font-bold" href="{{ route('owner.shops.index') }}">「店舗情報」</a>タブ<br>
                      店舗情報が表示される画面です。<br>
                      表示されている店舗情報をクリックすると、編集が可能です。<br>
                      ※店名、店舗情報、画像(複数枚選択可能)、販売中/停止中の選択が可能<br>
                      <br>
                    2.<a class="text-blue-500 hover:text-blue-800 font-bold" href="{{ route('owner.images.index') }}">「画像管理」</a>タブ<br>
                      「商品管理」タブで商品出品の際に使用する画像を管理する画面です。<br>
                      新規登録で画像を追加できます。<br>
                      表示されている画像をクリックすると、編集が可能です。<br>
                      <br>
                    3.<a class="text-blue-500 hover:text-blue-800 font-bold" href="{{ route('owner.products.index') }}">「商品管理」</a>タブ<br>
                      出品する商品一覧が表示される画面です。<br>
                      新規登録で商品を追加できます。<br>
                      表示されている商品情報をクリックすると、編集が可能です。<br>
                      新規登録や、編集する際にアップロードする画像は、<br>
                     「画像管理」内で登録している画像が選択できます。
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
