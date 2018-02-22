<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Partner;
use App\CompanyOptimice;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        //dd($companies);
        return view('company.index', compact('companies'));
    }


    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $company = Company::create(request(['business','business_rut','representative','representative_rut','item','county','address',
                                    'schedule','phone','celphone','speciality','doctor','email','contact','contact_phone','contact_mail']));
        
        
        Partner::create([
            'company_id' => $company->id,
            'name' => request('partner_name'),
            'percentage' => request('partner_percentage'),
            'rut' => request('partner_rut'),
            'sii' => request('partner_sii')           
        ]);                            
        
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        return view('company.show');
    }

  
}
