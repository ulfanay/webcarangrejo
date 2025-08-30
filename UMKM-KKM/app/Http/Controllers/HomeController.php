<?php

namespace App\Http\Controllers;

use App\Models\posts;
use App\Models\albums;
use App\Models\photos;
use App\Models\Contact;
use App\Models\Profile;
use App\Models\Sejarah;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch latest posts (limit to 3 for the landing page)
        $latestPosts = posts::orderBy('created_at', 'desc')->limit(3)->get();
        
        // Fetch all albums
        $albums = albums::all();
        
        // Fetch contact information
        $contacts = Contact::orderBy('created_at', 'desc')->get();

        $sejarah = Sejarah::orderBy('created_at', 'desc')->get()->take(1);

        $profile = Profile::orderBy('created_at', 'desc')->get()->take(1);

        // Fetch latest photos (limit to 6 for the landing page)
        $latestPhotos = photos::orderBy('created_at', 'desc')->limit(6)->get();

        return view('welcome', compact('latestPosts', 'albums', 'contacts', 'latestPhotos', 'sejarah', 'profile'));
    }
}
