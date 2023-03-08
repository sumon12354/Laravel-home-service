<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1 style="text-align: center">Payment Report</h1> <br>
<table id="customers">
        <thead class="table-light">
            <tr>
                <th>SN</th>
                <th>Provider Name</th>
                <th>Payment Amount</th>
                <th>Payment Date</th>
                <th>Payment Note</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($paymentreport as $item)
            <tr> 
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->provider_name }}</td>
                <td>{{ $item->payment_amount }}</td>
                <td>{{ $item->payment_date }}</td>
                <td>{{ $item->payment_note }}</td>  
            </tr>
            @endforeach
                

        </tbody>
    
</table>

</body>
</html>


