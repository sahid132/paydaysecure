<form action="https://www.usasecureloans.com/payday-loan.html" method="get" name="ShortForm" class="landing-wide-form landing-form-overlay dark nobottommargin clearfix">
            <div class="heading-block nobottommargin nobottomborder text-center">
              <h2>Get Started</h2>
            </div>
            <div class="col_full">
              <!-- <div class="pb_select-wrap">
                  <select  size="1" onchange=""  name="RequestedAmount" tabindex="1" class="form-control pb_height-50 reverse">
                    <option value="" selected="">Select Loan Amount</option>
                    <option value="100">$100</option>
                    <option value="200">$200</option>
                    <option value="300">$300</option>
                    <option value="400">$400</option>
                    <option value="500" >$500</option>
                    <option value="600">$600</option>
                    <option value="700">$700</option>
                    <option value="800">$800</option>
                    <option value="900">$900</option>
                    <option value="1000">$1000</option>
                    
                    <option value="">$100</option>
                    <option value="">$200</option>
                    <option value="">$300</option>
                  </select>
                </div> -->
                <div data-role="rangeslider">
                  <label for="price-min">Loan Amount</label>
                  <input type="range" min="10" max="1000" step="10" value="300" data-rangeslider style="width: 100%;">

                </div>
            </div>
            
            <div class="col_full">
              <input  class="form-control pb_height-50 reverse" type="text" placeholder="First name" name="FirstName" id="First-Name" value="FirstName" onfocus="if(this.value == 'FirstName') this.value = '';" onblur="if(this.value=='') this.value='FirstName';"/>
            </div>
            <div class="col_full">
              <input  class="form-control pb_height-50 reverse" placeholder="Email" type="text" name="Email"  value="Email" id="EmailID" onfocus="if(this.value == 'Email') this.value = '';" onblur="if(this.value=='') this.value='Email';"/>
            </div>
            <div class="col_full">
              <input class="form-control pb_height-50 reverse" placeholder="Zip" type="text" name="ZipCode"  value="Zip" id="Zip" onfocus="if(this.value == 'Zip') this.value = '';" onblur="if(this.value=='') this.value='Zip';"/>
            </div>
            <div class="col_full">
              <p class="terms">
                            <input type="checkbox" name="consent" id="consent" onchange="if(jQuery(this).is(':checked')){jQuery('#consent_title').removeClass('error');}">
                            <span id="consent_title" style="color: #fff">
                             By submitting your information, you acknowledge<br> you have read, understand, and agree to the terms of <br>our <a href="<?php echo $path; ?>privacy" target="_blank">Privacy Policy</a> and <a href="<?php echo $path; ?>terms" target="_blank">Disclaimer</a>.</span>
                            </p>
            </div>
            <div class="col_full ">
              <input type="submit" value="Get Your Cash" ONCLICK="javascript:validateForm()" class="btn btn-primary btn-md btn-block pb_btn-pill  btn-shadow-blue" value="Get Your Cash">
            </div>
            <div class="sec-ico">
              <div style="float: left;">
                  <img src="<?php echo $path; ?>images/protected.png" alt="Antivirus Safe"><span><strong>ANTIVIRUS </strong>Safe</span>
              </div>
              <div style="float: right;">
                  <img src="<?php echo $path; ?>images/locked.png" alt="256 Bit Secure"><span><strong>256 bit</strong>Secure</span>
              </div>
            </div>
          </form>
