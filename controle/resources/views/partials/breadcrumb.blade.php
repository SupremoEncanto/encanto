<!--BEGIN TITLE & BREADCRUMB PAGE-->
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
	<div class="page-header pull-left">
		<div class="page-title">
			@yield('title')
		</div>
	</div>
	<ol class="breadcrumb page-breadcrumb pull-right">
		<li><i class="fa fa-home"></i>&nbsp;<a href="/">Home</a>&nbsp;<i class="fa fa-angle-right"></i></li>
		@for($i = 0; $i <= count(Request::segments()); $i++)
		<li>
		  <a href="" style="text-transform:  capitalize;">{{Request::segment($i)}}</a>
		  @if($i < count(Request::segments()) & $i > 0)
			{!!'&nbsp;<i class="fa fa-angle-right"></i>'!!}
		  @endif
		</li>
		@endfor
		
	</ol>
	<div class="clearfix">
	</div>
</div>
<!--END TITLE & BREADCRUMB PAGE-->