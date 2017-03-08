@extends('layouts.main')

@section('css')
    @parent
    
    <!-- Добавлять css тут -->
@overwrite

@section('js')
    @parent
    
    <!-- Добавлять js тут -->
@overwrite

@section("content")
	<div class="container">
	    <div class="content">
	        <div class="title">Laravel 5</div>
	    </div>
	</div>
@overwrite