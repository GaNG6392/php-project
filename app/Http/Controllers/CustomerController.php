<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {
        $url = url('/customer');
        $data = compact('url');
        return view('customer')->with($data);
    }

    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());

        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = md5($request['password']);
        $customer->address = $request['address'];
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->gender = $request['gender'];
        $customer->DOB = $request['dob'];
        $customer->save();

        return redirect('/customer');
    }

    public function view()
    {
        $customers = Customer::all();
        $data = compact('customers');
        return view('customer-view')->with($data);
    }

    public function delete($id)
    {
        $customers = Customer::find($id);
        if (!is_null($customers)) {
            $customers->delete();
        }
    }

    public function edit($id)
    {
        $customers = Customer::find($id);

        if (is_null($customers)) {
            return redirect('customer');
        } else {
            $url = url('/customer/update') . "/" . $id;
            $data = compact('customers');
            return view('customer')->with('data', 'url');
            // return view('customer');
        }
    }
}
