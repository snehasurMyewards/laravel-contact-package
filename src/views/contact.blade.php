<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>

    <h1>Contact Us any time from package</h1>
    <form action="{{ route('contact') }}" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Your Name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Your Email">
        </div>
        <div>
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

    
</body>
</html>