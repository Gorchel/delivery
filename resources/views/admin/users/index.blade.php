@extends('admin.layouts.layouts')

@section('css')
    @parent
    <!-- Добавлять css тут -->


@overwrite

@section('js')
    @parent
    <!-- Добавлять js тут -->

@overwrite

@section("content")
   <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Пользователи</h1>
        </div>
        <div class="col-lg-12">
	        <div class="panel panel-info">
	            <div class="panel-heading">
	               <a href="/admin/user/create" class="btn btn-success btn-circle"><i class="fa fa-plus"></i></a>
	            </div>
	            <!-- /.panel-heading -->
	            <div class="panel-body">
	                <div class="table-responsive">
	                    <table class="table table-hover">
	                        <thead>
	                            <tr>
	                                <th>#</th>
	                                <th>First Name</th>
	                                <th>Last Name</th>
	                                <th>Email</th>
	                                <th>Роль</th>
	                                <th>Удалить</th>
	                            </tr>
	                        </thead>
	                        <tbody>
	                        	@forelse($users as $user)
		                            <tr>
		                                <td>{{$user->first_name}}</td>
		                                <td>{{$user->last_name}}</td>
		                                <td>{{$user->email}}</td>
		                                <td></td>
		                                <td></td>
		                            </tr>
		                        @empty
		                        	<tr><td class="text-center" colspan="99">Пользователи отсутствуют</td></tr>
		                        @endforelse
	                        </tbody>
	                    </table>
	                </div>
	                <!-- /.table-responsive -->
	            </div>
	            <!-- /.panel-body -->
	        </div>
	    </div>
    </div>
@overwrite

