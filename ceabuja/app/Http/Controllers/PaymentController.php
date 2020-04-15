<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    //

    public function verifyPayment(Request $request)
    {
        //Paystack verification

        $curl = curl_init();
        $reference = isset($_POST['reference']) ? $_POST['reference'] : '';
        if(!$reference){
            return response()->json([
                "status" => false,
                "message" => "No response supplied"

            ]);
        }

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "authorization: Bearer sk_live_6cb328648910eae58daff309fa722fb63f3f852b",
                "cache-control: no-cache"
            ],
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);



        if($err){
            // there was an error contacting the Paystack API

            return response()->json([
                "status" => false,
                "message" => "There was an error contanct the Payment API "

            ]);


        }

        $tranx = json_decode($response);


//var_dump($tranx);exit;


        if(!$tranx->status){
            // there was an error from the API
            die('API returned error: ' . $tranx->message);
        }

        if('success' == $tranx->data->status){
            // transaction was successful...
            // please check other things like whether you already gave value for this ref
            // if the email matches the customer who owns the product etc
            // Give value

            $payment = new Payment();
            $payment -> first_name = $request -> first_name;
            $payment -> last_name = $request -> last_name;
            $payment -> email = $request -> email;
            $payment -> category = $request -> category;
            $payment -> subcategory = $request -> subcategory;
            $payment -> amount = $request -> amount;
            $payment -> reference = $request -> reference;
            $payment -> date = date("D, M jS, Y");

            $payment -> save();

            return response()->json([
                "status" => true,
                "message" => "Payment successful"

            ]);
        }else{
            return response()->json([
                "status" => false,
                "message" => "There was an error processing your payment code:1102"

            ]);
        }

    }






    public function memberVerifyPayment(Request $request)
    {
        //Paystack verification

        $curl = curl_init();
        $reference = isset($_POST['reference']) ? $_POST['reference'] : '';
        if(!$reference){
            return response()->json([
                "status" => false,
                "message" => "No response supplied"

            ]);
        }

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "authorization: Bearer sk_live_6cb328648910eae58daff309fa722fb63f3f852b",
                "cache-control: no-cache"
            ],
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);



        if($err){
            // there was an error contacting the Paystack API

            return response()->json([
                "status" => false,
                "message" => "There was an error contanct the Payment API "

            ]);


        }

        $tranx = json_decode($response);


//var_dump($tranx);exit;


        if(!$tranx->status){
            // there was an error from the API
            die('API returned error: ' . $tranx->message);
        }

        if('success' == $tranx->data->status){
            // transaction was successful...
            // please check other things like whether you already gave value for this ref
            // if the email matches the customer who owns the product etc
            // Give value

            $payment = new Payment();

            $payment -> unique_id = Auth::user() -> unique_id;
            $payment -> category = $request -> category;
            $payment -> subcategory = $request -> subcategory;
            $payment -> amount = $request -> amount;
            $payment -> reference = $request -> reference;
            $payment -> date = date("D, M jS, Y");

            $payment -> save();

            return response()->json([
                "status" => true,
                "message" => "Payment successful"

            ]);
        }else{
            return response()->json([
                "status" => false,
                "message" => "There was an error processing your payment code:1102"

            ]);
        }

    }
}
