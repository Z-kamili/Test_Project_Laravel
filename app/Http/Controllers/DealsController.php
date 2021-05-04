<?php

namespace App\Http\Controllers;

use App\Http\Requests\DealsValidation;
use App\Humain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        return view('Deals.AddDeals');
    }
    public function create()
    {
        $date = date('Y-m-d H:i:s');
        $deals =  DB::table('humains')->where('Last_date','<=',$date)->get();
        return view('ExpDeals',compact('deals','date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DealsValidation $request)
    {
        try{
            $validated = $request->validated();
            $Humain = new Humain();
            $Humain->name =  $request->name;
            $Humain->email = $request->email;
            $Humain->Matricule = $request->Matricule;
            $Humain->First_date = $request->First_date;
            $Humain->Last_date = $request->Last_date;
            $Humain->save();
            return redirect()->route('Deals.index');
          }catch(\Exception $e){
      
            return redirect()->back()->withErrors(['error'=>$e->getMessage()]);
      
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($deals)
    {
        $deals = Humain::findOrFail($deals);
        return view('Deals.Update', ['deals' => $deals]);
    }

    public function Delete_view(){

        return "hello";

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DealsValidation $request, $id)
    {
        $deals = Humain::findOrFail($id);
        $deals->update([
            'name' => $request->input('name'),
            'email'=>$request->input('email'),
            'Matricule'=>$request->input('Matricule'),
            'First_date'=>$request->input('First_date'),
            'Last_date'=>$request->input('Last_date')
        ]);
        return redirect()->route('home'); 
    }

    public function deleteitem($id){

        
        return view('Deals.delete', ['deals' =>$id]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Humain::findOrFail($id)->delete();
        return redirect()->route('home');
    }
}
