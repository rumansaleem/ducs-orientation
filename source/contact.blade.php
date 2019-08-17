@extends('_layouts.master')

@section('body')
<div class="container">
    <section class="py-8 text-center">
        <h2 class="section-header">
            Contact Us
        </h2>

        <div class="w-full mb-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.0531355198605!2d77.20489941461405!3d28.688057088317514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd928daadb91%3A0x76aa925fc6e58347!2sDepartment+of+Computer+Science!5e0!3m2!1sen!2sin!4v1566042824364!5m2!1sen!2sin"
                width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="text-left">
            <address class="whitespace-pre-line mb-4">
                <strong>Department of Computer Science</strong>
                (Faculty of Mathematical Sciences)
                1st Floor, New Academic Block
                University of Delhi
                Delhi - 110007, India.
            </address>
            <div class="flex items-center mb-2">
                <svg class="inline-block h-current mr-2 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                    </path>
                </svg>
                <a href="tel:+911127667591">+91-11-27667591</a>,
                <a href="tel:+911127667059">+91-11-27667059</a>
            </div>
            <div class="flex items-center">
                <svg class="inline-block h-current mr-2 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                office@cs.du.ac.in
            </div>
        </div>
    </section>
</div>
@endsection