    <div class="container-fluid myfooter top-space">
      <div class="row">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h4>PHYSICAL LOCATION</h4>
              <h5>Academy Maris - Blanka Lacmanová</h5>
              <h5>Ernst-Lehmann-Straße 19,</h5>
              <h5>39106 Magdeburg.</h5>
              <br>
              <h5><strong>Email:</strong> info@akademiemaris.de</h5>
              <h5><strong>Phone:</strong> 01520 8220615</h5>
            </div>
            <div class="col-md-4">
              <h3>Send us a Message</h3>
              <form name="sentMessage" id="contactForm" novalidate>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Full Name:</label>
                          <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                          <p class="help-block"></p>
                      </div>
                  </div>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Phone Number:</label>
                          <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                      </div>
                  </div>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Email Address:</label>
                          <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                      </div>
                  </div>
                      
              </form>
            </div>
            <div class="col-md-4">
              <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                  <div class="controls">
                      <label>Message:</label>
                      <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                  </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-success">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container top-space">
      <footer>
          <div class="row">
              <div class="col-lg-12">
                  <span>Copyright &copy; Academy Maris 2016</span>
              </div>
          </div>
      </footer>
    </div>