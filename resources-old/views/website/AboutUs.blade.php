
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
<style>
    .custom-font-size-1 {
       font-size: 1.3em !important;
        line-height: 25px;
    }
    h2 {
        line-height: 40px;
    }
</style>


    <section id="speakers" class="bg-color-light pt-4">
        <div class="container mt-4 pt-4 pb-4">
            <div class="row pt-2">
                <div class="col">
                    <h2 class="text-color-dark text-uppercase font-weight-bold text-left mb-3">MOTORCYCLISTS TAKE UP ROUND THE WORLD CHALLLENGE IN MEMORY OF THOSE LOST THROUGH THE PANDEMIC</h2>
                    <p class="custom-font-size-1 text-left mb-4">
                        •	Our Global Ride Team is just a group of ordinary people but ones that share a joint
                            passion regarding motorcycles and good causes for others. Born from the need to help
                            others during the pandemic we devised the Memorial ride to raise funds for COVAX to
                            help in some way vaccinate those who are less able than some of the richer countries
                            around our world.
                    </p>
                    <p class="custom-font-size-1 text-left mb-4">
                        •	 It is clear that COVID – 19 has been devastating to many families and has affected
                             us all in some form or other.
                    </p>
                    <p class="custom-font-size-1 text-left mb-4">
                        •	Our vision, born out of this devastating was to connect countries across the
                            globe in a new initiative involving a collective of keen motorcyclists.
                            The initial idea was inspired by the loss of a family member through COVID who
                            suddenly succumbed to this devastating disease and sadly is no longer with us.
                            It was this that inspired us to come up with a ‘Memorial Ride’ in memory of those
                            we have lost through COVID and through donations raise much needed monies for
                            COVAX.
                    </p>

                    <p class="custom-font-size-1 text-left mb-4">
                        •	Starting in New Zealand and finishing in Alaska, we want the spirit and passion of
                            fellow motorbike riders to rev it up and connect the world!
                    </p>

                </div>
            </div>
        </div>
   </section>

</main>

@endsection


