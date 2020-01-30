<?php

namespace App\Http\Controllers;

use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $data = Customer::all();
        return $data;
    }
    public function show($id)
    {
        $data = Customer::findOrFail($id);
        return $data;
    }
    public function store($kode_customer, $name, $email, $country, $city, $address, $contact_number)
    {
        $data = new Customer();
        $data->kode_customer = $kode_customer;
        $data->name = $name;
        $data->email = $email;
        $data->country = $country;
        $data->city = $city;
        $data->address = $address;
        $data->contact_number = $contact_number;
        $data->save();
        return $data;

    }
    public function edit($id, $kode_customer, $name, $email, $country, $city, $address, $contact_number)
    {
        $data = Customer::find($id);
        $data->kode_customer = $kode_customer;
        $data->name = $name;
        $data->email = $email;
        $data->country = $country;
        $data->city = $city;
        $data->address = $address;
        $data->contact_number = $contact_number;
        $data->save();
        return $data;

    }
    public function delete($id)
    {
        $data = Customer::find($id);
        $data->delete();
    }
    public function About()
    {
        return view('about');
    }
}
