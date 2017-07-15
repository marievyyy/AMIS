    <!-- FOOTER -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="footer-top">
                    <div class="col-md-6 contact">
                        <div class="contact-details">
                            <h2>Contact Us</h2>
                            <a href="https://www.instagram.com/officialaccess"><img src="<?php echo base_url(); ?>assets/img/instagram-logo.png"></a>
                            <a href="https://twitter.com/OfficialACCESS"><img src="<?php echo base_url(); ?>assets/img/twitter-logo-button.png"></a>
                            <a href="https://www.facebook.com/ACCESSOfficial"><img src="<?php echo base_url(); ?>assets/img/facebook-logo-button.png"></a>
                            <p> 4th Floor College of Engineering and Architecture Building, <br> Pureza St., Manila <br>pup.access@yahoo.com <br>713-5968</p>
                        </div>
                        <div class="meesageus">
                            <h3>Message Us</h3>
                            <form id="messageus" action="home/sendmessage" method="post" novalidate="novalidate">
                              <div class="form-group">
                                <input type="text" id="sender" name="sender" placeholder="Name" class="form-control name">
                              </div>
                              <div class="form-group">
                                <input type="text" id="emailAddress" name="emailAddress" placeholder="Email" class="form-control email">
                              </div>
                              <div class="form-group">
                                <textarea id="messageDetails" name="messageDetails" placeholder="Message" class="form-control message"></textarea>
                              </div>
                              <input type="submit" name="submit" value="Submit Message!" class="form-control submit-message">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 map">
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="arr">
       <p>All Rights Slightly Reserved | &copy; PaybTri 2016</p>
    </div>
    <!-- FOOTER -->

     <!-- JS -->
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/smoothscroll.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.parallax.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/coundown-timer.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/editprofile.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/custom-file-input.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>
</html>