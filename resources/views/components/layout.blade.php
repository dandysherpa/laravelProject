<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css'])

</head>

<body>
    {{-- CODE IT --}}
   <div class="flex justify-center items-center pt-7 pb-6">
    <img class="w-[300px]" src="https://codeit.com.np/storage/01KK0WD02GQYECHKK844MYEHN3.png" alt="Code It Logo">
</div>

    <header class="bg-white shadow-md sticky top-0 z-50 container">
        <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-center gap-8 container">
            <a href="/" class="text-sm font-semibold text-black  hover:text-orange-500 transition">Home</a>
            <a href="/all-courses" class="text-sm font-semibold text-black hover:text-orange-500 transition">All
                Courses</a>
            <a href="/upcoming-classes"
                class="text-sm font-semibold text-black bg-[#f06448] px-4 py-2 rounded-full hover:text-white transition">Upcoming
                Classes</a>
            <a href="/testimonials"
                class="text-sm font-semibold text-black hover:text-orange-500 transition">Testimonials</a>
            <a href="/mentors" class="text-sm font-semibold text-black hover:text-orange-500 transition">Mentors</a>
            <a href="/recorded-videos"
                class="text-sm font-semibold text-black hover:text-orange-500 transition">Recorded Videos</a>
            <a href="/intern-partners" class="text-sm font-semibold text-black hover:text-orange-500 transition">Intern
                Partners</a>
            <a href="/contact-us" class="text-sm font-semibold text-black hover:text-orange-500 transition">Contact
                Us</a>
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer></footer>
</body>

</html>
