<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class RatingController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|integer|min:1|max:5',
        ]);
    
        $userRating = Rating::where('user_id', auth()->id())
                            ->where('product_id', $request->product_id)
                            ->first();
    
        if ($userRating) {
            return back()->with('error', 'You have already rated this product.');
        }
       
    
        Rating::create([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
            'rating' => $request->rating,
        ]);
        
    
        return back()->with('success', 'Thanks for rating this product!');
    }
}
