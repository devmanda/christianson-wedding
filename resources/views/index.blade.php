@extends('layouts.app')

@section('content')
    <img id="leftFlower" class="pt-4 md:pt-0 -left-24 md:left-0 absolute -z-10 max-w-[200px] md:max-w-[400px]" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/flower-pattern-left.svg">
    <img id="rightFlower" class="pt-4 md:pt-0 -right-24 md:right-0 absolute -z-10 max-w-[200px] md:max-w-[400px] " src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/flower-pattern-right.svg">
    <section id="top" class="flex flex-col justify-center items-center md:h-full md:w-full pt-20">
        <div class="flex flex-col justify-center items-center"> 
            <h1 class="text-5xl sm:text-7xl" style="font-family: 'Unna', serif">Amanda</h1>
            <h1 class="text-4xl px-4" style="font-family: 'Unna', serif"> & </h1>
            <h1 class="text-5xl sm:text-7xl" style="font-family: 'Unna', serif">Paul</h1>
        </div>
        <div class="pt-4 text-center px-4 sm:px-0"> 
            <h2 class="text-xl sm:text-2xl font-light" style="font-family: 'Mulish', sans-serif">are getting married!</h2>
            <div class="pt-8 px-12 md:px-0">
                <h2 class="text-3xl sm:text-4xl" style="font-family: 'Unna', sans-serif"> June 7, 2025</h2>
                <h2 class="text-3xl sm:text-4xl" style="font-family: 'Unna', sans-serif">Rock Hill, South Carolina</h2>
            </div>
        </div>
    </section>

    <section class="flex justify-center items-center mx-auto w-full">
        <div class="masonry pt-16 max-w-7xl w-full m-auto">
            <img class="item item2 w-[80%] md:w-full" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/cw-hp-3.jpg">
            <img class="item item6 w-[80%] md:w-full" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/cw-hp-7.jpg">
            <img class="item item3 w-[80%] md:w-full" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/cw-hp-2.jpg">
            <img class="item item4 w-[80%] md:w-full" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/cw-hp-4.jpg">
            <img class="item item5 w-[80%] md:w-full" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/cw-hp-5.jpg">
            <img class="item item1 w-[80%] md:w-full" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/file.jpg">
        </div>
    </section>

    <section id="story" class="flex flex-col justify-center items-center md:h-full w-full pt-12 md:pt-0 px-12 sm:px-0">
        <img class="h-24" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/leaf-divider.svg">
        <h1 class="text-5xl sm:text-7xl text-center" style="font-family: 'Unna', serif">Our Love Story</h1>
        <div class="pt-8 max-w-2xl">
            <p class="text-center">Our story together began in 2019, laughing over authentic Chinese cuisine and our love for international food. Since then, we've huffed and puffed up steep hills, camped in every type of Carolina weather, and collected an impressive array of trinkets. After five years of explorations and outdoor escapades, saying 'I do' was a no brainer. Get ready for a wedding that's uniquely curated and filled with Southern charm, our favorite vintage finds, and our favorite people!</p>
        </div>
    </section>

    <section id="events" class="flex flex-col justify-center items-center md:h-full w-full pt-12 md:pt-0 px-8 sm:px-0">
        <img id="leftFlower2" class="overflow-x-hidden pt-4 md:pt-0 -left-24 md:left-0 absolute -z-10 max-w-[200px] md:max-w-[400px]" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/flower-pattern-left.svg">
        <img id="rightFlower2" class="overflow-x-hidden pt-4 md:pt-0 -right-24 md:right-0 absolute -z-10 max-w-[200px] md:max-w-[400px] " src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/flower-pattern-right.svg">
        <img class="h-24" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/leaf-divider.svg">
        <h1 class="text-5xl sm:text-7xl text-center" style="font-family: 'Unna', serif">Wedding Events</h1>
        <div class="mt-8 w-[80%] md:max-w-3xl flex flex-col md:flex-row bg-gray-50 rounded-2xl drop-shadow-sm p-4">
            <div class="p-6 sm:p-8">
                <h3 class="text-2xl sm:text-3xl" style="font-family: 'Mulish', sans-serif">Friday</h3>
                <h4 class="mt-4 font-bold">Welcome Drinks</h4>
                <h4>Hoppin' Rock Hill</h4>
                <h4>8-10pm</h4>
                <h4 class="pt-10 italic">Address<br>
                    110 Southern Street<br>
                    Rock Hill, SC 29730<br>
                </h4>
            </div>
            <div class="p-6 sm:p-8 md:border-l-2">
                <h3 class="text-2xl sm:text-3xl" style="font-family: 'Mulish', sans-serif">Saturday</h3>
                <h3 class="font-bold mt-4">Ceremony</h3>
                <h4>Glencairn Garden<br>
                Come See Me Fountain</h4>
                <h4>Arrive by 5pm</h4>
                <h4 class="pt-4 italic">Address<br>
                    725 Crest Street<br>
                    Rock Hill, SC 29730</h4>
                </div>
                <div class="p-4 sm:p-8">
                <h3 class="font-bold mt-4 md:pt-9">Cocktail Hour & Reception</h3>
                <h4>Our Home</h4>
                <h4>Reception - 6pm-10pm</h4>
                <h4 class="pt-4 italic">Address<br>
                    1950 Mount Holly Drive<br>
                    Rock Hill, SC 29730</h4>
            </div>
        </div>
        <div class="pt-8 max-w-2xl px-4 sm:px-0">
            <h2 class="text-sm sm:text-md font-light italic text-center" style="font-family: 'Mulish', sans-serif">* Times and locations subject to change - you'll have an opportunity to RSVP to individual events with your formal invitation (~February 2025).</h2>
        </div>
    </section>

    <section id="travel" class="flex flex-col justify-center items-center md:h-full w-full pt-12 md:pt-0 px-8 sm:px-0">
        <img class="h-24" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/leaf-divider.svg">
        <h1 class="text-5xl sm:text-7xl text-center" style="font-family: 'Unna', serif">Travel Info</h1>
        <div class="pt-8 max-w-3xl">
            <p class="text-center">We are located in Rock Hill, SC, which is about 30 minutes south of Charlotte, NC. All of our wedding events will happen within a 15 minute drive of our home and the reception will be held on our property.</p>
            <h1 class="text-2xl sm:text-3xl pt-8 pb-4 text-center" style="font-family: 'Unna', serif">Hotel Details</h1>
            <p class="text-center">We have a hotel block setup at Tru by Hilton in Rock Hill, <a class="text-emerald-800 underline" href="https://withjoy.com/amanda-and-paul-jun-25/hotelbooking/roomblock/73896543-33a3-4380-acfb-947d49fd3d03" target="_blank">click here to reserve</a>. 
                There are plenty of other hotels and Airbnbs available nearby. Uber and Lyft are easier to use closer to Charlotte, but are possible in the downtown Rock Hill area. We would recommend having a car or some other transportation plans.</p>
        </div>
     </section>

    <section id="dress-code" class="flex flex-col justify-center items-center pt-12 md:pt-0 px-8 md:px-12">
        <img class="h-24" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/leaf-divider.svg">
        <h1 class="text-5xl sm:text-7xl text-center" style="font-family: 'Unna', serif">What Do We Wear?</h1>
        <div class="pt-8 max-w-6xl w-full">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="space-y-4">
                    <h2 class="text-2xl text-amber-900" style="font-family: 'Unna', serif">Ladies</h2>
                    <ul class="list-disc pl-4 space-y-2">
                        <li>Festive florals, soft pastels, summery colors</li>
                        <li>Light, flowing dresses in breathable fabrics</li>
                        <li>Tea-length or midi dresses</li>
                        <li>Shoes that can withstand uneven terrain, grass, and outside elements</li>
                    </ul>
                </div>
    
                <div class="space-y-4">
                    <h2 class="text-2xl text-amber-900" style="font-family: 'Unna', serif">Gentlemen</h2>
                    <ul class="list-disc pl-4 space-y-2">
                        <li>Light-colored or summer-weight suits</li>
                        <li>Dress shirts in white or soft colors</li>
                        <li>Linen, seersucker, or lightweight cotton materials</li>
                        <li>Ties optional</li>
                    </ul>
                </div>
    
                <div class="space-y-4">
                    <h2 class="text-2xl text-amber-900" style="font-family: 'Unna', serif">Additional Notes</h2>
                    <ul class="list-disc pl-4 space-y-2">
                        <li>The ceremony and reception will be held outside</li>
                        <li>Temperatures typically range from 75-85°F in June in SC</li>
                        <li>Consider sun protection (both locations will have shade and places to cool down)</li>
                    </ul>
                </div>
            </div>
            <p class="italic text-center pt-8">When in doubt, think Southern garden party!</p>
        </div>
    </section>

    <section id="registry" class="flex flex-col justify-center items-center md:h-full w-full pt-12 md:pt-0 px-8 sm:px-0">
        <img class="h-24" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/leaf-divider.svg">
        <h1 class="text-5xl sm:text-7xl text-center" style="font-family: 'Unna', serif">Registry</h1>
        <div class="pt-8 max-w-3xl">
            <p class="text-center">Your presence on our special day is the best gift you can give to us. We are fully stocked with lots of kitchenware, home goods, and most items on a traditional registry. If you would like to contribute to our home projects or to our honeymoon plans, you can do so below or in person that weekend! We are very honored and grateful for any contributions.</p>
        </div>
        <a class="mt-12 rounded-lg bg-amber-900 px-8 py-2 shadow-md text-white" target="_blank" href="https://withjoy.com/amanda-and-paul-jun-25/registry">Our Registry</a>
    </section>

    <section id="rsvp" class="flex flex-col justify-center items-center px-4 sm:px-0 pt-24 md:pt-0 pb-24">
        <img class="h-24" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/leaf-divider.svg">
        <h1 class="text-5xl sm:text-7xl text-center" style="font-family: 'Unna', serif">RSVP</h1>
        <div class="pt-8 max-w-2xl">
            <p class="text-center">We would love to know if you'll be celebrating with us! Kindly let us know by May 4, 2025, so we can make sure to save you a seat. While we hope you can make it, we'll understand if we don't hear from you by then that you won't be able to join us.</p>
        </div>
            {{-- href="https://withjoy.com/amanda-and-paul-jun-25/rsvp" --}}
            <a href="https://withjoy.com/amanda-and-paul-jun-25/rsvp" target="_blank" class="mt-12 rounded-lg bg-amber-900 px-8 py-2 shadow-md text-white">RSVP Now!</a>
    </section>
    <section>
        <div class="flex justify-center items-center bg-white text-sm p-4 md:p-0">  
            <img class="m-4 w-7 h-7" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/single-flower-header.svg">
            <span class="text-gray-800 text-xs">
            Site made with ♥️ by the bride.  <br> 
        feature/marriage-june-2025: git commit -m "merge Amanda-main into Paul-main --no-conflicts"</span>
        </div>
    </section>
@endsection