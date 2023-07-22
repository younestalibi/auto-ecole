<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('cars');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $myProfile = User::find(Auth::user()->id)->Profile;
        // $carsCount = Car::all()->sum('number_of_cars');
        $carsCount = Car::all()->count();
        // $cars = Car::where('number_of_cars', '>', 0)->latest()->paginate(5);

        // $carsAll = Car::all();
        // $sumCarPrise = 0;
        // foreach ($carsAll as $car) {
        //     $sumCarPrise = $sumCarPrise  + ($car->price * $car->number_of_cars);
        // }

        if (Auth::user()->role == 'Administrator') {
            // $OraderTotalSum  = DB::table('orders')
            //     ->join('users', 'orders.user_id', '=', 'users.id')
            //     ->join('cars', 'orders.car_id', '=', 'cars.id')
            //     ->select('orders.*', 'cars.type', 'cars.price', 'cars.color', 'users.name as userName', 'cars.name as carName')
            //     ->latest()->get();
            // return $OraderTotalSum;
            // $OraderIncompleteSum =  DB::table('orders')
            //     ->where('status', '=', 'incomplete')
            //     ->join('users', 'orders.user_id', '=', 'users.id')
            //     ->join('cars', 'orders.car_id', '=', 'cars.id')
            //     ->select('orders.*', 'cars.type', 'cars.price', 'cars.color', 'users.name as userName', 'cars.name as carName')
            //     ->latest()->get();
            // $OraderCount = Order::where('status', '=', 'incomplete')->count();
            return view('home', compact('carsCount','myProfile'));
        } 
        else {
            return view('homeClient', compact('myProfile'));
        }
    }

    public function cars($type){
        $myProfile = User::find(Auth::user()->id)->Profile;
        // $carsCount = Car::all()->sum('number_of_cars');
        $cars = Car::where('lesson_type',$type )->get();
        // dd($cars);

        // $carsAll = Car::all();
        // $sumCarPrise = 0;
        // foreach ($carsAll as $car) {
        //     $sumCarPrise = $sumCarPrise  + ($car->price * $car->number_of_cars);
        // }

        $OraderCount = Order::where('user_id', '=', Auth::user()->id)->where('status', '=', 'incomplete')->count();
        return view('homeCustomer', compact('myProfile', 'cars'));
    }

    public function downloadFile(Car $file)
    {
        // dd($file->lesson);
        $filePath = public_path('users/lesson/'.$file->lesson); // Replace with the actual file path
        // dd(pathinfo($filePath,PATHINFO_BASENAME));

        // Check if the file exists
        if (file_exists($filePath)) {
            // Get the original file name
            $originalFileName = pathinfo($filePath, PATHINFO_BASENAME);

            // Perform the file download using Laravel's response()->download() method
            return response()->download($filePath, $originalFileName);
        } else {
            // File not found, return a 404 response or handle the error accordingly
            abort(404, 'File not found.');
        }
    }
}
