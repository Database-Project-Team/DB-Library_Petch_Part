@extends('layouts.app')
<link href="{{ asset('css/signin.css')}}" rel="stylesheet">

<!-- FROM GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">


@section('title')
Shopping | ERM
@endsection

@section('content')

<style>
        tr:nth-child(odd) {
    background-color: #f2f2f2;
    }
    footer {
    font-size: 10px;
    font-weight: lighter;
    color: white;
    text-align: center;
    position: relative;
    margin-top: 40px;
    }

    hr{
      background-color:white;
      height:0.5px;
    }
  </style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="">
                <div class="card-header font-weight-light" style="background-color:rgba(0,0,0, 0.8);border-radius:5px">Employee Resource Management</div>

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                <div class="my-4">
                    <table id="myTR" style="background-color:white">
                        <tr style="background-color:#3b444b;color: white;">
                            <th height="60">
                                <center>
                                <font size="1px" class="font-weight-light">Employee No.</font>
                                </center>
                            </th>
                            <th>
                                <center>
                                <font width="10%" size="2px" class="font-weight-light">FirstName</font>
                                </center>
                            </th>
                            <th width="10%">
                                <center>
                                <font width="10%" size="2px" class="font-weight-light">LastName</font>
                                </center>
                            </th>
                            <th>
                                <center>
                                <font width="10%" size="2px" class="font-weight-light">Extension</font>
                                </center>
                            </th>
                            <th width="5%">
                                <center>
                                <font size="2px" class="font-weight-light">Email Address</font>
                                </center>
                            </th>
                            <th width="10%">
                                <center>
                                <font size="2px" class="font-weight-light">Office Code</font>
                                </center>
                            </th>
                            <th width="10%">
                                <center>
                                <font size="2px" class="font-weight-light">Reports To</font>
                                </center>
                            </th>
                            <th width="10%">
                                <center>
                                <font size="2px" class="font-weight-light">Job Title</font>
                                </center>
                            </th>
                            <th width="5%" colspan="2">
                                <center>
                                <font size="3px" class="font-weight-light">Tools</font>
                                </center>
                            </th>
                        </tr>
                    
                        @foreach ($employees as $d)
                        <tr style="height:50px;font-size:14px">
                        <td>
                            <center> {{$d->employeeNumber }}</center>
                        </td>
                        <td>   
                            <center>{{ $d->firstName}}</center>
                        </td>
                        <td> 
                            <center>{{ $d->lastName}}</center>
                        </td>
                        <td>    
                            <center class="font-weight-light">{{ $d->extension}}</center>
                        </td>
                        <td>
                            <center class="font-weight-light">{{ $d->email}}</center>
                        </td>
                        <td>    
                            <center class="font-weight-light">{{ $d->officeCode}}</center>
                        </td>
                        <td>    
                            <center class="font-weight-light">{{ $d->reportsTo}}</center>
                        </td>
                        <td style="font-size:12px;font-weight:bold; color:green">    
                            <center >{{ $d->jobTitle}}</center>
                        </td>
                        <td>
                            <a href="/admin/employee/edit/{{$d->employeeNumber}}"><img src="/img/pencil.svg" alt="" width="30px"  height="30px"></a>
                        </td>
                        <td>
                            <a href="/admin/employee/detele/{{$d->employeeNumber}}"><img src="/img/delete.svg" alt="" width="20px" height="20px"></a>
                        </td>
                    
                
                    </tr>
                    @endforeach
                    </table><br>
                    </div>
                    @endif

                    <div class="card my-4">
                        <table id="myTR">
                            <tr style="background-color: black;color: white;">
                                <th height="60">
                                    <center>
                                        <font size="1px">Employee No.</font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font width="10%" size="2px">FirstName</font>
                                    </center>
                                </th>
                                <th width="10%">
                                    <center>
                                        <font width="10%" size="2px">LastName</font>
                                    </center>
                                </th>
                                <th>
                                    <center>
                                        <font width="10%" size="2px">Extension</font>
                                    </center>
                                </th>
                                <th width="5%">
                                    <center>
                                        <font size="2px">Email Address</font>
                                    </center>
                                </th>
                                <th width="10%">
                                    <center>
                                        <font size="2px">Office Code</font>
                                    </center>
                                </th>
                                <th width="10%">
                                    <center>
                                        <font size="2px">Reports To</font>
                                    </center>
                                </th>
                                <th width="10%">
                                    <center>
                                        <font size="2px">Job Title</font>
                                    </center>
                                </th>
                                <th width="5%">
                                    <center>
                                        <font size="3px"></font>
                                    </center>
                                </th>
                                <th width="5%">
                                    <center>
                                        <font size="3px"></font>
                                    </center>
                                </th>
                            </tr>

                            @foreach ($employees as $d)
                            <tr>
                                <td>
                                    <center> {{$d->employeeNumber }}</center>
                                </td>
                                <td style="font-weight: bold;">
                                    <center>{{ $d->firstName}}</center>
                                </td>
                                <td style="font-weight: bold;">
                                    <center>{{ $d->lastName}}</center>
                                </td>
                                <td>
                                    <center>{{ $d->extension}}</center>
                                </td>
                                <td>
                                    <center>{{ $d->email}}</center>
                                </td>
                                <td>
                                    <center>{{ $d->officeCode}}</center>
                                </td>
                                <td>
                                    <center>{{ $d->reportsTo}}</center>
                                </td>
                                <td style="font-size:12px;font-weight:bold; color:green">
                                    <center>{{ $d->jobTitle}}</center>
                                </td>
                                <td>
                                    <a href="/admin/employee/edit/{{$d->employeeNumber}}"><img src="/img/pencil.svg" alt="" width="30px" height="30px"></a>
                                </td>
                                <td>
                                    <a href="/admin/employee/detele/{{$d->employeeNumber}}"><img src="/img/delete.svg" alt="" width="30px" height="30px"></a>
                                </td>


                            </tr>
                            @endforeach
                        </table><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>      <!-- FOR CONTACT -->
  <hr>
  <br>
      <img src="/img/phone-book.svg" width="18px"; height="18px"> CONTACT US<br>cpeg2DB@GMAIL.COM | TEL XXX-XXXXXXX
    </footer>
</div>
<<<<<<< HEAD


@endsection
=======
   
@endsection
>>>>>>> 454c5bd7fc090dfd5bad17e962fc4748b9f9b651
