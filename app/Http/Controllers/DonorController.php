<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodGroup;
use App\Models\Donor;
use Illuminate\Http\RedirectResponse;

class DonorController extends Controller
{
    public function index() {
        $donors = Donor::get();
        return view('index', compact('donors'));
    }
    public function create() {
        $blood_groups = BloodGroup::get();
        return view('create', compact('blood_groups'));
    }

    public function store(Request $request): RedirectResponse {
        // dd($request->all());
        // $request->validate([
        //     'name' => 'require|max:255',
        //     'phone' => 'required|digits:10',
        //     'last_donation_date' => 'required',
        // ]);

        $donor= new Donor();
        $donor->name = $request->name;
        $donor->phone = $request->phone;
        $donor->address = $request->address;
        $donor->blood_group_id = $request->blood_group_id;
        $donor->last_donation_date = $request->last_donation_date;
        $donor->total_donation_count = $request->total_donation_count;

        $donor->save();
    }

    public function edit($id) {
        $blood_groups = BloodGroup::get();
        $donor = BloodGroup::where('id', $id)->first();
        return view('create', compact('donor', 'blood_groups'));
    }
}
