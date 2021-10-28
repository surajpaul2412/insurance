<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>DeHaat | Insurance crop</title>
	<link rel="icon" href="https://www.agrevolution.in/assets/frontend/images/favicon.png" type="image" sizes="16x16">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- custom css -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<style>
		.call:last-child{
			display: none;
		}
		body, html{
            font-family: 'Montserrat', sans-serif;
        }
        .content{
            font-size: 14px;
        }
        .border-rounded{
        	border-radius: 8px;
        }
	</style>
</head>
<body>
	<section class="d-block mx-auto bg-white" style="max-width: 500px;height: 100vh;">
		<section class="container">
			<nav class="navbar bg-white py-2">
	            <img src="https://www.agrevolution.in/assets/frontend/images/logo-inner.svg" alt="Dehaat Logo"
	                class="d-block mx-auto" width="35%">
	        </nav>
			<div align="center">
				<img src="{{asset('images/thankyou.png')}}" class="d-block mx-auto border-rounded" width="100%">
			</div>

			<div class="mt-4 pb-5">
				<p class="text-black lh-1 font-weight-600" style="font-size: 18px;">
					देहात फसल बीमा योजना के लिए आपका नाम दर्ज हो गया है। हमारे प्रतिनिधि जल्द ही आप संपर्क करेंगे । <br/><br/>
					आज ही नीचे दिए गए नज़दीकी देहात सेंटर पर जाएं और मुफ्त सैटेलाइट आधारित गेहूं फसल बीमा खरीद अपनी फसल को बनाएं सुरक्षित और खुद को करें सुनिश्चित ।
				</p>
				<div class="pt-3">
					@if($centers->count())
					@foreach($centers as $center)
					<hr>
					<div class="row align-items-center">
						<div class="col-md-12 col-12" align="left">
							<div class="font-weight-600 text-dark">{{$center->partner}}</div>
							<div>
								<span class="font-weight-600 text-dark">Center Id :</span> {{$center->partner_id}} 
							</div>
							<div>
								<span class="font-weight-600 text-dark">Address :</span>
								{{$center->node}},
								{{$center->state}},
								{{$center->pincode}}
							</div>
							<div class="">
								<!-- <a href="https://goo.gl/maps/VnZJ9FnQV8fGt4rg6" target="_blank" class="btn btn-info text-white mt-2">
									<img src="img/loc.png" width="35px" class="pr-2">
									सेंटर तक का रास्ता
								</a> -->
								<?php
									$contact = explode (",", $center->secondary_contact_numbers);
								?>
								@foreach($contact as $call)
								<a href="tel:{{$call}}" class="btn btn-white text-dark call mt-2">
									<img src="img/call.png" width="26px" class="pr-2 py-1">
									कॉल करें
								</a>
								@endforeach
							</div>
						</div>
					</div>
					@endforeach
					@else
						<div class="align-items-center text-success">
							Sorry ! There are no centers around to your location.
						</div>
					@endif
				</div>
			</div>
		</section>
	</section>
</body>
</html>
