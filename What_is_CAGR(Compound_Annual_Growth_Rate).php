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
        font-size: 23px;
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
                    <h1 style=";">What CAGR Can Tell You?</h1>
                   
                </div>
            </div>
        </section>
        
         <div class="container">
        <div class="row align-items-center">
               <div class="col-md-6 blogheading d-flex align-items-center pt-5">
                     <img src="images/shutterstock_1454002997-1-scaled.jpg" width="85%" />
              
            </div>
                                       <div class="col-md-6 blogheading">
                  <p>In simple words CAGR is the rate of return (RoR)
needed for an investment's balance to grow from
where it started to where it ends.</p>
            </div>
            
          
                           <div class="col-md-6 blogheading">
                                  <span class="text-center">What CAGR Can Tell You?</span>
                  <p>CAGR tells you how much money a <span>fund can
return</span> to you each year over the time period.</p>
<p>But this only works if you put your gains/profit
back into the market every year.</p>
            </div>
            
                <div class="col-md-6 blogheading d-flex align-items-center pt-5">
                     <img src="images/Business Growth Stages.webp" width="85%" />
              
            </div>
            
       
                                       <div class="col-md-12 blogheading my-3">
                  <span class="text-center">How to calculate
Compound Annual Growth Rate?</span>
<p>You can calculate CAGR in three easy steps. You must
know these three numbers:</p>
<ul>
    <li style="font-size:20px;">1. The investment made in the initial year (the first year
of investment)</li>
<li style="font-size:20px;">2. Value of investment at the end of the year</li>
<li style="font-size:20px;">3. Tenure of investment</li>
</ul>

            </div>
       </div>
            </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <?php
  include"footer.php"
  ?>