<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image; // Adjust this based on your model

class ImageController extends Controller
{
    public function show($id)
    {
        // Retrieve the image from the database based on the $id parameter
        $image = Image::find($id);

        if (!$image) {
            // Handle image not found, return a default image, or display an error message
            return response()->view('errors.image-not-found', [], 404);
        }

        // Set the appropriate content type for the image (e.g., 'image/jpeg' or 'image/png')
        $contentType = 'image/png'; // Adjust this based on your image type

        // Return the image data with the content type
        return response($image->data)->header('Content-Type', $contentType);
    }
}
