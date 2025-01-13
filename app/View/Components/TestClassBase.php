<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

// クラスベースで属性を設定する
class TestClassBase extends Component
{
    public $classBaseMessage; // 追記部分
    public $defaultMessage; // 追記部分

    /**
     * Create a new component instance.
     */
    // クラスベースで属性や初期値を設定する場合には、以下【construct】の設定が必要
    // Componentが主流だが、変数を分離させたい等あればクラスベースの実装方法を使用する
    public function __construct($classBaseMessage ,$defaultMessage="初期値です") // 追記部分
    {
        $this->classBaseMessage = $classBaseMessage; // 追記部分
        $this->defaultMessage = $defaultMessage; // 追記部分
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tests.test-class-base-component'); // 追記部分
    }
}
