
@extends('website.website_layout.master')

@section('riders')
    {{$riders_count}}
@endsection
@section('country')
    {{$country_count}}
@endsection
@section('city')
    {{$city_count}}
@endsection



@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <style>
    .iti__selected-flag {
        right: 127px;
    }
    </style>
    <section id="speakers" class="bg-color-light pt-4">
        <div class="container mt-4 pt-4 pb-4">
            <div class="row pt-2">
                <div class="col" style="text-align:center">
                    <h2 class="text-color-dark text-uppercase font-weight-bold text-center mb-3">HOST A RIDE WITH US!</h2>
{{--                    <p class="custom-font-size-1 text-center mb-2">If you can't find your country OR city <a href="/host">BE A HOST NOW!</a></p>--}}
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <form name="myform" id="myForm" method="POST" action="/host-register">
                        @csrf

                        <br/>
                        <input  id="phone" type="tel" required name="contact" onchange="process()"  placeholder="Contact" style="width: 200%;left:-145px;padding: 15px;padding-left: 75px ;margin: 5px;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;">
                        <br/>
                        <input type="hidden" name="full_number" id="full_number">
                        <input style="width: 50%;padding: 15px;margin: 5px;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;" required type="text" name="name" placeholder="Name"/>
					   <input  style="width: 50%;padding: 15px;margin: 5px;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;"  required type="email"  name="email" placeholder="Email Address"/>

                        <input  style="width: 50%;padding: 15px;margin: 5px;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;" type="hidden" required value="2" name="user_type" placeholder="Email Address"/>
                        <select  style="width: 50%;padding: 15px;margin: 5px;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;" name="country" onchange="countrySelected(this)" >
                            <option value="" disabled selected>Select Country</option>
                            @foreach($all_country as $country)
                             <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                       </select>
                      <select style="width: 50%;padding: 15px;margin: 5px;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;"  id="city" name="city" required>
                           <option value="" disabled selected>Select City</option>

                      </select>
                        <input style="width: 50%;padding: 15px;margin: 5px;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;" type="password" minlength="8" name="password" required placeholder="Password (8 characters Minimum)"/>
						
						
						<input style="width: 50%;padding: 15px;margin: 5px;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;" required type="text" name="location" placeholder="Location"/>

						<input style="width: 50%;padding: 15px;margin: 5px;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;" required type="text" name="cause" placeholder="Cause"/>

						<textarea style="width:50%;margin:auto;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;"  required type="text" rows="5" name="description" class="form-control" placeholder="Description"></textarea>


                      <button style="background-color:black;color:white;width:50%;padding: 15px;margin: 5px;border-radius: 1px;font-family: inherit;"> HOST A RIDE </button>
                    </form>
                </div>

            </div>

        </div>
    </section>
<script>




    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
    const country_data = phoneInput.getSelectedCountryData();
    var code = country_data.dialCode;
    code = "+" + code; // convert 1 to +1
    document.getElementById("full_number").value = code;

    var input = document.querySelector("#phone");
    // var iti = window.intlTelInput(input, {
    //     utilsScript: "../../build/js/utils.js?1613236686837" // just for formatting/placeholders etc
    // });

    input.addEventListener('countrychange', function(e) {
        const country_data = phoneInput.getSelectedCountryData();
        var code = country_data.dialCode;
        code = "+" + code; // convert 1 to +1
        document.getElementById("full_number").value = code;
    });

    // function process() {
    //
    //     const phoneNumber = phoneInput.getNumber();
    //     const country_code = phoneInput.getSelectedCountryData();
    //     var code = country_code.dialCode;
    //     console.log(`Phone number in E.164 format: <strong>${country_code}</strong>`);
    //     document.getElementById("full_number").value = code;
    // }
    function countrySelected(country)
    {
		
        var country_id=country.value;
		
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            method:"POST",
            url:"getcityByCountry",
            data: {id: country_id},
            success:function(data) {
				
                $('#city').html('');
                for(var i=0;i<data.length;i++)
               {
				     $('#city').append(`<option value="${data[i].id}">${data[i].name}</option>`);
               }
            }
        });
    }

</script>
</main>


@endsection

