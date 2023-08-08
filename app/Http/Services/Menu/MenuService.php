<?php

namespace App\Http\Services\Menu;
use App\Models\Menu;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class MenuService 
{
  public function getParent()
  {
    return Menu::where('parent_id',0) -> get();
  }

  public Function getAll($id)
  {
    return Menu::orderbyDecs('id')->paginate(20);
  }
  
  
  public function create($request)
  {
        try {
          //dd($request->input());
          Menu::create([
            'name' =>(string) $request->input('name'),[
            'parent_id' => (int) $request->input('parent_id'),
            'describtion' => (string) $request->input('description'),
            'content' => (string) $request->input('content'),
            'active' => (string) $request->input('active'),
            ]]);

            
            Session::flash('success', 'Menu created successfully');
            }catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
            return false;
            }

            return true;
  }        
    
} 