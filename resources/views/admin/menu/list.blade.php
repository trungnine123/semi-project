<?php
namespace App\Helpers;
use App\Helpers\Helper;
?>
@extends('admin.main')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Active</th>
            <th>Update</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        {{decla::menuList($menus)}}
    </tbody>
</table>
@endsection