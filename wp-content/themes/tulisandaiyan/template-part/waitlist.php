


<div class="relative z-10" id="waitlist-backdrop" aria-labelledby="modal-title" role="dialog" aria-modal="false">
  <!--
    Background backdrop, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->
  <div class="fixed inset-0 bg-[#fbf6f0] bg-opacity-75 transition-opacity"></div>

  <div class="fixed inset-0 z-10 overflow-y-auto">
    <div id="waitlist-panel" class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0 text-[#282828]" >
      <!--
        Modal panel, show/hide based on modal state.

        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          To: "opacity-100 translate-y-0 sm:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 sm:scale-100"
          To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
      <div class="relative transform overflow-hidden text-left transition-all">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-24 shadow-2xl sm:rounded-3xl sm:px-24 xl:py-32">
            <h2 class="mx-auto max-w-2xl text-center text-3xl font-bold tracking-tight text-white sm:text-4xl">Get notified when we’re launching.</h2>
            <p class="mx-auto mt-2 max-w-xl text-center text-lg leading-8 text-gray-300">Reprehenderit ad esse et non officia in nulla. Id proident tempor incididunt nostrud nulla et culpa.</p>
            <?php echo do_shortcode('[wpforms id="34"]') ?>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>