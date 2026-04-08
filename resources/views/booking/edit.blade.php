<x-Layout>
    <section class="py-16">
        <div class="container">
            <div class="pb-5 flex justify-between items-center ">
                <h1 class="text-3xl font-bold">Booking edit</h1> {{--copy pasted from create blade since its the same just edited the text--}}
                <a class="bg-[#f06204] px-4 py-2 rounded-[16px] text-amber-100 " href="/booking">Go back</a>

            </div>
            <div>
                <form  action="/booking/update/{{$booking->id}}" method="post"> {{--booking variable from compact, so when this form is submitted  since we dont have one we need to make one update form --}}
                    @csrf
                    @method("PATCH") {{--using this methoid to update as kind of mandatory--}}
                    <div class="grid grid-cols-2 gap-6">
                    <div><label for="full_name">Full name</label>
                        <input class="border w-full" type="text" name="full_name" id="full_name" class="border w-full px-2 px-1 " value="{{$booking->name}}">{{--bringing from data base variable from the route and each one has value--}}
                    </div>

                    <div> <label for="email">Email</label>
                        <input class="border w-full" type="email" name="email" id="email" class="border w-full px-2 px-1" value="{{$booking->email}}">
                    </div>

                    <div> <label for="phone">Telephone</label>
                        <input class="border w-full" type="tel" name="phone" id="" class="border w-full px-2 px-1" value="{{$booking->phone}}">
                    </div>


                    <div> <label for="subject">Subject</label>
                        <input class="border w-full" type="text" name="subject" id="subject" class="border w-full px-2 px-1" value="{{$booking->subject}}">
                    </div>

                    <div> <label for="your_request">Your request</label>
                        <textarea  name="your_request" id="your_request" cols="30" rows="4" class="border w-full px-2 px-1">{{$booking->subject}}</textarea> {{-- this area is just inner html and no value--}}
                    </div>
                    </div>
                    <div>
                    <button class="border px-4 py-2 bg-[#fa5c00] rounded text-amber-50 mt-2" type="submit">Submit</button>


                </div>


                </form>


            </div>


        </div>


    </section>
</x-Layout>




