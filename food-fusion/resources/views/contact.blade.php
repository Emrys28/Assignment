@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <section class="bg-white p-5 mt-7 rounded-lg shadow-lg" class="contact-info">
        <h1 class="text-orange-600 text-[1.8em] mb-2.5">Contact Us</h1>
        <p class="text-[1.2em] mb-2.5">We'd love to hear from you! Feel free to reach out with any questions or feedback.</p>
        <h1 class="text-orange-600 text-[1.8em] mb-2.5">Our Information</h1>
        <p class="text-[1.2em] mb-2.5"><strong>Address:</strong> 1234 Maple Street, Springfield, IL 62701, United States</p>
        <p class="text-[1.2em] mb-2.5"><strong>Phone:</strong> (555) 123-4567</p>
        <p class="text-[1.2em] mb-2.5"><strong>Email:</strong> waiphyoehein28@gmail.com</p>
        <p class="text-[1.2em] mb-2.5"><strong>Business Hours:</strong> Mon - Fri, 9:00 AM - 5:00 PM</p>
    </section>
    
    <section class="bg-white p-5 mt-7 rounded-lg shadow-lg" class="contact-form">
        <h2 class="text-orange-600 text-[1.8em] mb-5">Send Us a Message</h2>
        <form action="#" method="POST">
          <label class="text-[1.2em] mb-2 block" for="name">Your Name:</label>
          <input class="w-full p-2.5 text-[1.1em] mb-3.5 border border-gray-300 rounded-sm" type="text" id="name" name="name" placeholder="Enter Your Name" required>
          
          <label class="text-[1.2em] mb-2 block" for="email">Your Email:</label>
          <input class="w-full p-2.5 text-[1.1em] mb-3.5 border border-gray-300 rounded-sm" type="email" id="email" name="email" placeholder="Enter Your Email" required>
          
          <label class="text-[1.2em] mb-2 block" for="message">Your Message:</label>
          <textarea class="w-full p-2.5 text-[1.1em] mb-3.5 border border-gray-300 rounded-sm" id="message" name="message" placeholder="Write Your Message" required></textarea>
          
          <button class="bg-orange-600 hover:bg-orange-700 text-white p-3.5 px-5 text-[1.2em] border-none rounded-sm cursor-pointer" type="submit">Send Message</button>
        </form>
    </section>
@endsection