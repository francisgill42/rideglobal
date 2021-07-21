
@extends('website.website_layout.master')

@section('riders')
    {{$riders}}
@endsection
@section('country')
    {{$country}}
@endsection
@section('city')
    {{$city}}
@endsection



@section('content')
    <section id="speakers" class="bg-color-light pt-4">
        <div class="container mt-4 pt-4 pb-4">
            <div class="row pt-2">
                <div class="col" style="text-align:center">
                    <h2 class="text-color-dark text-uppercase font-weight-bold text-center mb-1">Login To Your Account</h2>
                    <!-- <p class="custom-font-size-1 text-center mb-2">Porto Event 2021</p> -->
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form method="POST" action="/rider-login-check"  >
                        @csrf
                      <input style="width: 50%;padding: 15px;margin: 5px;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;" type="email" required name="email" placeholder="email"/>
                      <input style="width: 50%;padding: 15px;margin: 5px;border-radius: 1px;border: 1px solid #ccc; font-family: inherit;" type="password" required name="password" placeholder="password"/>
                      <button style="background-color:black;color:white;width:50%;padding: 15px;margin: 5px;border-radius: 1px;font-family: inherit;"> LOGIN </button>
                    </form>
                </div>

            </div>

        </div>
    </section>
</main>

@endsection


