<?php
include "header.php";
?>


    <!-- contect left -->
    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center" >
                <div class="col-lg-7">
                    <div class="contect">
                        <h3><span><i class="fa fa-angle-down"></i></span>Share Your Contact Detail</h3>
                        <form action="" method="" class="pt-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text">Name</label>
                                        <input type="text" class="form-control" placeholder="Your Name" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" class="form-control" placeholder="Your email" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="number">Mobile Number</label>
                                        <input type="number" class="form-control" placeholder="Phone No." id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="text">State</label>
                                        <input type="text" class="form-control" placeholder="Your State" id="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                               
                                <div class="col-md-4">
                                    <div class="ticket-method">
                                        <div class="form-group form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input ticket-checkbox" type="checkbox">
                                            </label>
                                        </div>
                                        <div class="contect-type">
                                            <img src="assets/image/images/live_card1.jpg" alt="eticket">
                                            <h6>E-Ticket</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="ticket-method">
                                        <div class="form-group form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input ticket-checkbox" type="checkbox">
                                            </label>
                                        </div>
                                        <div class="contect-type">
                                            <img src="assets/image/images/live_card1.jpg" alt="eticket">
                                            <h6>Box Office <br> Pickup</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                        </form>
                    </div>
                    <!-- payment option -->
                    <div class="contect">
                        <h3><span><i class="fa fa-angle-down"></i></span>Payment Options</h3>

                        <form action="" method="">
                            <h4>Choose Your Payment Method</h4>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="ticket-method">
                                        <div class="form-group form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input ticket-checkbox-2" type="checkbox">
                                            </label>
                                        </div>
                                        <div class="contect-type">
                                            <img src="assets/image/images/live_card1.jpg" alt="eticket">
                                            <h6>Paypal</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="ticket-method">
                                        <div class="form-group form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input ticket-checkbox-2" type="checkbox">
                                            </label>
                                        </div>
                                        <div class="contect-type">
                                            <img src="assets/image/images/live_card1.jpg" alt="eticket">
                                            <h6>MasterCard</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="contect-frm-btn">
                                <button class="pay_btn" style="background-color:#ec459e; outline: none;">Pay Now</button>
                                <div class="btn_bottom"></div>
                            </div>
                            <div class="note">
                                <h5 style="font-size: 17px !important;">Note:</h5>
                                <p>1- Registrations/Tickets once booked cannot be exchanged, cancelled or refunded. <br>
                                    2- Incase of Credit/Debit Card bookings, the Credit/Debit Card and Card holder must
                                    be present at the ticket counter while collecting the ticket(s)</p>
                            </div>
                        </form>

                    </div>
                    <!-- payment end -->
                </div>
                <div class="col-lg-5" style="padding: 45px;">
                    <div class="order_summery">
                        <h6>Order Summery</h6>
                        <div class="coun_ticket">
                            <h5>1</h5>Ticket
                        </div>
                        <h6 style="font-weight:600;">Magic Show</h6>
                        <div class="ticket_city">Ravindra Natya Grah : INDORE</div>
                        <div class="ticket_row">Row: M-12</div>
                        <div class="ticket_date">Sun 14 Jun, 2024 <br>05:00 PM</div>
                        <div class="ticket_devider"></div>
                        <div class="ticket_subtotal"><span>Subtotal:</span><h6 style="font-weight:600;">RS. 2333</h6></div>
                        <div class="ticket_gst"><span>GST:</span><h6 style="font-weight:600;">RS. 569</h6></div>

                    </div>
                    <div class="amont_payabl"><span style="font-weight:600; font-size:14px;">Amount Payable:</span><h6 style="font-weight:600;">RS. 2902</h6></div>
                </div>
            </div>

        </div>
    </section>
    <!-- contect end -->
   
<?php
include "footer.php";
?>