<!DOCTYPE html>
<html>
<head>
	<title>Inventory Report</title>
</head>
<body>
  <h1>List of Inventory</h1>

<table class="table table-bordered" border="1" >

    <tr> 
    <th>Voucher Reference</th>
    <th>Item</th>
    <th>Qty</th>
    <th>Category</th>
    <th>Funded By</th>
    <th> Model/Serial</th>
    <th> Date Purchase</th>
    <th>Currency</th>
    <th>Price</th>
    <th>Total</th>
    <th>Region File</th>
    <th>Asset Condition</th>
    <th>Tag</th>
    <th>As Per Record</th>
    <th>Verefied</th>
    <th>Difference</th>
 
    </tr>
    
     @foreach($data as $item)
       <tr>
       
       	<td>{{$item->Item}}</td>
       	<td>{{$item->Qty}}</td>
       	<td>{{$item->Category}}</td>
       	<td>{{$item->Funded_by}}</td>
       	<td>{{$item->Model_serial}}</td>
       	<td>{{$item->Date_purchase}}</td>
       	<td>{{$item->Currency}}</td>
       	<td>{{$item->Price}}</td>
       	<td>{{$item->Total}}</td>
       	<td>{{$item->Region_file}}</td>
       	<td>{{$item->Asset_condition}}</td>
       	<td>{{$item->Tag}}</td>
       	<td>{{$item->As_per_record}}</td>
       	<td>{{$item->Verified}}</td>
       	<td>{{$item->Difference}}</td>
       	 
       </tr>
       @endforeach
</table>
</body>
</html>