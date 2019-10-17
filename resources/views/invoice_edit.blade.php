@extends('layouts.app')

@section('title', 'invoice edit')

@section('content')
	<div class="pageBackground">
        <header class="container-a header_container small">
                <div class="firstbox">
                        <i class="fa fa-times" aria-hidden="true"></i>
                </div>
                <div class="secondbox">
                    <i class="fa fa-chevron-left" aria-hidden="true"></i>
                </div>

                <div class="thirdbox">
                    Save
                </div>
                <div class="fourthbox">
                    Invoice
                </div>
                <div class="fifthbox">
                    <a href="#"><button class="sendInvoice">SEND</button></a>
                </div>
        </header>

        <!-- This is the navbar for large screens -->
        <header class="container-a header_container large">
                <!-- <header> -->
                        <div class="firstbox">
                                <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                        <div class="secondbox">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </div>

                        <div class="thirdbox">
                            Save and Close
                        </div>
                        <div class="fourthbox">
                            Invoice
                        </div>
                        <div class="fifthbox">
                            <a href="#"><button class="sendInvoice">SEND INVOICE</button></a>
                        </div>
                </header>
                 <header id="con" class="container-a header_container" style="background: #00FFA3;">
                        <div id="box-mod" class="firstbox">

                        </div>
                        <div id="box-mod" class="secondbox">

                        </div>

                        <div id="box-mod" class="thirdbox">

                        </div>
                        <div class="fourthbox">
                            Editing
                        </div>
                        <div id="box-done" class="fifthbox">
                            <a href="#"><button>DONE</button></a>
                        </div>
                </header>


        <main>
            <div class=" container content">

                <section >
                    <div class="row rowy" style="margin-top: 30px">
                            <input type="textarea" class="brandingtext" style="width: 90%">
                            	<button type="button" class="btn btn-sm editInvoice "><i class="fa fa-pencil" aria-hidden="true"></i>EDIT BRANDING</button>

                    </div>
                </section>

                <section class="secondcontent">
                    <section>

                    <div class="addressAndPayment row">
                    	<input class="area" type="textarea">
                        <div class="areatext" style="font-weight: normal">
                            <div style="font-weight: bold">Glacier Inc,</div>
                            Abuja, FCT<br>
                            Nigeria
                        </div>

                        <div class="card payment ml-auto">
                            <div style="font-size: 0.8em; color: #B1B1B1">Amount Due</div>

                            <div class="Amount">US$8,800 <span style="font-size: 0.5em"><select id="currency" name="currency">
                            <option value="USD">USD</option>
                            <option value="NGN">NGN</option>
                        </select></span></div>

                            <div>
                                <div class="issueDate float-left">
                                    <div style="font-size: 0.8em; color: #B1B1B1">Issued <p><input type="date" id="date" name="02/10/2019"></p></div>
                                </div>

                                <div class="dueDate float-left">
                                    <div style="font-size: 0.8em; color: #B1B1B1">Due<p><select id="date" name="date"><option selected>Upon completion</option></select></p></div>
                                </div>
                            </div>

                            <button type="button" class="btn btn-primary paymentButton">Pay now</button>
                        </div>
                    </div>

                    </section>

                <section class="invoice row">
                    <div class=" tabletext" style="margin-top: 10px">
                        <div>
                            Invoice <span style="font-weight: normal; font-size: 0.6em">No. 1</span> <p class="serviceRendered" style="margin-top: 10px">Glacier Fintech App</p>
                        </div>
                        <div style="font-size: 0.8em; width: 100%; overflow-x: scroll">
                            <table class="table">
                              <thead>
                                <tr style="border-top-style: hidden">
                                  <th style="width: 70%">Description</th>
                                  <th scope="col">Qty</th>
                                  <th scope="col">Price</th>
                                  <th scope="col">Amount</th>
                                </tr>
                              </thead>
                              <tbody>
                              	<tr scope="row">
                                  <td><span style="font-size:14px; color: #B1B1B1;">Review Project Billing</span><br><button type="button" class="editbtn"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;EDIT BRANDING</button>

                                  </td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                </tr>
                                <tr scope="row">
                                  <td>Mobile App UI</td>
                                  <td>1</td>
                                  <td>US$8,800.00</td>
                                  <td>US$8,800.00</td>
                                </tr>
                                <tr scope="row">
                                    <td></td>
                                    <td></td>
                                    <td style="font-weight:bold">Subtotal<br><span style="font-size:10px; color: #B1B1B1;">Add discount +</span><br><span style="font-size:10px; color: #B1B1B1;">Amount Tax +</span>
                                    </td>
                                    <td>US$8,800.00</td>
                                </tr>
                              </tbody>
                            </table>
                            <div style="min-height: 50px"></div>
                        </div>
                        <div class="row rowy" style="margin-top: 30px">
                        	<p class="footnote">Notes</p>
                            <input type="textarea" class="footbox" style="width: 90%; height: 10vh; font-size: 10px;" placeholder="Add notes or extra payment instructions...">

                    </div>
                        <hr>
                        Juliet Asim
                        <div style="margin-bottom: 40px"></div>
                    </div>
                </section>

                <section class="footer"></section>
                </section>
            </div>
        </main>

        <footer>
            <div class="space"></div>
        </footer>
    </div>
    <script src="https://kit.fontawesome.com/6d241bcdf9.js" crossorigin="anonymous"></script>
@endsection
