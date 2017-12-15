<?php

namespace App\Http\Controllers;

use App\ContactorAddress;
use App\ContactorContact;
use App\Employee;
use App\EmployeeContact;
use Illuminate\Http\Request;
use App\Country;
use App\City;
use App\Address;
use App\Contact;
use App\Contactor;

class AdminController extends Controller
{
    function getCountries()
    {
        $countries = Country::all();
        return view('countries')->with('countries', $countries);
    }

    function addCountry()
    {
        return view('addCountry');
    }

    function addCity($country_id)
    {
        return view('addCity')->with('country_id', $country_id);
    }

    function storeCountry(Request $request)
    {
        $countryName = $request->input('countryName');
        $country = new Country();
        $country->name = $countryName;
        $country->save();
        return redirect('/countries');
    }

    function storeCity(Request $request)
    {
        $countryId = $request->input('country_id');
        $cityName = $request->input('cityName');
        $city = new City();
        $city->country_id = $countryId;
        $city->name = $cityName;
        $city->save();
        return redirect('/countries');
    }

    function editCountry($id)
    {
        $country = Country::find($id);
        return view('editCountry')->withCountry($country);
    }

    function updateCountry(Request $request)
    {
        $countryName = $request->input('countryName');
        $id = $request->input('id');
        $country = Country::find($id);
        $country->name = $countryName;
        $country->save();
        return redirect('/countries');
    }

    function deleteCountry($id)
    {
        Country::destroy($id);
        return redirect('/countries');
    }

    function deleteCity($id)
    {
        City::destroy($id);
        return redirect('/countries');
    }

    function showCountry($id)
    {
        $country = Country::find($id);
        $cities = City::where('country_id', $id)->get();
        return view('cities')->withCountry($country)->withCities($cities);
    }

    function editCity($id)
    {
        $city = City::find($id);
        return view('editCity')->withCity($city);
    }

    function updateCity(Request $request)
    {
        $countryName = $request->input('cityName');
        $id = $request->input('id');
        $isHidden = $request->input('isHidden') ? 1 : 0;
        $city = City::find($id);
        $city->name = $countryName;
        $city->isHidden = $isHidden;
        $city->save();
        return redirect('/countries');
    }

    public function contacts()
    {
        $contacts = Contact::all();
        return view('contacts')->withCriteries($contacts);

    }

    public function storeContact(Request $request)
    {
        $name = $request['name'];
        $type = $request['type'];
        $contact = new Contact();
        $contact->name = $name;
        $contact->type = $type;
        $contact->save();
        return redirect('/contacts');

    }

    function deleteContact($id)
    {
        Contact::destroy($id);
        return redirect('/contacts');
    }

    public function addresses()
    {
        $contacts = Address::all();
        return view('addresses')->withCriteries($contacts);

    }

    public function storeAddress(Request $request)
    {
        $name = $request['name'];
        $type = $request['type'];
        $contact = new Address();
        $contact->name = $name;
        $contact->type = $type;
        $contact->save();
        return redirect('/addresses');

    }

    function deleteAddress($id)
    {
        Address::destroy($id);
        return redirect('/addresses');
    }

    public function contactors()
    {
        $contactors = Contactor::all();
        return view('contactors')->withContactors($contactors);

    }

    public function contactor($id)
    {
        $contactor = Contactor::find($id)->with(['contact', 'country', 'address'])->get();
        $cContact = ContactorContact::where('contactor_id', $id)->get();
        $cAddress = ContactorAddress::where('contactor_id', $id)->get();
        $employees = Employee::where('contactor_id', $id)->get();
        $eContact = EmployeeContact::where('employee_id', $employees[0]->id)->get();
//         dd($eContact);
        return view('contactor')->withContactor($contactor)->with('cContact', $cContact)->with('cAddress', $cAddress)->with('employees', $employees)->with('eContact', $eContact);

    }

    function getEContact($id)
    {
        $eContacts = EmployeeContact::where('employee_id', $id)->get();
        #ec = [];
        foreach ($eContacts as $item) {
            $eC[] =['id'=>$item->id,'type'=>$item->contactType->name,'contact'=>$item->value];
            }
        return json_encode($eC);
    }

    function test()
    {
        $contactor = Contactor::where('id', 1)->with(['contact', 'country', 'address'])->get();
        //  $cContact = ContactorContact::where('id',1)->with(['contactType','contactor'])->get();
        //$collection = ContactorContact::with('contactType', 'nested.relation')->get();
        dd($contactor);

    }

}
