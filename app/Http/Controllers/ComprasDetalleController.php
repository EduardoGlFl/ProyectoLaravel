<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\purchaseDetail;
use App\Models\section;

class ComprasDetalleController extends Controller
{

   function  __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        
        //make inner join to get all data from purchaseDetail, participants, purchase and tickets
       
        
        
        
       
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
       
        $purchaseDetails = purchaseDetail::join('participants', 'participants.id', '=', 'purchase_details.participants_id')
       ->join('purchases', 'purchases.id', '=', 'purchase_details.purchases_id')
       ->join('tickets', 'tickets.id', '=', 'purchase_details.tickets_id')       
       ->select('purchase_details.*', 'participants.*', 'purchases.*')
       ->find($id);

       


    //    $purchaseDetails = $detallespurchase::find($id);
       

       $sections = section::all();
      
       $getspecificdetailid = purchaseDetail::find($id);
         

       return view('purchasedetails.index', ['purchaseDetails' => $purchaseDetails, 'sections' => $sections, 'getspecificdetailid' => $getspecificdetailid]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
