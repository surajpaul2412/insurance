<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
<body class="bg-warning">
	<section class="d-block mx-auto bg-warning" style="max-width: 450px;">
		<section class="container">
			<div align="center">
				<div class="btn-violet px-0 py-1 mt-3 mx-65 border-radius-8" class="index.html">
					<img src="img/DeHaat_Logo.png" class="d-block mx-auto" width="55%">
				</div>
			</div>
		</section>
		<section class="container pt-2 pb-3">
			<div class="bg-white p-3 border-radius-8">
				<img src="{{asset('images/banner.png')}}" class="d-block mx-auto border-rounded" width="100%">
	            <h4 class="heading text-black pt-4 lh-1 font-weight-bold" align="center">
	                <span style="color: #128141;">देहात फसल बीमा लेने के लिए नीचे दिए गए फॉर्म को भरें :</span>
	            </h4>
				<form class="mt-2" method="POST" action="{{route('centers')}}">
					@csrf
					@method('POST')
					<label>नाम<em>*</em></label>
					<input  type="text" class="form-control @error('name') is-invalid @enderror" name="name" fieldType=1 maxlength="255" value="{{ old('name') }}" required/>
					@error('name')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror

					<!--Phone-->
					<label>मोबाइल नंबर<em>*</em></label>
					<input type="tel" class="form-control @error('mobile') is-invalid @enderror" name="mobile" pattern="[0-9]*" maxlength="10" value="{{ old('mobile') }}" required/>
					@error('mobile')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
					<!--Single Line-->
					
					<!--Number-->
					<label>राज्य<em>*</em></label>
					<select name="state" class="form-control @error('state') is-invalid @enderror" required>
						<option value="">-- किसी एक का चयन करें --</option>
						<option value="Bihar">Bihar</option>
						<option value="Jharkhand">Jharkhand</option>
						<option value="Uttar Pradesh">Uttar Pradesh</option>
					</select>
					@error('state')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror

					<label>पिनकोड<em>*</em></label>
					<input type="text" class="form-control @error('pincode') is-invalid @enderror" name="pincode" pattern="[0-9]*" minlength="5" maxlength="6" value="{{ old('pincode') }}" required/>
					@error('pincode')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror
					
					<label>जिला</label>
					<input  type="text" class="form-control @error('district') is-invalid @enderror" value="{{ old('district') }}" name="district" maxlength="255"/>
					@error('district')
	                    <span class="invalid-feedback" role="alert">
	                        <strong>{{ $message }}</strong>
	                    </span>
	                @enderror

					<button class="btn btn-success mt-3 w-100" type="submit">जानकारी जमा करें</button>
				</form>
			</div>
		</section>
	</section>
</body>
</html>
