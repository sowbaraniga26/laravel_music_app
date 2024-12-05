<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

    <!-- Include the model partial -->
    @include('frontend.model.type1')

    <!-- Include the Header partial -->
    @include('frontend.layout.header')

    <!-- Include the topbar partial -->
    {{-- @include('frontend.layout.topbar') --}}

    @yield('content')

    <!-- Include the footer partial -->
    @include('frontend.layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){

            console.log("document working");
            
            // Trigger Model via JQuery
            $('#contactUsModal').modal('show');

        });
        // Example script for form submission
        document.getElementById('contactForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent page reload
            alert('Message sent successfully!');
            // Close modal after submission
            var contactUsModal = bootstrap.Modal.getInstance(document.getElementById('contactUsModal'));
            contactUsModal.hide();
        });
    </script>
</body>
</html>