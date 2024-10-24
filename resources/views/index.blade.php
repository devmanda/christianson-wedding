@extends('layouts.app')

@section('content')

    <section id="top" class="flex flex-col justify-center items-center h-full w-full pt-20">
        <div class="flex flex-col sm:flex-row justify-center items-center"> 
            <h1 class="text-5xl sm:text-7xl" style="font-family: 'Unna', serif">Amanda</h1>
            <h1 class="text-4xl px-4" style="font-family: 'Unna', serif"> + </h1>
            <h1 class="text-5xl sm:text-7xl" style="font-family: 'Unna', serif">Paul</h1>
        </div>
        <div class="pt-4 text-center px-4 sm:px-0"> 
            <h2 class="text-xl sm:text-2xl font-light" style="font-family: 'Mulish', sans-serif">are getting married!</h2>
            <div class="pt-8">
                <h2 class="text-3xl sm:text-4xl" style="font-family: 'Unna', sans-serif"> June 7, 2025</h2>
                <h2 class="text-3xl sm:text-4xl" style="font-family: 'Unna', sans-serif">Rock Hill, South Carolina</h2>
            </div>
        </div>
    </section>

    <section class="w-full">
        <div class="masonry pt-16 max-w-7xl m-auto">
            <img class="item item2" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/cw-hp-3.jpg">
            <img class="item item6" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/cw-hp-7.jpg">
            <img class="item item3" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/cw-hp-2.jpg">
            <img class="item item4" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/cw-hp-4.jpg">
            <img class="item item5" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/cw-hp-5.jpg">
            <img class="item item1" src="https://christiansonwedding.nyc3.cdn.digitaloceanspaces.com/file.jpg">
        </div>
    </section>

    <section id="story" class="flex flex-col justify-center items-center h-full w-full px-4 sm:px-0 pt-20">
        <h1 class="text-5xl sm:text-7xl text-center" style="font-family: 'Unna', serif">Our Love Story</h1>
        <div class="pt-8 max-w-3xl">
            <p class="text-center">Our story together began in 2019, laughing over authentic Chinese cuisine and our love for international food. Since then, we've huffed and puffed up steep hills, camped in every type of Carolina weather, and collected an impressive array of trinkets. After five years of explorations and outdoor escapades, saying 'I do' was a no brainer. Get ready for a wedding that's uniquely curated and filled with Southern charm, our favorite vintage finds, and our favorite people!</p>
        </div>
    </section>

    <section id="events" class="flex flex-col justify-center items-center h-full w-full px-4 sm:px-0 pt-20">
        <h1 class="text-5xl sm:text-7xl text-center" style="font-family: 'Unna', serif">Wedding Events</h1>
        <div class="pt-8 max-w-4xl flex flex-col md:flex-row">
            <div class="p-4 sm:p-8">
                <h3 class="text-2xl sm:text-3xl" style="font-family: 'Mulish', sans-serif">Friday</h3>
                <h4 class="mt-4 font-bold">Welcome Drinks</h4>
                <h4>Hoppin' Rock Hill</h4>
                <h4>8-11pm</h4>
                <h4 class="pt-10 italic">Address<br>
                    110 Southern Street<br>
                    Rock Hill, SC 29730<br>
                </h4>
            </div>
            <div class="p-4 sm:p-8">
                <h3 class="text-2xl sm:text-3xl" style="font-family: 'Mulish', sans-serif">Saturday</h3>
                <h3 class="font-bold mt-4">Ceremony</h3>
                <h4>Glencairn Gardens<br>
                Come See Me Fountain</h4>
                <h4>5-5:30pm</h4>
                <h4 class="pt-4 italic">Address<br>
                    725 Crest Street<br>
                    Rock Hill, SC 29730</h4>
            </div>
            <div class="p-4 sm:p-8">
                <h3 class="font-bold mt-4 pt-9">Cocktail Hour & Reception</h3>
                <h4>Our Home</h4>
                <h4>Cocktail Hour - 6pm to 7pm</h4>
                <h4>Reception - 7pm-11pm</h4>
                <h4 class="pt-4 italic">Address<br>
                    1950 Mount Holly Drive<br>
                    Rock Hill, SC 29730</h4>
            </div>
        </div>
        <div class="pt-8 max-w-3xl px-4 sm:px-0">
            <h2 class="text-sm sm:text-md font-light italic text-center" style="font-family: 'Mulish', sans-serif">* Times and locations subject to change - you'll have an opportunity to RSVP to individual events with your formal invitation (~February 2025).</h2>
        </div>
    </section>

    <section id="travel" class="flex flex-col justify-center items-center h-full w-full px-4 sm:px-0 pt-20">
        <h1 class="text-5xl sm:text-7xl text-center" style="font-family: 'Unna', serif">Travel Info</h1>
        <div class="pt-8 max-w-3xl">
            <p class="text-center">We are located in Rock Hill, SC, which is about 30 minutes south of Charlotte, NC. All of our wedding events will happen within a 15 minute drive of our home and the reception will be held on our property.</p>
            <h1 class="text-2xl sm:text-3xl pt-8 pb-4 text-center" style="font-family: 'Unna', serif">Hotel Details</h1>
            <p class="text-center">We recommend the <a target="_blank" class="text-emerald-800 underline" href="https://www.choicehotels.com/south-carolina/rock-hill/cambria-hotels/sc579">Cambria Hotel, Rock Hill - University Center.</a> It's the newest hotel in Rock Hill and close to all of our events. We may offer a shuttle service from this hotel to our ceremony and reception if enough people stay. Uber and Lyft are easier to use closer to Charlotte, but are possible in the downtown Rock Hill area. We would recommend having a car or some other transportation plans.</p>
        </div>
    </section>

    <section id="dress-code" class="flex flex-col justify-center items-center h-full w-full px-4 sm:px-0 pt-20">
        <h1 class="text-5xl sm:text-7xl text-center" style="font-family: 'Unna', serif">What Do We Wear?</h1>
        <div class="pt-8 max-w-6xl w-full">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="space-y-4">
                    <h2 class="text-2xl text-amber-900" style="font-family: 'Unna', serif">Ladies</h2>
                    <ul class="list-disc pl-4 space-y-2">
                        <li>Light, flowing dresses in breathable fabrics</li>
                        <li>Tea-length or midi dresses are ideal</li>
                        <li>Festive florals, soft pastels, or cheerful prints are welcome</li>
                        <li>Consider wedge heels or block heels to navigate grass and outside elements</li>
                    </ul>
                </div>
    
                <div class="space-y-4">
                    <h2 class="text-2xl text-amber-900" style="font-family: 'Unna', serif">Gentlemen</h2>
                    <ul class="list-disc pl-4 space-y-2">
                        <li>Light-colored or summer-weight suits</li>
                        <li>Dress shirts in white or soft colors</li>
                        <li>Linen, seersucker, or lightweight cotton materials</li>
                        <li>Ties optional</li>
                        <li>Sport coats with dress slacks acceptable</li>
                    </ul>
                </div>
    
                <div class="space-y-4">
                    <h2 class="text-2xl text-amber-900" style="font-family: 'Unna', serif">Additional Notes</h2>
                    <ul class="list-disc pl-4 space-y-2">
                        <li>The ceremony and reception will be held outside</li>
                        <li>Temperatures typically range from 75-85°F</li>
                        <li>Consider sun protection (both locations will have shade and places to cool down)</li>
                        <li>We recommend avoiding stiletto or tall heels</li>
                    </ul>
                </div>
            </div>
            <p class="italic text-center pt-8">When in doubt, think southern charm meets garden party elegance.</p>
        </div>
    </section>

    <section id="registry" class="flex flex-col justify-center items-center h-full w-full px-4 sm:px-0 pt-20">
        <h1 class="text-5xl sm:text-7xl text-center" style="font-family: 'Unna', serif">Wedding Registry</h1>
        <div class="pt-8 max-w-3xl">
            <p class="text-center">Your presence on our special day is the best gift you can give to us. We are fully stocked with lots of kitchenware, home goods, and most items on a traditional registry. If you would like to contribute to our home projects or to our honeymoon plans, you can do so below or in person that weekend! We are very honored and grateful for any contributions.</p>
        </div>
        <a class="mt-12 rounded-lg bg-amber-900 px-8 py-2 shadow-md text-white" target="_blank" href="https://registry.theknot.com/amanda-smith-paul-christianson-june-2025-sc/68851082">Our Registry</a>
    </section>

    <section id="rsvp" class="flex flex-col justify-center items-center h-full w-full px-4 sm:px-0 pt-20">
        <h1 class="text-5xl sm:text-7xl text-center" style="font-family: 'Unna', serif">RSVP - Coming Soon!</h1>
        <div class="pt-8 max-w-3xl">
            <p class="text-center">RSVP'ing will become available when we send out the official invitations, around February 2025, so stay tuned!</p>
        </div>
    </section>
@endsection