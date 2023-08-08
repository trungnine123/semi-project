<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\CreateFormRequest;
use Illuminate\Http\Request;
use App\Http\Services\Menu\MenuService;
class MenuController extends Controller
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }


    public function create()
    {
        return view('admin.menu.add', [
            'title' => 'Add A New Menu',
            'menus' => $this->menuService->getParent(0)
        ]);
    }

    public function store(CreateFormRequest $request)
    {
        $result = $this->menuService-> create($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.menu.list', [
            'title' => 'List of Menus',
            'menus' => $this->menuService->getParent()
        ]);
    }
}
