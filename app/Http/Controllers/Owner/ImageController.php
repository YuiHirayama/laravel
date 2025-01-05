<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Closure;
use App\Http\Requests\UploadImageRequest;


class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:owners');

        $this->middleware(function (Request $request, Closure $next) {

            $id = $request->route()->parameter('image');
            if(!is_null($id)){
            $imagesOwnerId = Image::findOrFail($id)->owner->id;
                $imageId = (int)$imagesOwnerId;
                if($imageId !== Auth::id()){
                    abort(404);
                }
             }
            return $next($request);
        });
    }

    public function index()
    {
        $images = Image::where('owner_id', Auth::id())
        ->orderBy('updated_at', 'desc')
        ->paginate(20);

        return view('owner.images.index',
        compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('owner.images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UploadImageRequest $request)
    {
        $imageFiles = $request->file('files'); // 複数のファイルを取得
        if(!is_null($imageFiles)){ // 念のためnull判定
            foreach($imageFiles as $imageFile){
                // 配列内の要素が `UploadedFile` インスタンスか確認
                if ($imageFile instanceof \Illuminate\Http\UploadedFile) {
                    // ファイルを "products" フォルダに保存し、保存されたパスを取得
                    $filePath = $imageFile->store('products', 'public');
                    // 保存されたパスからファイル名を取得
                    $fileNameToStore = basename($filePath);
                    // データベースに保存
                    Image::create([
                        'owner_id' => Auth::id(),
                        'filename' => $fileNameToStore,
                    ]);
                }
            }
        }

        return redirect()->route('owner.images.index')
        ->with(['message' => '画像登録を実施しました。',
        'status' => 'info']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
