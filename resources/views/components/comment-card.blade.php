<!-- Single Card -->
<div class="px-6 py-4 border-2 w-full max-w-xl border-primary rounded-xl space-y-6">
    <!-- Profile -->
    <div class="flex items-start w-full gap-4">
        <span class="inline-block w-12 h-12 bg-primary rounded-full"></span>
        <!-- Name -->
        <div>
            <h1 class="text-md lg:text-xl font-bold text-primary">{{ $username }}</h1>
            <p class="text-gray-500 text-sm lg:text-md">{{ $status }}</p>
        </div>
    </div>
    <!-- Comment -->
    <div class="p-3">
        <p class="text-xs w-full lg:text-lg leading-[1.5]">{{ $comment }}</p>
    </div>
</div>
<!-- Single Card End -->

