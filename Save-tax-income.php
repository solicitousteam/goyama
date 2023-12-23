<?php
  include"header.php"
  ?>
      <style>
      h1, h2, h3, h4, h5, h6 {
    color: #2c3145;
}
a, a:hover, a:focus, a:active {
    text-decoration: none;
    outline: none;
}
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.section_all {
    position: relative;
    padding-top: 80px;
    padding-bottom: 80px;
    min-height: 100vh;
}
.section-title {
    font-weight: 700;
    text-transform: capitalize;
    letter-spacing: 1px;
}

.section-subtitle {
    letter-spacing: 0.4px;
    line-height: 28px;
    max-width: 550px;
}

.section-title-border {
    background-color: #000;
    height: 1 3px;
    width: 44px;
}

.section-title-border-white {
    background-color: #fff;
    height: 2px;
    width: 100px;
}
.text_custom {
    color: #00bd2a;
}

.about_icon i {
    font-size: 22px;
    height: 65px;
    width: 65px;
    line-height: 65px;
    display: inline-block;
    background: #fff;
    border-radius: 35px;
    color: #00bd2a;
    box-shadow: 0 8px 20px -2px rgba(158, 152, 153, 0.5);
}

.about_header_main .about_heading {
    max-width: 450px;
    font-size: 24px;
}

.about_icon span {
    position: relative;
    top: -10px;
}

.about_content_box_all {
    padding: 28px;
}
.heading{
      margin-top: 41px;
    font-weight: 600;
    color: #3d286b;
}

.blogheading span{
        font-size: 22px;
    font-weight: 700;
    color: #ff5757;
}

.blogheading p{
font-size: 20px;
    font-weight: 700;
    color: #3d286b;
    line-height: 1.2;
}


.blogheading ul{
    color: #3d286b;
    font-size: 25px;
    font-weight: 500;
}


/*.blogheading ul span{*/
/*    color: #ff5757;*/
/*    font-size: 34px;*/
/*    font-weight: 500;*/
/*}*/

.texheading p span{
     color: #000;
    font-size: 34px;
    font-weight: 500;
}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 75%;
      margin: auto;

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
  background-color: #ff5757;
  color: white;
      width: 0;

}


.texttable{
    width:100% !important;
}


.texttable th{
    width:0% !important;
}


@media(max-width:768px){
    #customers {
width:100%;

}

.text-heading div h1 {
    color: white;
    font-size: 25px;
}

.blogheading p {
    font-size: 20px;
    font-weight: 700;
    color: #3d286b;
    line-height: 1.2;
    text-align: justify;
    word-spacing: -6px;
    margin-top: 23px;
}
}
  </style>
  <br>
  <br>
  <br>
  <br>
     <section class="headings" style="background: linear-gradient(rgba(18, 27, 34, 0.6), rgba(18, 27, 34, 0.6)), url('images/Taxesprice.jpg') no-repeat center center;    background-size: contain;
    height: 30vh;">
            <div class="text-heading text-center">
                <div class="container" style="padding-top:6rem;">
                    <h1 style=";">Save 100% Tax On Income Upto RS 10 Lakh Per Annum</h1>
                   
                </div>
            </div>
        </section>
<section>
    <div class="container">
        <div class="row align-items-center">
                           <div class="col-md-6 blogheading">
                  <p>In India if you earn <span>₹10 Lakhs</span> per annum, you have to pay 20% icome tax. Lets see how you can pay<span> ₹0 tax </span>on 10 Lakhs</p>
            </div>
            
                <div class="col-md-6 blogheading d-flex align-items-center pt-5">
                     <img src="images/5-tax-hacks-you-can-use.webp" width="90%" />
              
            </div>

          
            
                 <div class="col-md-6 ">
                 <table id="customers" class="texttable">
  <tr>
    <th>Salary</th>
    <th>Tax Regime</th>
    <th>Amount Paid</th>
  </tr>
  <tr>
    <td>RS. 0.0 - RS2.5 Lakh</td>
    <td>NIL</td>
    <td>₹0</td>
  </tr>
  <tr>
    <td>RS. 0.0 - RS2.5 Lakh</td>
    <td>5%</td>
    <td>₹12,500</td>
  </tr>
  <tr>
    <td>RS. 0.0 - RS2.5 Lakh</td>
    <td>20%</td>
    <td>₹50,000</td>
  </tr>
  <tr>
    <td>RS. 0.0 - RS2.5 Lakh</td>
    <td>20%</td>
    <td>₹40,000</td>
  </tr>
  <tr>
    <td>Total</td>
    <td></td>
    <td>₹102,500</td>
  </tr>
  

</table>
            </div>
              <div class="col-md-6 blogheading d-flex align-items-center">
                  
                                  <p><span>₹50,000</span> Standard Deduction</p>
            </div>
            
                      <div class="col-md-6 blogheading mt-4">
                    <p><span>Tax Deductions</span></p>
                    
                    <ul>
                        <li style="font-size: 20px;">1.Investing in ELSS mutual funds- <span>1.5Lakhs</span></li>
                        <li style="font-size: 20px;">2.Paying Health Insurance Premium -<span>275,000</span> </li>
                        <li style="font-size: 20px;">3.NPS Contribution <span>50,000</span></li>
                        <li style="font-size: 20px;">4.House Rent Paid <span>1.87Lakhs/year</span></li>
                        <span style="font-size: 20px;"> Total deduction was around 4.62Lakhs</span>

                    </ul>
              
            </div>
            
                      <div class="col-md-6 blogheading d-flex align-items-center">
                     <img src="images/TAx.jpg" width="100%" />
              
            </div>
            
                    <div class="col-md-12 blogheading mt-3">
                    <p class="text-center"><span>Tax Calculation</span></p>
    <table id="customers">
  <tr>
    <th>Salary</th>
    <th>Deduction</th>
    <th>Net Income</th>
    <th>IT Section</th>
  </tr>
  <tr>
    <td>10 Lakhs</td>
    <td>₹2,50,000(SD)</td>
    <td>₹7,50,000</td>
    <td>Standard deduction(SD) </td>
  </tr>
  <tr>
    <td>7.5 Lakhs</td>
    <td>₹1,50,000</td>
    <td>₹6,00,000</td>
    <td>Sec 80C</td>
  </tr>
  <tr>
    <td>6 Lakhs</td>
    <td>₹1,87,000</td>
    <td>₹4,13,000</td>
    <td>Sec 10(13A)</td>
  </tr>
  <tr>
    <td>4.13 Lakhs</td>
    <td>₹75000</td>
    <td>₹3,38,000</td>
    <td>Sec 80D</td>
  </tr>
  <tr>
    <td>3.38 Lakhs</td>
    <td>₹50,000</td>
    <td>₹2,88,000</td>
    <td>Sec 80CCD(1B)</td>
  </tr>
  <tr>
    <td>2.88 Lakhs</td>
    <td>₹50,000(SD)</td>
    <td>₹2,38,000</td>
    <td>Sec 16(ia)</td>
  </tr>

</table>
       </div>
   
    
     <div class="col-md-12 blogheading mt-5">
                    <p class="text-center"><span>The Total Taxable Income is less than ₹5Lakhs, so you need to pay any taxes!</span></p>
         
       </div>
         <div class="col-md-6 blogheading mt-5">
            <img src="images/sip.png" width="80%" />
         
       </div>
         <div class="col-md-6 blogheading mt-3">
                      <p>If you would have invested ₹10,000 per month for 10 years at 12% in LESS mutual fund. It would have become Rs. ₹23Lakhs!</p>

         
       </div>
       </div>
         </div>
           </div>
</section> 
  
  
  
  
  
  
  
  
  
  
  
  
  <?php
  include"footer.php"
  ?>