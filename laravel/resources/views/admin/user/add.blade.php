@extends('layout.admin')

@section('content')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>用户添加</span>
    </div>
    <div class="mws-panel-body no-padding">
		@if (count($errors) > 0)
			<div class="mws-form-message error">
				错误信息
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
    	<form action="/admin/user/insert" method="post" class="mws-form" enctype="multipart/form-data">
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">用户名</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name="username" value="{{old('username')}}">
    				</div>
    			</div>


    		</div>
			<div class="mws-form-inline">
				<div class="mws-form-row">
					<label class="mws-form-label">密码</label>
					<div class="mws-form-item">
						<input type="password" class="small" name="password">
					</div>
				</div>


			</div>

			<div class="mws-form-inline">
				<div class="mws-form-row">
					<label class="mws-form-label">确认密码</label>
					<div class="mws-form-item">
						<input type="password" class="small" name="repassword">
					</div>
				</div>


			</div><div class="mws-form-inline">
				<div class="mws-form-row">
					<label class="mws-form-label">邮箱</label>
					<div class="mws-form-item">
						<input type="text" class="small" name="email">
					</div>
				</div>
			</div>
			<div class="mws-form-inline">
				<div class="mws-form-row">
					<label class="mws-form-label">手机</label>
					<div class="mws-form-item">
						<input type="text" class="small" name="phone">
					</div>
				</div>
			</div>

			<div class="mws-form-inline">
				<div class="mws-form-row">
					<label class="mws-form-label">图片</label>
					<div class="mws-form-item">
						<input type="file" class="small" name="profile">
					</div>
				</div>
			</div>
    		<div class="mws-button-row">
    			{{csrf_field()}}
    			<input type="submit" class="btn btn-danger" value="Submit">
    			<input type="reset" class="btn " value="Reset">
    		</div>
    	</form>
    </div>    	
</div>
@endsection