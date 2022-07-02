




<!DOCTYPE html> 
<html lang="en">
	<head>

        @include('layouts.style')
        @yield('css')
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			
			<!-- Breadcrumb -->
            @include('layouts.breadcrumb')
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					@yield('content')
					
				</div>			
			</div>
			<!-- /Page Content -->
   
			<!-- Footer -->
            @include('layouts.footer')
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		
		@include('layouts.script')
        @yield('js')
		
	</body>
</html>