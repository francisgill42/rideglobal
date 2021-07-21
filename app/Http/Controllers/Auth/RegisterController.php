<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\all_country as Country;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\HostLocation;
use App\Models\Host;
//use http\Env\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Mail;


use App\Mail\HostCreated;

use App\Models\Rides;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'user_type' => ['required', 'int', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {

           $num=$request->input('full_number').$request->input('contact');
           dd($num);
//         dd($request->input('name'),$request->input('email'),$request->input('full_number'),$request->input('contact'),$request->input('country'),$request->input('city'),$request->input('password'));
         User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'user_type' => $request->input('user_type'),
            'contact' => $num,
            'password' => Hash::make($request->input('password')),
        ]);

         $host_data=User::latest()->first();
         $host_id=$host_data['id'];

         $country_name=$request->input('country');
         $city_name=$request->input('city');

         Country::insert($country_name);
         $country_data= Country::latest()->first();
         $country_id=$country_data['id'];

         $users=User::where('user_type',2)->get();

         (new \App\Models\City)->insert($country_id,$city_name,$host_id);

           return redirect()->back()->with('message', 'You Registration Request Has Been Submitted Successfully!')->with('users',$users);
    }

    protected function hostCreate(Request $request)
    {		
        DB::beginTransaction();

        $find=User::where('email',$request->input('email'))->first();
        
        if( $find ) {
            return redirect()->back()->with('message', 'This Email is Already Registered!');
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'user_type' => $request->user_type ?? 2,
            'contact' => $request->full_number . $request->contact,
            'user_type' => 2,
            'password' => Hash::make($request->password),
        ]);

         Host::create([
            'name' => $request->name,
            
            'email' => $request->email,

            'country_id' => $request->country,

         ]);

         HostLocation::create([
             "city_id" => $request->city,
             "host_id" => $user->id,
         ]);

         $this->insertRide($request);

        //  DB::rollBack();
        DB::commit();

        $this->SendMail($request);

           return redirect()->back()
                    ->with('message', 'You Registration Request Has Been Submitted Successfully!')
                    ->with('users', User::where('user_type',2)->get() );
    }

    public function insertRide($request)
    {
        $data = [
			'starting_date' => now(),
            'cause' => $request->cause,
            'description' => $request->description,
            'location' => $request->location,
        ];

        if(Rides::create($data)){
            return redirect('/showrides');
        }
        else{
            return back();
        }

    }

    public function SendMail($request)
    {
        Mail::to($request->email)
                ->cc('mfmalik1975@gmail.com')
				->bcc('Wcubemarketing@gmail.com')
				->bcc('francisgill1000@gmail.com')
                ->send(new HostCreated($request));
    }

}
