<x-Layout>

</x-Layout>
<section class="min-h-screen bg-stone-100 flex items-center justify-center px-4 py-16">
  <div class="relative bg-white border border-stone-200 rounded-2xl p-10 w-full max-w-lg overflow-hidden">

    {{-- decorative blob --}}
    <div class="absolute -top-14 -right-14 w-52 h-52 rounded-full bg-[#f04924]  opacity-60 pointer-events-none"></div>

    {{-- badge --}}
    <span class="inline-block text-[11px] font-medium tracking-widest uppercase text-white bg-[#f04924] border border-stone-200 px-4 py-1.5 rounded-full mb-6">
      Get in touch
    </span>

    {{-- heading --}}
    <h1 class="font-serif text-5xl font-normal leading-tight text-stone-900 mb-3">
      Let's<br><em class="text-stone-400">talk.</em>
    </h1>

    {{-- subtitle --}}
    <p class="text-sm font-light text-stone-500 leading-relaxed mb-8 max-w-sm">
      Technical questions, feedback, business enquiries — we're all ears. Drop us a message and we'll get back to you.
    </p>

    <hr class="border-stone-100 mb-8">

    <form action="#" method="POST" class="space-y-5">
      @csrf

      {{-- name + email row --}}
      <div class="grid grid-cols-2 gap-4">
        <div>
          <label for="name" class="block text-[11px] font-medium tracking-widest uppercase text-stone-400 mb-2">Full name</label>
          <input id="name" name="name" type="text" placeholder="John Smith"
            class="w-full bg-stone-50 border border-stone-200 rounded-xl px-4 py-3 text-sm text-stone-800 placeholder-stone-300 focus:outline-none focus:border-stone-400 focus:ring-2 focus:ring-stone-100 transition">
        </div>
        <div>
          <label for="email" class="block text-[11px] font-medium tracking-widest uppercase text-stone-400 mb-2">Email</label>
          <input id="email" name="email" type="email" placeholder="you@example.com"
            class="w-full bg-stone-50 border border-stone-200 rounded-xl px-4 py-3 text-sm text-stone-800 placeholder-stone-300 focus:outline-none focus:border-stone-400 focus:ring-2 focus:ring-stone-100 transition">
        </div>
      </div>

      {{-- subject --}}
      <div>
        <label for="subject" class="block text-[11px] font-medium tracking-widest uppercase text-stone-400 mb-2">Subject</label>
        <input id="subject" name="subject" type="text" placeholder="How can we help?"
          class="w-full bg-stone-50 border border-stone-200 rounded-xl px-4 py-3 text-sm text-stone-800 placeholder-stone-300 focus:outline-none focus:border-stone-400 focus:ring-2 focus:ring-stone-100 transition">
      </div>

      {{-- message --}}
      <div>
        <label for="message" class="block text-[11px] font-medium tracking-widest uppercase text-stone-400 mb-2">Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Tell us everything..."
          class="w-full bg-stone-50 border border-stone-200 rounded-xl px-4 py-3 text-sm text-stone-800 placeholder-stone-300 focus:outline-none focus:border-stone-400 focus:ring-2 focus:ring-stone-100 transition resize-none leading-relaxed"></textarea>
      </div>

      {{-- footer --}}
      <div class="flex items-center justify-between pt-2 flex-wrap gap-3">
        <button type="submit"
          class="group flex items-center gap-2 text-sm font-medium text-white bg-[#f04924] border border-stone-300 rounded-xl px-7 py-3 hover:bg-[#b2e296]  active:scale-95 transition-all">
          Send message
          <span class="inline-block transition-transform group-hover:translate-x-1">→</span>
        </button>
        <span class="text-xs text-stone-300 tracking-wide">We reply within 24 hours</span>
      </div>

    </form>
  </div>
</section>
