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
                    ■admin(管理者)画面について<br>
                    <br>
                    1.<a class="text-blue-500 hover:text-blue-800 font-bold" href="{{ route('admin.owners.index') }}">「オーナー管理」</a>タブ<br>
                      オーナー一覧が表示される画面です。<br>
                      表示されている オーナーの「編集」「削除」が可能です。<br>
                      ※削除はソフトデリートとなり、削除したオーナーは「期限切れオーナー一覧」へ表示されます<br>
                      <br>
                    2.<a class="text-blue-500 hover:text-blue-800 font-bold" href="{{ route('admin.expired-owners.index') }}">「期限切れオーナー一覧」</a>タブ<br>
                      「オーナー管理」で削除したオーナーが表示される画面です。<br>
                      「完全に削除」することが可能です。<br>
                      <br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
