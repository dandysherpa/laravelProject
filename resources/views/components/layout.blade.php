<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- Tells the browser to use standard modern characters and text encoding --}}

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Makes the page responsive - without this it would look zoomed out on mobile --}}

    <title>Document</title>
    {{-- This is the text that shows in the browser tab --}}

    {{-- Vite is the build tool that compiles your Tailwind CSS --}}
    {{-- This line loads the final compiled stylesheet into the page --}}
    {{-- Without this line none of your Tailwind classes would work --}}
    @vite(['resources/css/app.css'])
</head>

<body>

    {{-- Logo section at the very top of every page --}}
    {{-- flex + justify-center + items-center = centers the logo horizontally and vertically --}}
    {{-- pt-7 pb-6 = adds spacing above and below the logo --}}
    <div class="flex justify-center items-center pt-7 pb-6">
        {{-- w-[300px] sets the logo width to exactly 300px --}}
        {{-- alt text shows if the image fails to load and helps with accessibility --}}
        <img class="w-[300px]" src="https://codeit.com.np/storage/01KK0WD02GQYECHKK844MYEHN3.png" alt="Code It Logo">
    </div>

    {{-- sticky top-0 means the navbar locks to the top of the screen as you scroll down --}}
    {{-- z-50 makes sure the navbar always sits on top of other content and never gets hidden behind it --}}
    {{-- shadow-md adds a subtle drop shadow so the navbar looks lifted above the page --}}
    <header class="bg-white shadow-md sticky top-0 z-50 container">

        {{-- max-w-7xl limits how wide the nav can stretch on large screens --}}
        {{-- gap-8 adds equal spacing between each nav link --}}
        {{-- justify-center centers all the links horizontally --}}
        <nav class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-center gap-8 container">

            {{-- hover:text-orange-500 means the link turns orange when you hover over it --}}
            {{-- transition makes that color change smooth instead of instant --}}
            <a href="/" class="text-sm font-semibold text-black hover:text-orange-500 transition">Home</a>

            <a href="/all-courses" class="text-sm font-semibold text-black hover:text-orange-500 transition">All Courses</a>

            {{-- This link is styled differently to stand out from the rest --}}
            {{-- bg-[#f06448] gives it a custom orange background color --}}
            {{-- px-4 py-2 adds padding inside so it looks like a pill/button --}}
            {{-- rounded-full makes the corners fully rounded --}}
            {{-- hover:text-white turns the text white on hover instead of orange --}}
            <a href="/upcoming-classes" class="text-sm font-semibold text-black bg-[#f06448] px-4 py-2 rounded-full hover:text-white transition">Upcoming Classes</a>

            <a href="/testimonials" class="text-sm font-semibold text-black hover:text-orange-500 transition">Testimonials</a>

            <a href="/mentors" class="text-sm font-semibold text-black hover:text-orange-500 transition">Mentors</a>

            <a href="/recorded-videos" class="text-sm font-semibold text-black hover:text-orange-500 transition">Recorded Videos</a>

            <a href="/intern-partners" class="text-sm font-semibold text-black hover:text-orange-500 transition">Intern Partners</a>

            <a href="/contact-us" class="text-sm font-semibold text-black hover:text-orange-500 transition">Contact Us</a>

        </nav>
    </header>

    {{-- @include pulls in the SweetAlert blade file from the package --}}
    {{-- This is what makes the toast popups (success/error messages) actually show up on screen --}}
    {{-- Without this line the toast() calls in your controller would do nothing visually --}}
    @include('sweetalert::alert')

    {{-- This is the main content area of the page --}}
    {{-- $slot is a Blade component feature - whatever you put inside <x-layout> in other blade files gets injected here --}}
    {{-- Think of it like a placeholder that gets filled with different content on every page --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer is empty for now but sits at the bottom of every page --}}
    <footer></footer>

</body>

</html>
