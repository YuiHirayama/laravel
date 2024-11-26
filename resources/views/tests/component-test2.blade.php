@vite('resources/css/app.css')

<x-tests.card>
    <x-slot name="header">ヘッダー2</x-slot>
コンポーネントテスト2
</x-tests.card>

{{-- Bladeファイル内で以下のようにcomponentのクラス名を指定すると、
app>view>components配下のクラスファイル【TestClassBase.php】が呼び出され、
【TestClassBase.php】内のrenderメソッドに記載があるviewのComponentが呼び出される。
public function render(): View|Closure|string
    {
        return view('components.tests.test-class-base-component');
    } --}}
<x-test-class-base classBaseMessage="メッセージです" />
<div class="mb-4"></div>
<x-test-class-base classBaseMessage="メッセージです" defaultMessage="初期値から変更しています" />