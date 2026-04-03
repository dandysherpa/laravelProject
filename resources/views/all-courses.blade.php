<x-Layout>

</x-Layout>


<style>
    @font-face {
        font-family: 'Belina';
        src: url('/fonts/Belina DEMO.otf') format('opentype');
    }
    .font-belina { font-family: 'Belina', serif; }
    .text-brand  { color: #f04924; }
    .bg-brand    { background-color: #f04924; }
    .border-brand { border-color: #f04924; }
    .hover\:bg-brand:hover { background-color: #f04924; color: #fff; }
    .hover\:text-brand:hover { color: #f04924; }
    .group:hover .group-hover\:text-brand { color: #f04924; }
</style>

<div class="bg-stone-50 p-8 min-h-screen">

    {{-- Page heading --}}
    <div class="max-w-6xl mx-auto mb-10">
        <p class="text-xs font-medium tracking-widest uppercase text-stone-400 mb-1">Code It Nepal</p>
        <h1 class="font-belina text-5xl text-stone-900">Our <span class="text-brand">Courses</span></h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">

        {{-- MERN Stack --}}
        <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden group">
            <a href="#"><div class="overflow-hidden h-44">
                <img src="https://d1fn6xu754v319.cloudfront.net/MERN_Stack_9437df2ba9_62af1dd3fc.png" alt="MERN Stack" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"/>
            </div></a>
            <div class="p-5">
                <span class="inline-block text-[11px] font-medium tracking-widest uppercase text-[#f04924] bg-orange-50 border border-orange-100 px-3 py-1 rounded-full mb-3">Full Stack</span>
                <a href="#" class="group-hover:text-brand"><h5 class="text-base font-semibold text-stone-900 group-hover:text-[#f04924] transition-colors mb-1 leading-snug">MERN Stack Development</h5></a>
                <p class="text-sm text-stone-500 font-light leading-relaxed mb-4">Build full-stack apps with MongoDB, Express, React & Node.js from scratch.</p>
                <div class="flex items-center justify-between">
                    <span class="font-belina text-2xl text-[#f04924]">Rs. 4,999</span>
                    <a href="#" class="inline-flex items-center gap-1.5 text-sm font-medium text-stone-700 bg-stone-100 border border-stone-200 hover:bg-[#f04924] hover:text-white hover:border-[#f04924] px-4 py-2 rounded-xl transition-all duration-200">Enroll
                        <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Laravel --}}
        <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden group">
            <a href="#"><div class="overflow-hidden h-44">
                <img src="https://images.ctfassets.net/23aumh6u8s0i/3StIC3FCZtbY5rLBGi9a6o/bb282ccfdf1faf2faf9986717d63b27e/laravel-6-logo" alt="Laravel" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"/>
            </div></a>
            <div class="p-5">
                <span class="inline-block text-[11px] font-medium tracking-widest uppercase text-[#f04924] bg-orange-50 border border-orange-100 px-3 py-1 rounded-full mb-3">Backend</span>
                <a href="#"><h5 class="text-base font-semibold text-stone-900 group-hover:text-[#f04924] transition-colors mb-1 leading-snug">Laravel PHP Framework</h5></a>
                <p class="text-sm text-stone-500 font-light leading-relaxed mb-4">Master Laravel with Eloquent ORM, Blade templates, REST APIs & more.</p>
                <div class="flex items-center justify-between">
                    <span class="font-belina text-2xl text-[#f04924]">Rs. 3,999</span>
                    <a href="#" class="inline-flex items-center gap-1.5 text-sm font-medium text-stone-700 bg-stone-100 border border-stone-200 hover:bg-[#f04924] hover:text-white hover:border-[#f04924] px-4 py-2 rounded-xl transition-all duration-200">Enroll
                        <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- JavaScript --}}
        <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden group">
            <a href="#"><div class="overflow-hidden h-44">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-IEJfQG9Ne8SbMuqjdZ73212jXY9hYLG63g&s" alt="JavaScript" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"/>
            </div></a>
            <div class="p-5">
                <span class="inline-block text-[11px] font-medium tracking-widest uppercase text-[#f04924] bg-orange-50 border border-orange-100 px-3 py-1 rounded-full mb-3">Frontend</span>
                <a href="#"><h5 class="text-base font-semibold text-stone-900 group-hover:text-[#f04924] transition-colors mb-1 leading-snug">JavaScript — Zero to Expert</h5></a>
                <p class="text-sm text-stone-500 font-light leading-relaxed mb-4">Deep dive into modern JS — closures, async/await, DOM, ES6+ and beyond.</p>
                <div class="flex items-center justify-between">
                    <span class="font-belina text-2xl text-[#f04924]">Rs. 2,999</span>
                    <a href="#" class="inline-flex items-center gap-1.5 text-sm font-medium text-stone-700 bg-stone-100 border border-stone-200 hover:bg-[#f04924] hover:text-white hover:border-[#f04924] px-4 py-2 rounded-xl transition-all duration-200">Enroll
                        <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Node.js --}}
        <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden group">
            <a href="#"><div class="overflow-hidden h-44">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Node.js_logo.svg/1280px-Node.js_logo.svg.png" alt="Node.js" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"/>
            </div></a>
            <div class="p-5">
                <span class="inline-block text-[11px] font-medium tracking-widest uppercase text-[#f04924] bg-orange-50 border border-orange-100 px-3 py-1 rounded-full mb-3">Backend</span>
                <a href="#"><h5 class="text-base font-semibold text-stone-900 group-hover:text-[#f04924] transition-colors mb-1 leading-snug">Node.js & Express APIs</h5></a>
                <p class="text-sm text-stone-500 font-light leading-relaxed mb-4">Build scalable server-side apps, REST APIs, and real-time features with Node.</p>
                <div class="flex items-center justify-between">
                    <span class="font-belina text-2xl text-[#f04924]">Rs. 3,499</span>
                    <a href="#" class="inline-flex items-center gap-1.5 text-sm font-medium text-stone-700 bg-stone-100 border border-stone-200 hover:bg-[#f04924] hover:text-white hover:border-[#f04924] px-4 py-2 rounded-xl transition-all duration-200">Enroll
                        <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- React — Most Popular --}}
        <div class="bg-white border-2 border-[#f04924] rounded-2xl overflow-hidden group">
            <a href="#"><div class="overflow-hidden h-44 relative">
                <img src="https://www.jotform.com/blog/wp-content/uploads/2017/01/react-js.png" alt="React" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"/>
                <span class="absolute top-3 left-3 text-[11px] font-medium tracking-widest uppercase text-white bg-[#f04924] px-3 py-1 rounded-full">Most popular</span>
            </div></a>
            <div class="p-5">
                <span class="inline-block text-[11px] font-medium tracking-widest uppercase text-[#f04924] bg-orange-50 border border-orange-100 px-3 py-1 rounded-full mb-3">Frontend</span>
                <a href="#"><h5 class="text-base font-semibold text-stone-900 group-hover:text-[#f04924] transition-colors mb-1 leading-snug">React.js — Complete Guide</h5></a>
                <p class="text-sm text-stone-500 font-light leading-relaxed mb-4">Hooks, Context API, Redux, React Router — everything to build modern UIs.</p>
                <div class="flex items-center justify-between">
                    <span class="font-belina text-2xl text-[#f04924]">Rs. 4,499</span>
                    <a href="#" class="inline-flex items-center gap-1.5 text-sm font-medium text-white bg-[#f04924] border border-[#f04924] hover:opacity-90 px-4 py-2 rounded-xl transition-all duration-200">Enroll
                        <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Data Science --}}
        <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden group">
            <a href="#"><div class="overflow-hidden h-44">
                <img src="https://www.mygreatlearning.com/blog/wp-content/uploads/2019/09/What-is-data-science-2.jpg" alt="Data Science" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"/>
            </div></a>
            <div class="p-5">
                <span class="inline-block text-[11px] font-medium tracking-widest uppercase text-[#f04924] bg-orange-50 border border-orange-100 px-3 py-1 rounded-full mb-3">Data</span>
                <a href="#"><h5 class="text-base font-semibold text-stone-900 group-hover:text-[#f04924] transition-colors mb-1 leading-snug">Data Science with Python</h5></a>
                <p class="text-sm text-stone-500 font-light leading-relaxed mb-4">NumPy, Pandas, Matplotlib, Scikit-learn — from data wrangling to ML models.</p>
                <div class="flex items-center justify-between">
                    <span class="font-belina text-2xl text-[#f04924]">Rs. 5,999</span>
                    <a href="#" class="inline-flex items-center gap-1.5 text-sm font-medium text-stone-700 bg-stone-100 border border-stone-200 hover:bg-[#f04924] hover:text-white hover:border-[#f04924] px-4 py-2 rounded-xl transition-all duration-200">Enroll
                        <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Data Analyst --}}
        <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden group">
            <a href="#"><div class="overflow-hidden h-44">
                <img src="https://www.thedataschool.com.au/wp-content/uploads/2024/12/DA-2.webp" alt="Data Analyst" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"/>
            </div></a>
            <div class="p-5">
                <span class="inline-block text-[11px] font-medium tracking-widest uppercase text-[#f04924] bg-orange-50 border border-orange-100 px-3 py-1 rounded-full mb-3">Data</span>
                <a href="#"><h5 class="text-base font-semibold text-stone-900 group-hover:text-[#f04924] transition-colors mb-1 leading-snug">Data Analyst Bootcamp</h5></a>
                <p class="text-sm text-stone-500 font-light leading-relaxed mb-4">Excel, SQL, Power BI & Tableau — turn raw data into actionable insights.</p>
                <div class="flex items-center justify-between">
                    <span class="font-belina text-2xl text-[#f04924]">Rs. 4,499</span>
                    <a href="#" class="inline-flex items-center gap-1.5 text-sm font-medium text-stone-700 bg-stone-100 border border-stone-200 hover:bg-[#f04924] hover:text-white hover:border-[#f04924] px-4 py-2 rounded-xl transition-all duration-200">Enroll
                        <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- Next.js --}}
        <div class="bg-white border border-stone-200 rounded-2xl overflow-hidden group">
            <a href="#"><div class="overflow-hidden h-44">
                <img src="https://tech.sparkfabrik.com/images/content/nextjs/nextjs-logo.jpg" alt="Next.js" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"/>
            </div></a>
            <div class="p-5">
                <span class="inline-block text-[11px] font-medium tracking-widest uppercase text-[#f04924] bg-orange-50 border border-orange-100 px-3 py-1 rounded-full mb-3">Full Stack</span>
                <a href="#"><h5 class="text-base font-semibold text-stone-900 group-hover:text-[#f04924] transition-colors mb-1 leading-snug">Next.js 14 — App Router</h5></a>
                <p class="text-sm text-stone-500 font-light leading-relaxed mb-4">Server components, SSR, SSG, API routes & deployment with Vercel.</p>
                <div class="flex items-center justify-between">
                    <span class="font-belina text-2xl text-[#f04924]">Rs. 5,499</span>
                    <a href="#" class="inline-flex items-center gap-1.5 text-sm font-medium text-stone-700 bg-stone-100 border border-stone-200 hover:bg-[#f04924] hover:text-white hover:border-[#f04924] px-4 py-2 rounded-xl transition-all duration-200">Enroll
                        <svg width="14" height="14" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>


