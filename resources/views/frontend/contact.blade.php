@extends('frontend.layout.app')

@section('content')
<body>
    <header class="bg-primary text-white text-center py-5">
      <h1>Contact Us</h1>
      <p>We'd love to hear from you!</p>
    </header>
  
    <div class="container my-5">
      <div class="row g-4">
        <!-- Contact Information -->
        <div class="col-md-6">
          <h2>Get in Touch</h2>
          <p>If you have any questions, feel free to reach out to us!</p>
          <ul class="list-unstyled">
            <li><strong>Address:</strong> 123 Main Street, City, Country</li>
            <li><strong>Phone:</strong> +1 123-456-7890</li>
            <li><strong>Email:</strong> contact@example.com</li>
          </ul>
        </div>
  
        <!-- Contact Form -->
        <div class="col-md-6">
          <h2>Send a Message</h2>
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Your Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Your Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Your Message</label>
              <textarea class="form-control" id="message" rows="4" placeholder="Write your message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
          </form>
        </div>
      </div>
  
      <!-- Map Section -->
      <div class="row my-5">
        <div class="col">
          <h2>Find Us Here</h2>
          <div class="ratio ratio-16x9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345092565!2d144.95373531531892!3d-37.81627974202173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43fdf5b231%3A0xbbf60f0f43d73b2!2s123%20Main%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sus!4v1614739521230!5m2!1sen!2sus" 
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  
    <footer class="bg-dark text-white text-center py-4">
      <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>
  
@endsection()
