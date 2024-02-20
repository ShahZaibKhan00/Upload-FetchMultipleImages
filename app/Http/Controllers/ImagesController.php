<?php

namespace App\Http\Controllers;

use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImagesController extends Controller
{
    //

    function index()
    {
        return view('index');
    }

    public function post(Request $request)
    {
        // $array = '';
        // if ($request->file('images')) {
        //     $files = $request->file('images');
        //     foreach ($files as $file) {
        //         $extension = $file->getClientOriginalName();
        //         $fileName = time() . $extension;
        //         $array = explode(', ', $fileName);
        //     }
        // }
        // return $array;
        // $array = array('Hello', 'World', '!');
        // $string = implode(', ', $array);
        // echo $string; // Output: Hello World !

        $imagesData = [];
        $imagePaths = ""; // Initialize a string to store concatenated image paths
        if ($request->hasFile('images')) {
            $files = $request->file('images'); // Get the uploaded files
            foreach ($files as $file) {
                // Process each uploaded file
                $extension = $file->getClientOriginalName();
                $fileName = time() . $extension;
                $path = 'images/';
                $file->move($path, $fileName);
                // Concatenate image paths with a separator
                // $imagePaths .= $pa th . $fileName . ",";
                $imagesData[] = $fileName;
            }
            // Remove the trailing comma
            // $imagePaths = rtrim($imagePaths, ',');



            // $imagePaths =
        }

        $image = new Images();
        $image->name = $request['name'];
        $image->images = implode(',', $imagesData);
        $image->save();
        // Add concatenated image paths to the array
        // $imagesData = [
        //     'name' => $request->name,
        //     'images' => $imagePaths
        // ];
        // Create a record for all uploaded images
        // Images::insert($imagesData);
        return response()->json("Multiple Images Loaded");
    }

    function data()
    {
        $images = Images::all();

        $imge = DB::table('images')->pluck('images');
        dump($imge);

        // loop over all returned records
        foreach ($imge as $fileString) {
            // now we have one single file record
            $arrayOfFiles = explode(',', $fileString);

            foreach ($arrayOfFiles as $singleFile) {
                // now you have one single file path
                dump($singleFile);
            }
        }


        return view('view', compact('images'));
    }

    function function()
    {
        $array = array('abc', 'yt', 'yrr');
        $json = json_encode($array);
        // foreach ($json as $att) {
        echo $json . '<br>';
        // }
    }
}
