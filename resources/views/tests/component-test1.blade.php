{{-- <x-tests.app>
    <x-slot name="header">ヘッダー1</x-slot>
コンポーネントテスト1
</x-tests.app> --}}

{{-- tailwindCSSを呼び出し --}}
@vite('resources/css/app.css')

{{-- Component 属性でデータ受け渡し(@props) --}}
<x-card title="タイトル" content="本文1" :message="$message" />