@extends('_layouts.master')
@section('body')
<div class="container">
    <section class="py-8 text-center">
        <h2 class="section-header">Events</h2>

        <div class="bg-gray-800 rounded-lg shadow-lg mb-8 overflow-hidden">
            <div class="bg-cover bg-fixed" style="height: 360px; background-image: url('{{ $page->baseUrl }}/assets/images/events/sankalan/poster.jpg');">
            </div>
            <div class="p-6 text-left">
                <h3 class="text-2xl mb-4">Sankalan</h3>
                <div class="markdown text-gray-500 text-lg mb-6">
                    <p>
                        Sankalan is the annual tech fest of DUCS which has been our pride for more than a decade now. Since its inception in
                        2005, it has been a part & parcel of lives at DUCS. Students from universities across India come and participate
                        enthusiastically in this two day event. 
                    </p>
                    <p>    
                        This is the time when everyone works together as a team and is dedicated towards
                        a common goal to bring pride and honour to the Department. 'Division of labour' is followed here at every step. This
                        keeps the students mentally prepared to perform well in the companies and prepares them to take responsibilities and
                        live up to the expectations. Renowned people from the IT industry and our alumni placed in various tech giant companies
                        judge and review all the technical events held during the fest. After the two days of long grilling experience, students
                        are awarded and appreciated for winning and participating in the fest. A large number of sponsors who financially aid
                        this event form the backbone of the fest.
                    </p>
                    <p class="flex items-center text-white">
                        @include('_svg.globe', ['class' => 'h-current mr-2'])
                        Website:
                        <a href="https://www.ducs.in/sankalan"
                            class="ml-2 hover:underline hover:text-blue-400">www.ducs.in/sankalan</a>
                    </p>
                    <p class="flex items-center text-white">
                        @include('_svg.globe', ['class' => 'h-current mr-2'])
                        Registration Portal (Demo): 
                        <a href="https://sankalan-demo.herokuapp.com" class="ml-2 hover:underline hover:text-blue-400">sankalan-demo.herokuapp.com</a>
                    </p>
                </div>
                <h5 class="text-sm uppercase font-bold text-gray-400">Gallery 2019</h5>
                <vue-lightbox :images="{{ json_encode([
                    ['src' => $page->baseUrl . '/assets/images/events/sankalan/gallery-01.jpg', 'caption' => 'Gallery 01'],
                    ['src' => $page->baseUrl . '/assets/images/events/sankalan/gallery-02.jpg', 'caption' => 'Gallery 02'],
                    ['src' => $page->baseUrl . '/assets/images/events/sankalan/gallery-03.jpg', 'caption' => 'Gallery 03'],
                    ['src' => $page->baseUrl . '/assets/images/events/sankalan/gallery-04.jpg', 'caption' => 'Gallery 04'],
                ]) }}" class="-mx-2"></vue-lightbox>
            </div>
            
        </div>
        <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
            <h3 class="text-2xl mb-4">Workshops</h3>
            <div class="text-left">   
                <ul class="list-disc pl-4 leading-normal">
                    <li>Workshop on <b>"Curriculum and Assessment Methods"</b> at UG and PG levels</li>
                    <li>Workshop on <b>"Cyber Security and Cyber Laws"</b> (March 25-26, 2019) </li>
                    <li>Workshop on <b>"Deep Learning with Tensor Flow"</b> (Dated: 28-02-2019)</li>
                    
                    <li>Faculty Development Programme on <b>"Network Science: Foundation of Social Network Analysis"</b> (Dated: 03-12-2018 to 08-12-2018)</li>
                    <li>Workshop on <b>"Internet of Things"</b> organized by <em>IEEE Delhi Section</em> (Dated: 07-09-2018)</li>
                    <li>Workshop on <b>"Save Water"</b> (Dated: 20-04-2018)</li>
                    <li>Workshop on <b>"Relaxation Techniques"</b> (Dated: 26-03-2018)</li>
                    <li>Workshop on <b>"Stress Management"</b> organized by <em>Mr. Sanjay Kumar Singh, Director from Dimension Education Pvt. Ltd.</em> (Dated: 17-03-2018)</li>
                    <li>Talk on <b>"Independent Dependency Tracking in Mobile Ad hoc Network"</b> by <em>Prof. Subhash Bhalla, University of Aizu</em> (Dated: 13-03-2018)</li>
                    <li>Talk on <b>"Towards Building a Farm Problem and Diagnosis System for Farmers"</b> by <em>Prof. P. K. Reddy, IIT Hyderabad</em> (Dated: 13-03-2018)</li>
                </ul>
            </div>
        </div>
        
    </section>

</div>

@endsection