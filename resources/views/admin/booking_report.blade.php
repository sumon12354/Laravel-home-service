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
  <h1 style="text-align: center">Booking Report</h1> <br>
<table id="customers">
  
    <thead>
        <tr>
            <th>Booking Id</th>
            <th>Customer Name</th>
            <th>Total Amount</th>
            <th>Booking Status</th>
            <th>Payment Status</th>
            <th>Booking Date</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($bookinginfo as $item)
            <tr>
                <td>{{ $item->booking_id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->booking_status }}</td>
                <td>{{ $item->payment_status }}</td>
                <td>{{ $item->created_at }}</td>
            </tr>
        @endforeach


    </tbody>
</table>

</body>
</html>


