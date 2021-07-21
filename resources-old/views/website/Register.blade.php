
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <section id="speakers" class="bg-color-light pt-4">
        <div class="container mt-4 pt-4 pb-4">
            <div class="row pt-2">
                <div class="col" style="text-align:center">
                    <h2 class="text-color-dark text-uppercase font-weight-bold text-center mb-1">Get Yourself Registered Now!</h2>
                    <p class="custom-font-size-1 text-center mb-2">If you can't find your country OR city <a href="/host">BE A HOST NOW!</a></p>

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form method="Post" action="/rider-registration">
                        @csrf
                        <input class="cs-form-input" required type="text" name="name" placeholder="Name"/>
                        <input class="cs-form-input" required type="email" name="email" placeholder="Email"/>
                        <select onchange="countrySelected(this)" id="country" required class="cs-form-input" name="country" onchange="selectedCountry(this)">
                            <option>Select Country</option>
                             @foreach($all_country as $country_data)
                                 {
                                   <option  value="{{$country_data->id}}">{{$country_data->name}}</option>
                                 }
                           @endforeach
                      </select>

                      <select id="city" required class="cs-form-input" name="city">
                           <option>Select City</option>

                      </select>

                      <input class="cs-form-input"  required type="password" minlength="8" name="password" placeholder="Password (Minimum Length 8)"/>

                      <input 
                        required
                        name="starting_date"
                        class="cs-form-input" 
                        placeholder="Date" 
                        class="cs-form-input" 
                        type="text" 
                        onfocus="(this.type='date')">


                      <input class="cs-form-input"required type="text" name="location" placeholder="Location"/>

                      <input class="cs-form-input" required type="text" name="cause" placeholder="Cause"/>

                      <textarea style="width:50%;margin:auto;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;"  required type="text" rows="5" name="description" class="form-control" placeholder="Description"></textarea>

                      <button style="background-color:black;color:white;width:50%;padding: 15px;margin: 5px;border-radius: 1px;font-family: inherit;"> REGISTER </button>
                    </form>
                </div>

            </div>

        </div>
    </section>
<script>
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

<style>
    .cs-form-input{

        width: 50%;padding: 15px;margin: 5px;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;

    }
    
</style>
</main>

@endsection


