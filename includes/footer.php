<footer>
      <div class="blur"></div>
      <div class="row">
        <div class="col-md-3">
          <h3>Address</h3>
          <p>Tectonic<br>
            1–15 Clere Street<br>
            London EC2A 4UY</p>
        </div>
        <div class="col-md-3">
          <h3>Phone</h3>
          <p>+44 (0) 1234 5678</p>
        </div>
        <div class="col-md-3">
          <h3>Email</h3>
          <a href="mailto:info@shift.com">info@shift.com</a>
        </div>
        <div class="col-md-3 d-flex justify-content-end socials">
            <a href="#" class="mr-3">
              <img src="../assets/img/insta.png" alt="">
            </a>
            <a href="#" class="mr-3">
              <img src="../assets/img/fb.png" alt="">
            </a>
            <a href="#">
              <img src="../assets/img/twitter.png" alt="">
            </a>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-3">
          <h3 >Help and Advice</h3>
          <a href="#">How it works</a>
          <a href="#">Terms & Conditioons</a>
          <a href="#">Privacy Policy</a>
        </div>
        <div class="col-md-3">
          <h3>Company</h3>
          <a href="#">About</a>
          <a href="#">Contact</a>
        </div>
      </div>
      <div class="footer-copy d-flex align-items-center justify-content-between">
        <img src="../assets/img/Shift-logo.png" alt="">
        <span>&copy; Tectonic 2020</span>
      </div>
    </footer>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
      if(window.innerWidth <= 411){
        document.querySelectorAll('footer .col-md-3').forEach(el => {
            el.classList.add('col-6')
        })
      }
    </script>
</body>
</html>