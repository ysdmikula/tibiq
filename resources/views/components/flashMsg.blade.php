@if(session()->has("flash"))

<div id="flash" class="position-fixed px—48 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex flex-column motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
    <p class="m-0">{{ session("flash") }}</p>
</div>

<script>
    setTimeout(() => {
        document.querySelector("#flash").remove();
    }, 3000);

</script>

@endif