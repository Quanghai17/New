@extends('layouts.main')

@section('content')
    <!-- Main -->
	<section id="main" class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="content-left">
						<h2>Say Hello!</h2>
						<form class="contact-form" method="post" action="{{route('creation.store')}}">
                            @csrf
							<div class="note"></div>
							<div class="input-wrap">
								<input type="text" value=""  placeholder="Tên bài viết *" name="title" >
							</div>
							<div class="input-wrap">
								<input type="text" value="" tabindex="3" placeholder="Người đăng *" name="author" >
							</div>
                            {{-- <div class="input-wrap">
								<input type="text" value="" tabindex="3" placeholder="Miêu tả *" name="desc" >
							</div> --}}
							<div class="message-wrap">
								<textarea class="" tabindex="5" placeholder="Nội dung *" name="content" id="message"></textarea>
							</div>
							<div class="submit-contact" >
                                <button style="background-color: red" type="submit" class="send-btn gn-button">  Submit </button>
                            </div>
						</form><!-- /.comment-form -->
					</div><!-- /.content-left -->
				</div><!-- /.col-md-9 -->
				</div><!-- /.col-md-12 --> 
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>

@endsection