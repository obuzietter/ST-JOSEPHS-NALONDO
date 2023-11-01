<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
    <script src="{{url('/js/contact.js')}}" defer></script>
</head>
<body>
    <header>

    </header>

    <main>
        <!-- google map,paragraph and button -->
<div class="map">
    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255331.65767682373!2d34.307006886718746!3d0.6555780000000055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1781d97dceaaf703%3A0xb1750155e3970e39!2sNalondo%20secondary%20school!5e0!3m2!1sen!2ske!4v1698776636513!5m2!1sen!2ske" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- paragraph -->
    <div class="map-text">
    <h1 class="connect">CONNECT WITH US</h1>
    <!-- button -->
    <button class="google-maps-button">
        <a href="https://maps.app.goo.gl/J9Nt6UcJ2xDf5GS9A">GO TO GOOGLE MAPS</a>
    </button>
    </div>
</div>

    <!-- contacts div -->
<div class="contacts">
    <div class="phone contact-info">
        <div class="left">SCHOOL PHONE NUMBER</div>
        <div class="right">CALL US</div>
    </div>
    <div class="email contact-info">
        <div class="left">SCHOOL EMAIL</div>
        <div class="right">EMAIL US</div>
    </div>
    <div class="location contact-info">
        <div class="left">SCHOOL LOCATION</div>
        <div class="right">VISIT US</div>
    </div>
</div>


    <!-- reviews -->
<div class="reviews">
    <form action="" method="post" target="_blank">
            <h1 class="heading">TELL US WHAT YOU THINK</h1>

            <div class="name-contact">
                <input type="text" placeholder="YOUR NAME" name="name" class="name">

                <input type="text" class="phone-number" name="phone" placeholder="YOUR CONTACT">
            </div>
            


            <input type="email" name="email" placeholder="YOUR EMAIL" class="email" name>


            <textarea name="message" id="message" cols="30" rows="10" placeholder="YOUR MESSAGE"></textarea>
            <button type="submit">SEND MESSAGE</button>
    </form>
</div>
    </main>

    <!-- footer -->
    <footer>

    </footer>
</body>
</html>