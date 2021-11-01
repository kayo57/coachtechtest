<!------------確認ページ----------->
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH挑戦状</title>
</head>

@extends('layouts')
<style>
th {
  background-color: #289ADC;
  color: white;
  padding: 5px 40px;
}

tr:nth-child(odd) td {
  background-color: #FFFFFF;
}

td {
  padding: 25px 40px;
  background-color: #EEEEEE;
  text-align: center;
}
</style>
@section('title', 'create.blade.php')

@section('contact')
<table>
  <form action="/contact/create" method="POST">
    @csrf
    <tr>
      <th>fullname</th>
      <th>gender</th>
      <th>email</th>
      <th>postcode</th>
      <th>address</th>
      <th>building_name</th>
      <th>opinion</th>
    </tr>
    @foreach ($contacts as $contact)
    <tr>
      <td>
        {{$contact->fullname}}
      </td>
      <td>
        {{$contact->gender}}
      </td>
      <td>
        {{$contact->email}}
      </td>
      <td>
        {{$contact->postcode}}
      </td>
      <td>
        {{$contact->address}}
      </td>
      <td>
        {{$contact->building_name}}
      </td>
      <td>
        {{$contact->opinion}}
    </tr>
    @endforeach
  </form>
</table>
@endsection

<!------------確認ページ--------->