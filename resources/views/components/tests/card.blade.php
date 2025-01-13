{{-- Component 属性でデータ受け渡し(@props) --}}
{{-- @props(['title', 'content', 'message']) --}}

@props([
    'title' => 'タイトルです' ,
    'content' => '初期値です' ,
    'message' => '本文初期値です'
    ])

{{-- <div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
</div>

<div class="card">
    <div class="card-header">
        {{ $header }}
    </div>
    <div class="card-body">
        {{ $slot }}
    </div>
</div> --}}

{{-- 1つのカードのみCSSを変更したい --}}
{{-- componentを使いつつ親側でclassを変えたい場合$attributes mergeを使う --}}
<div {{ $attributes->merge([
    'class' => 'border-2 shadow-md w-1/4 p-2'
    ]) }} >
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>