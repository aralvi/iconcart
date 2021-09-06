@extends('layouts.vendor')

@section('title','Icon')

@section('content')
<div class="container-fluid indmain2">
<h1 class="indmainh1">Cash Out</h1>
<div class="row cashoudiv1 py-4 px-4 mx-2 mt-4">
    <div class="col-lg-9 col-md-9 col-sm-12 col-12 ">
        <span class="cashousp1 text-white">Earning Balance</span><span class="cashousp2s ml-3 text-white">Sales Overview $248</span><span class="cashousp2s ml-3 text-white"> Iconscout Affiliation Program $0</span>
        <p class="cashousp2s text-white mt-2">Amount you earned from Sales, Custom order and Affiliation Balance. You can cashout this balance.</p>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-12 text-right">
        <span class="cashousp1 text-white">$248</span>
    </div>
</div>
<div class="salovervdiv shadow-sm px-4 py-5 mt-4">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
        <span class="cashousp1 text-black">Request Cashout</span>
        <p class="cashousp2s text-black mt-2">Your earning balance is 248. You are eligible for cashout. You can cashout minimum of $100.</p>
    </div> 
    <form action="">
       <div class="row px-4">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="form-group">
                <label class="labcash1" for="">Paypal Address</label>
            <input type="text" class="form-control">
            </div>        
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
            <div class="form-group">
                <label class="labcash1" for="">Amount</label>
            <input type="text" class="form-control">
            </div>        
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12">
            <button class="btn btn-block btncash1">Request Cashout</button>
        </div>
       </div>
    </form>
</div>
<div class="col-lg-12 mt-4">
  <table class="table table-hover border" >
    
    <thead>
      <h5 style="border:1px solid #fafafc;margin-bottom: -10px;" class="text-left ml-2 py-4">Cashout History</h5>
      <tr style="background-color: #FAFAFC">
        <th class="tabacthead">DATE</th>
        <th class="tabacthead">ACCOUNT  </th>
        <th class="tabacthead">AMOUNT </th>
        <th class="tabacthead">STATUS </th>
      </tr>
    </thead>
    <tbody>
      <tr>
          <td class="tabsalicna">May 31, 2021   </td>
          <td class="tabsalicna">
            adfhklpiyewdvnkhsndk15@gmail.com    
          </td>
        <td class="tabsalicna">
            $199.7
          </td>
        <td class="tabsalicna">created</td>
      </tr>
      <tr>
          <td class="tabsalicna">Jul 4, 2021   </td>
          <td class="tabsalicna">
            adfhklpiyewdvnkhsndk15@gmail.com    
          </td>
        <td class="tabsalicna">
            $199.7
          </td>
        <td class="tabsalicna">completed</td>
      </tr>
      <tr>
          <td class="tabsalicna">Aug 21, 2021   </td>
          <td class="tabsalicna">
            adfhklpiyewdvnkhsndk15@gmail.com    
          </td>
        <td class="tabsalicna">
            $199.7
          </td>
        <td class="tabsalicna">completed</td>
      </tr>
      <tr>
          <td class="tabsalicna">Feb 31, 2020   </td>
          <td class="tabsalicna">
            adfhklpiyewdvnkhsndk15@gmail.com    
          </td>
        <td class="tabsalicna">
            $199.7
          </td>
        <td class="tabsalicna">completed</td>
      </tr>
      <tr>
          <td class="tabsalicna">Nov11, 2020   </td>
          <td class="tabsalicna">
            adfhklpiyewdvnkhsndk15@gmail.com    
          </td>
        <td class="tabsalicna">
            $199.7
          </td>
        <td class="tabsalicna">completed</td>
      </tr>
      <tr>
          <td class="tabsalicna">June 21, 2021   </td>
          <td class="tabsalicna">
            adfhklpiyewdvnkhsndk15@gmail.com    
          </td>
        <td class="tabsalicna">
            $199.7
          </td>
        <td class="tabsalicna">completed</td>
      </tr>
      <tr>
          <td class="tabsalicna">March 3, 2021   </td>
          <td class="tabsalicna">
            adfhklpiyewdvnkhsndk15@gmail.com    
          </td>
        <td class="tabsalicna">
            $199.7
          </td>
        <td class="tabsalicna">completed</td>
      </tr>
      <tr>
          <td class="tabsalicna">April 1, 2021   </td>
          <td class="tabsalicna">
            adfhklpiyewdvnkhsndk15@gmail.com    
          </td>
        <td class="tabsalicna">
            $199.7
          </td>
        <td class="tabsalicna">completed</td>
      </tr>
      
    </tbody>
  </table>
</div>
</div>

</div>

@endsection