@extends('layouts.main')

@section('content')
    <!-- Main -->
	<section id="main" class="contact-page">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="content-left">
						<h2>Say Hello!</h2>
						<form class="contact-form" method="post" action="{{route('contact.store')}}">
                            @csrf
							<div class="note"></div>
							<div class="input-wrap">
								<input type="text" value=""  placeholder="Name *" name="name" id="name">
							</div>
							<div class="input-wrap">
								<input type="text" value="" tabindex="3" placeholder="Email *" name="email" id="email">
							</div>
							<div class="message-wrap">
								<textarea class="" tabindex="5" placeholder="Message *" name="content" id="message"></textarea>
							</div>
							<div class="submit-contact" >
                                <button style="background-color: red" type="submit" class="send-btn gn-button">  Submit </button>
                            </div>
						</form><!-- /.comment-form -->
					</div><!-- /.content-left -->
				</div><!-- /.col-md-9 -->
				<div class="col-md-3">
					<div class="content-right">
						<h2>Contacts</h2>
						@foreach ($contact as $item)
						<div class="contact-info">
							<p class="title">{{$item->name}}</p>
							<p>{{$item->content}}</p>
							<p>Phone: +990 (312) 123 45 67</p>
							<p>Email: {{$item->email}}</p>
						</div>
						@endforeach
						
					</div><!-- /.content-right -->
				</div><!-- /.col-md-3 -->
				<div class="col-md-12">
					<h2 class="title-map">On The Map</h2>
					<div id="map" style="width: 100%; height: 550px">
                        {!!setting('site.googlemap')!!}
					</div><!-- /map -->
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</section>

@endsection