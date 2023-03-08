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

<h1 style="text-align: center">Collection Report</h1> <br>
<table id="customers">
   
        <thead class="table-light">
            <tr>
                <th>SN</th>
                <th>Customer Name</th>
                <th>Service Name</th>
                <th>Collect Amount</th>
                <th>Collect Date</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @php
                $i = 1;
            @endphp
            @foreach ($collectioreport as $item)
            <tr> 
                <td>{{ $i++ }}</td>
                <td>{{ $item->customer_name }}</td>
                <td>{{ $item->service_name }}</td>
                <td>{{ $item->collect_amount }}</td>
                <td>{{ $item->collect_date }}</td>  
            </tr>
            @endforeach
                

        </tbody>
    
</table>

</body>
</html>


