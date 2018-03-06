<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Partner;
use App\CompanyOptimice;
use App\Helper;

class CompanyController extends Controller {

    public function index() {
        $companies = Company::all();
        //dd($companies);
        return view('company.index', compact('companies'));
    }

    public function create() {
        return view('company.create');
    }

    public function store(Request $request) {
        //dd($request->all());
        $company = Company::create(request(['business','business_rut','representative','representative_rut','item','county','address',
                                    'schedule','phone','celphone','speciality','doctor','email','contact','contact_phone','contact_mail']));
        
        foreach($request->partners as $partner) {
            Partner::create([
                'company_id' => $company->id,
                'name' => $partner['name'],
                'percentage' => $partner['percentage'],
                'rut' => $partner['rut'],
                'sii' => $partner['sii']
            ]); 
        }                                    

        $attention_mail = false;
        if (request('attention_mail') == 'on') $attention_mail = true;

        $attention_visit = false;
        if (request('attention_visit') == 'on') $attention_visit = true;

        CompanyOptimice::create([
            'company_id' => $company->id,
            'ingress' => request('ingress'),
            'executive' => request('executive'),
            'schedule' => request('schedule'),
            'honorary' => request('honorary'), 
            'payment' => request('payment'),
            'sii' => request('key_sii'),
            'remuneration' => request('remuneration'),
            'previred' => request('key_previred'),
            'amount' => request('amount'),
            'tax' => request('tax'),
            'remuneration_type' => request('remuneration_type'),
            'billing' => request('billing'),
            'ticket' => request('ticket'),
            'attention_mail' => $attention_mail,
            'attention_visit' => $attention_visit,
            'ticket_monthly' => request('ticket_monthly'),
            'complexity' => request('complexity'),
            'observations' => request('observations')
        ]); 
   
        return redirect('/company');
    }

    public function show(Company $company) {
        //dd($id);
        return view('company.show', compact('company'));
    }

    public function edit(Company $company) {
        //dd($company);
        return view('company.edit', compact('company'));
    }
}
