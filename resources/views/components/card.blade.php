{{-- Component 属性でデータ受け渡し(@props) --}}
@props(['title', 'content', 'message'])

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


<div class="border-2 shadow-md w-1/4 p-2">
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>