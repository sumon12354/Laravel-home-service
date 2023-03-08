@extends('admin.layout.template')
@section('page_title')
    Dashboard -All-Orders
@endsection
@section('content')

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
<body style="background-color: #ececec;margin:0;padding:0">
    <div id="invoice">
    <div class="invoice overflow-auto">
    <div style="min-width: 600px">
    <header>
    <div class="row">
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
    <div><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0367666e626d676a766e4367666e6c2d606c6e">[email&#160;protected]</a></div>
    </div>
    </div>
    </header>
    <main>
    <div class="row contacts">
    <div class="col invoice-to">
    <div class="text-gray-light text-uppercase">Invoice to:
    #100042</div>
    <h2 class="to">Kristin Watson</h2>
    <div class="address">593 Avenue 5, Dhaka, Bangladesh</div>
    <div class="email"><a href="/cdn-cgi/l/email-protection#dbbfb4b7b4a9bea8f5b8b3bab6b9bea9a89bbea3bab6abb7bef5b8b4b6"><span class="__cf_email__" data-cfemail="02666d6e6d7067712c616a636f6067707142677a636f726e672c616d6f">[email&#160;protected]</span></a></div>
    </div>
    <div class="col invoice-details">
    <h1 class="invoice-id text-uppercase">Invoice</h1>
    <div class="date">Date of invoice
    : 12/10/2022 00:16:02 am</div>
    <div class="date">Due date
    : 12/10/2022 00:16:02 am</div>
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
    Diagnose &amp; Software Checkup
    </h3><br>
    software-checkup
    </td>
    <td class="unit">2,000.00$</td>
    <td class="qty">1</td>
    <td class="total">1,980.00$</td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
    <td colspan="2"></td>
    <td colspan="2" class="text-uppercase">Subtotal</td>
    <td>2,000.00$</td>
    </tr>
    <tr>
    <td colspan="2"></td>
    <td colspan="2" class="text-uppercase">Coupon Discount </td>
     <td>100.00$</td>
    </tr>
    <tr>
    <td colspan="2"></td>
    <td colspan="2" class="text-uppercase">Tax %</td>
    <td>180.00$</td>
    </tr>
    <tr>
    <td colspan="2"></td>
    <td colspan="2" class="text-uppercase">Grand total</td>
    <td>1,980.00$</td>
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
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
        function printContent(el) {
            var restorepage = $('body').html();
            var printcontent = $('#' + el).clone();
            $('body').empty().html(printcontent);
            window.print();
            $('body').html(restorepage);
        }
    
        printContent('invoice');
    </script>
    <script>(function(){var js = "window['__CF$cv$params']={r:'78affd0fafc32e47',m:'tVuqViUm.C_UeX38xYXfyZ6Wa9dYIv5H5JY52iAkkmA-1673967920-0-Aa44RP/j6hb7aD0tPXvwLFTXmAv2+mqfFqT9ve6d2wyW3TZ5QHWoSikXyEeGqlyE5FrnSku/X3IYMbkkEtyHyVJ1ArbNOzAU3x6/bRuB/nLW9rdedSPuOu3Qx3HVdnTkQMYNKj8uAKZ74qqsRtGzJRFVRpwEfeglavL+0QyHMIO9uswxJT/P/QbhmA5OJDuIIQ==',s:[0xf3c409ab85,0x7dcce0494f],u:'/cdn-cgi/challenge-platform/h/g'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='/cdn-cgi/challenge-platform/h/g/scripts/alpha/invisible.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.nonce = '';_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script></body>
    </html>
    
   
@endsection