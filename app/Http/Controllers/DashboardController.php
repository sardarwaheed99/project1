<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\User;
use App\Order;
class DashboardController extends Controller
{

    public function index()
    {
        $uri = $_SERVER['REQUEST_URI'];
        
        $total_recipients=User::all();
        $total_recipients=$total_recipients->count();
        $active_recipients=User::where('admin',"1")->get();
        $active_recipients=$active_recipients->count();
        $closed_recipients=User::where('admin',"0")->get();
        $closed_recipients=$closed_recipients->count();
        
        $total_drafts=Order::get();
        $total_drafts=$total_drafts->count();
        if($total_drafts!=0)
        {
        $total_percentage=($total_drafts*100)/$total_drafts;
        }
        else{
            $total_percentage=0;
        }
        $delivered_drafts=Order::where('level',"delievered")->get();
        $delivered_drafts=$delivered_drafts->count();
        if($delivered_drafts!=0)
        {
            $delivered_percentage=($delivered_drafts*100)/$total_drafts;
        }
        else{
            $delivered_percentage=0;   
        }
        $undelivered_drafts=Order::where('level',"ordered")->get();
        $undelivered_drafts=$undelivered_drafts->count();
        if($undelivered_drafts!=0)
        {
            $undelivered_percentage=($undelivered_drafts*100)/$total_drafts;
        }
        else{
            $undelivered_percentage=0;   
        }
        $returned_drafts=Order::where('level',"returned")->get();
        $returned_drafts=$returned_drafts->count();
        if($returned_drafts!=0)
        {
            $returned_percentage=($returned_drafts*100)/$total_drafts;
        }
        else{
            $returned_percentage=0;   
        }
        $total_amount=0;
       
        
        
        
        $total=Order::where('level',"delievered")->get();
        foreach($total as $amount)
        {
        if($amount->amount!=null)
        {
        $total_amount=$total_amount + $amount->amount;
        }
    }
        $total_month=Order::get();
        $month_total=0;
        foreach($total_month as $amount)
        {
        if($amount->amount!=null)
        {
        $month_total=$month_total + $amount->amount;
        }
        }
      
        $undelivered_month=Order::where('level',"ordered")->get();
        $month_notdelivered=0;
        foreach($undelivered_month as $amount)
        {
        if($amount->amount!=null)
        {
        $month_notdelivered=$month_notdelivered + $amount->amount;
        }
        }
        $returned_month=Order::where('level',"returned")->get();
        $month_returned=0;
        foreach($returned_month as $amount)
        {
        if($amount->amount!=null)
        {
        $month_returned=$month_returned + $amount->amount;
        }
        }
        return view("dashboard ",[
            "total_recipients"=>$total_recipients,
            "active_recipients"=>$active_recipients,
            "closed_recipients"=>$closed_recipients,
          
            "total_drafts"=>$total_drafts,
            "delivered_drafts"=>$delivered_drafts,
            "undelivered_drafts"=>$undelivered_drafts,
            "returned_drafts"=>$returned_drafts,
            "total_percentage"=>$total_percentage,
            "delivered_percentage"=>$delivered_percentage,
            "undelivered_percentage"=>$undelivered_percentage,
            "returned_percentage"=>$returned_percentage,
            "total_amount"=>$total_amount,
            "month_total"=>$month_total,
           
            "month_notdelivered"=>$month_notdelivered,
            "month_returned"=>$month_returned
            ]
           
    );
    }
    public function products()
    {
        $product=Product::take(8)->get();
        return view('welcome',[
        "product"=>$product,
        
        ]);
    }

}