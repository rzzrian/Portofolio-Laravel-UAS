<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\HomeModel;
use App\Models\AboutModel;
use App\Models\ServicesModel;
use App\Models\PortfolioModel;
class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('backend.dashboard.list');
    }

    public function admin_home(Request $request)
    {
        $data['getrecord'] = HomeModel::all();
        return view('backend.home.list', $data);
    }

    public function admin_home_post(Request $request)
    {
        // Validasi data
        $request->validate([
            'your_name' => 'required|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:2000',
            'profile' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        // Check if we are adding a new record or updating an existing one
        if ($request->add_to_update == "Add") {
            $insertRecord = new HomeModel();
        } else {
            $insertRecord = HomeModel::find($request->id);
            if (!$insertRecord) {
                return redirect()->back()->withErrors('Record not found.');
            }
        }

        // Assign the input data
        $insertRecord->your_name = trim($request->your_name);
        $insertRecord->facebook = trim($request->facebook);
        $insertRecord->twitter = trim($request->twitter);
        $insertRecord->instagram = trim($request->instagram);
        $insertRecord->linkedin = trim($request->linkedin);
        $insertRecord->whatsapp = trim($request->whatsapp);
        $insertRecord->description = trim($request->description);

        // Handle file upload
        if ($request->hasFile('profile')) {
            if (!empty($insertRecord->profile) && file_exists(public_path('img/' . $insertRecord->profile))) {
                unlink(public_path('img/' . $insertRecord->profile));
            }

            $file = $request->file('profile');
            $filename = Str::random(30) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $filename);
            $insertRecord->profile = $filename;
        }

        // Save the record
        $insertRecord->save();

        return redirect()->back()->with('success', 'Home Page Successfully Saved');
    }

    public function admin_about(Request $request)
    {
        $data['getrecord1'] = AboutModel::all();
        return view('backend.about.list', $data);
    }

    public function admin_about_post(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'yourname' => 'required|string|max:255',
            'aboutme' => 'required|string|max:2000',
            'aboutimage' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        // Check if we are adding a new record or updating an existing one
        if ($request->add_to_update == "Add") {
            $insertRecord1 = new AboutModel();
        } else {
            $insertRecord1 = AboutModel::find($request->id);
            if (!$insertRecord1) {
                return redirect()->back()->withErrors('Record not found.');
            }
        }

        // Assign the input data
        $insertRecord1->yourname = trim($validatedData['yourname']);
        $insertRecord1->aboutme = trim($validatedData['aboutme']);

        // Handle file upload
        if ($request->hasFile('aboutimage')) {
            if (!empty($insertRecord1->aboutimage) && file_exists(public_path('img/' . $insertRecord1->aboutimage))) {
                unlink(public_path('img/' . $insertRecord1->aboutimage));
            }

            $file = $request->file('aboutimage');
            $filename = Str::random(30) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $filename);
            $insertRecord1->aboutimage = $filename;
        }

        // Save the record
        $insertRecord1->save();

        return redirect()->back()->with('success', 'About Page Successfully Saved');
    }

    public function admin_services(Request $request)
    {
        $data['getrecord2'] = ServicesModel::all();
        return view('backend.services.list', $data);
    }

    public function admin_services_post(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'skill1' => 'required|string|max:255',
            'skill1desc' => 'required|string|max:2000',
            'skill2' => 'required|string|max:255',
            'skill2desc' => 'required|string|max:2000',
            'skill3' => 'required|string|max:255',
            'skill3desc' => 'required|string|max:2000',
            'serviceimage' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        // Check if we are adding a new record or updating an existing one
        if ($request->add_to_update == "Add") {
            $insertRecord2 = new ServicesModel();
        } else {
            $insertRecord2 = ServicesModel::find($request->id);
            if (!$insertRecord2) {
                return redirect()->back()->withErrors('Record not found.');
            }
        }

        // Assign the input data
        $insertRecord2->skill1 = trim($validatedData['skill1']);
        $insertRecord2->skill1desc = trim($validatedData['skill1desc']);
        $insertRecord2->skill2 = trim($validatedData['skill2']);
        $insertRecord2->skill2desc = trim($validatedData['skill2desc']);
        $insertRecord2->skill3 = trim($validatedData['skill3']);
        $insertRecord2->skill3desc = trim($validatedData['skill3desc']);

        // Save the record
        $insertRecord2->save();

        return redirect()->back()->with('success', 'Services Page Successfully Saved');
    }

    public function admin_portfolio(Request $request)
    {
        // Fetch the most recent record if available
        $data['getrecord3'] = PortfolioModel::latest()->first(); // Adjust if needed to fit your use case
    
        return view('backend.portfolio.list', $data);
    }
    
    public function admin_portfolio_post(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'category1' => 'required|string|max:255',
            'description1' => 'required|string',
            'category2' => 'required|string|max:255',
            'description2' => 'required|string',
            'category3' => 'required|string|max:255',
            'description3' => 'required|string',
            'category4' => 'required|string|max:255',
            'description4' => 'required|string',
            'category5' => 'required|string|max:255',
            'description5' => 'required|string',
            'category6' => 'required|string|max:255',
            'description6' => 'required|string',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image5' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image6' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Check if we are adding a new record or updating an existing one
        if ($request->input('add_to_update') === 'Add') {
            $insertRecord3 = new PortfolioModel();
        } else {
            $insertRecord3 = PortfolioModel::find($request->input('id'));
            if (!$insertRecord3) {
                return redirect()->back()->withErrors('Record not found.');
            }
        }
    
        // Assign the input data
        $insertRecord3->category1 = trim($validatedData['category1']);
        $insertRecord3->description1 = trim($validatedData['description1']);
        $insertRecord3->category2 = trim($validatedData['category2']);
        $insertRecord3->description2 = trim($validatedData['description2']);
        $insertRecord3->category3 = trim($validatedData['category3']);
        $insertRecord3->description3 = trim($validatedData['description3']);
        $insertRecord3->category4 = trim($validatedData['category4']);
        $insertRecord3->description4 = trim($validatedData['description4']);
        $insertRecord3->category5 = trim($validatedData['category5']);
        $insertRecord3->description5 = trim($validatedData['description5']);
        $insertRecord3->category6 = trim($validatedData['category6']);
        $insertRecord3->description6 = trim($validatedData['description6']);
    
        // Handle image uploads
        $imageFields = ['image1', 'image2', 'image3', 'image4', 'image5', 'image6'];
        foreach ($imageFields as $imageField) {
            if ($request->hasFile($imageField)) {
                // Delete old image if exists
                if ($insertRecord3->$imageField && file_exists(public_path('img/' . $insertRecord3->$imageField))) {
                    unlink(public_path('img/' . $insertRecord3->$imageField));
                }
    
                // Store new image
                $file = $request->file($imageField);
                $filename = Str::random(30) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('img'), $filename);
                $insertRecord3->$imageField = $filename;
            }
        }
    
        // Save the record
        $insertRecord3->save();
    
        return redirect()->back()->with('success', 'Portfolio Page Successfully Saved');
    }
    
    
    
    public function admin_contacts(Request $request)
    {
        return view('backend.contacts.list');
    }
}
