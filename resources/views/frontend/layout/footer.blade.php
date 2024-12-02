<!-- Footer Navbar -->
<footer class="bg-light text-center text-lg-start">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4">
          <h5 class="text-uppercase">{{$systemSetting->company_name}}</h5>
          <p>
                <li><a href="#" class="text-dark">email: {{$systemSetting->email}}</a></li>
                <li><a href="#" class="text-dark">website: {{$systemSetting->website}}</a></li>
                <li><a href="#" class="text-dark">Customer_care_no:{{$systemSetting->customer_care_no}}</a></li>
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="text-uppercase">Links</h5>
          <ul class="list-unstyled mb-0">
            <li><a href="#" class="text-dark">Home</a></li>
            <li><a href="#" class="text-dark">About</a></li>
            <li><a href="#" class="text-dark">Services</a></li>
            <li><a href="#" class="text-dark">Contact</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="text-uppercase">Social Media</h5>
          <ul class="list-unstyled mb-0">
            <li><a href="#" class="text-dark">Facebook</a></li>
            <li><a href="#" class="text-dark">Twitter</a></li>
            <li><a href="#" class="text-dark">Instagram</a></li>
            <li><a href="#" class="text-dark">LinkedIn</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Footer Bottom -->
    <div class="text-center p-3 bg-dark text-white">
      © 2024 {{$systemSetting->company_name}}
    </div>
  </footer>
