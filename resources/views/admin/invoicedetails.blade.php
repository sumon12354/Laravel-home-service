@extends('admin.layout.template')
@section('page_title')
    Dashboard -All-Booking
@endsection
@section('content')
   
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Invoice</title>
<link href="https://demandium-admin.6amtech.com/public/assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://demandium-admin.6amtech.com/public/assets/js/bootstrap.min.js"></script>
<script src="https://demandium-admin.6amtech.com/public/assets/js/jquery.min.js"></script>
<style>
        a {
            color: rgb(65, 83, 179) !important;
        }

        #invoice {
            padding: 30px;
        }

        .invoice {
            position: relative;
            background-color: #FFF;
            min-height: 680px;
            padding: 15px
        }

        .invoice header {
            padding: 10px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid rgb(65, 83, 179)
        }

        .invoice .company-details {
            text-align: right
        }

        .invoice .company-details .name {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .contacts {
            margin-bottom: 20px
        }

        .invoice .invoice-to {
            text-align: left
        }

        .invoice .invoice-to .to {
            margin-top: 0;
            margin-bottom: 0
        }

        .invoice .invoice-details {
            text-align: right
        }

        .invoice .invoice-details .invoice-id {
            margin-top: 0;
            color: rgb(65, 83, 179)
        }

        .invoice main {
            padding-bottom: 50px
        }

        .invoice main .thanks {
            margin-top: -100px;
            font-size: 2em;
            margin-bottom: 50px
        }

        .invoice main .notices {
            padding-left: 6px;
            border-left: 6px solid rgb(65, 83, 179)
        }

        .invoice main .notices .notice {
            font-size: 1.2em
        }

        .invoice table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-bottom: 20px
        }

        .invoice table td, .invoice table th {
            padding: 15px;
            background: #eee;
            border-bottom: 1px solid #fff
        }

        .invoice table th {
            white-space: nowrap;
            font-weight: 400;
            font-size: 16px
        }

        .invoice table td h3 {
            margin: 0;
            font-weight: 400;
            color: rgb(65, 83, 179);
            font-size: 1.2em
        }

        .invoice table .qty, .invoice table .total, .invoice table .unit {
            text-align: right;
            font-size: 1.2em
        }

        .invoice table .no {
            color: #fff;
            font-size: 1.6em;
            background: rgb(65, 83, 179)
        }

        .invoice table .unit {
            background: #ddd
        }

        .invoice table .total {
            background: rgb(65, 83, 179);
            color: #fff
        }

        .invoice table tbody tr:last-child td {
            border: none
        }

        .invoice table tfoot td {
            background: 0 0;
            border-bottom: none;
            white-space: nowrap;
            text-align: right;
            padding: 10px 20px;
            font-size: 1.2em;
            border-top: 1px solid #aaa
        }

        .invoice table tfoot tr:first-child td {
            border-top: none
        }

        .invoice table tfoot tr:last-child td {
            color: rgb(65, 83, 179);
            font-size: 1.4em;
            border-top: 1px solid rgb(65, 83, 179)
        }

        .invoice table tfoot tr td:first-child {
            border: none
        }

        .invoice footer {
            width: 100%;
            text-align: center;
            color: #777;
            border-top: 1px solid #aaa;
            padding: 8px 0
        }

        @media  print {
            .invoice {
                font-size: 11px !important;
                overflow: hidden !important
            }

            .invoice footer {
                position: absolute;
                bottom: 10px;
                page-break-after: always
            }

            .invoice > div:last-child {
                page-break-before: always
            }
        }
    </style>
</head>
<body style="background-color: #ececec;margin:0;padding:0">
<div id="invoice">
<div class="invoice overflow-auto">
<div style="min-width: 600px">
<header>
<div class="row">
    @foreach ($bookingde as $bookingde)
        
   
<div class="col">
<a target="_blank" href="#">
<img width="200" src="https://demandium-admin.6amtech.com/storage/app/public/business/2022-10-09-6341713d7320e.png" data-holder-rendered="true" />
</a>
</div>
<div class="col company-details">
<h2 class="name">
<a target="_blank" href="#">
Demandium Ltd
</a>
</h2>
<div>Dhaka Bangladesh</div>
<div>+8801100000001</div>
<div><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="93f7f6fef2fdf7fae6fed3f7f6fefcbdf0fcfe">demandium@gmail.com</a></div>
</div>
</div>
</header>
<main>
<div class="row contacts">
<div class="col invoice-to">
<div class="text-gray-light text-uppercase">Invoice to:
{{$bookingde->booking_id}}</div>
<p class="to">Customer Phone : {{$bookingde->phone}}</p>
<div class="address">{{$bookingde->city_village}},{{$bookingde->house}},{{$bookingde->postal_code}}</div>
<div class=""><a href="/cdn-cgi/l/email-protection#debdb6bbaabfb0b9abaeaabfe9ea9eb9b3bfb7b2f0bdb1b3"><span class="__cf_email__" data-cfemail="3a59525f4e5b545d4f4a4e5b0d0e7a5d575b535614595557">{{$bookingde->email}}</span></a></div>
</div>
<div class="col invoice-details">
<h1 class="invoice-id text-uppercase">Invoice</h1>
<div class="date">Date of invoice
: 22/01/2023 01:16:55 am</div>
<div class="date">Due date
: 22/01/2023 01:16:55 am</div>
</div>
</div>
<table border="0" cellspacing="0" cellpadding="0">
<thead>
<tr>
<th>#</th>
<th class="text-left text-uppercase">Description</th>
<th class="text-left text-uppercase">Cost</th>
<th class="text-right text-uppercase">Qty</th>
<th class="text-right text-uppercase">Total</th>
</tr>
</thead>
<tbody>
<tr>
<td class="no">01</td>
<td class="text-left">
<h3>
    {{$bookingde->service_name}}
</h3>
<td class="unit">{{$bookingde->price}} Tk</td>
<td class="qty">{{$bookingde->service_quantity}}</td>
<td class="total">{{$bookingde->price}} Tk</td>
</tr>
</tbody>
<tfoot>
<tr>
<td colspan="2"></td>
<td colspan="2" class="text-uppercase">Subtotal</td>
<td>{{$bookingde->price}} Tk</td>
</tr>
<tr>
<td colspan="2"></td>
<td colspan="2" class="text-uppercase">Coupon Discount </td>
<td>00.00$</td>
</tr>
<tr>
<td colspan="2"></td>
<td colspan="2" class="text-uppercase">Tax %</td>
<td>00.00$</td>
</tr>
<tr>
<td colspan="2"></td>
<td colspan="2" class="text-uppercase">Grand total</td>
<td>{{$bookingde->price}} Tk</td>
</tr>
</tfoot>
</table>
<div class="thanks">Thank you!</div>
<div class="notices">
<div class="notice">All rights reserved By @DemandiumLtd</div>
</div>
</main>
</div>
</div>
@endforeach
</div>
    @endsection
    <script>
        window.print();
    </script>

   