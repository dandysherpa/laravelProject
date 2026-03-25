<x-Layout>
    <section class="py-16">
        <div class="container">
            <div class="pb-5 flex justify-between items-center ">
                <h1 class="text-3xl font-bold">Create booking</h1>
                <a class="bg-[#f06204] px-4 py-2 rounded-[16px] text-amber-100 " href="/booking">Go back</a>

            </div>
            <div>
                <form  action="/booking/store" method="post">
                    @csrf
                    <div class="grid grid-cols-2 gap-6">
                    <div><label for="full_name">Full name</label>
                        <input class="border w-full" type="text" name="full_name" id="full_name" class="border w-full px-2 px-1">
                    </div>

                    <div> <label for="email">Email</label>
                        <input class="border w-full" type="email" name="email" id="email" class="border w-full px-2 px-1">
                    </div>

                    <div> <label for="phone">Telephone</label>
                        <input class="border w-full" type="tel" name="phone" id="" class="border w-full px-2 px-1">
                    </div>


                    <div> <label for="subject">Subject</label>
                        <input class="border w-full" type="text" name="subject" id="subject" class="border w-full px-2 px-1">
                    </div>

                    <div> <label for="your_request">Your request</label>
                        <textarea  name="your_request" id="your_request" cols="30" rows="4" class="border w-full px-2 px-1"></textarea>
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
