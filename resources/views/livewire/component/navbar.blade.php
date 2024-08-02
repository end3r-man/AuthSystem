<div class="w-full h-20 flex justify-between items-center py-3 container mx-auto">
    <div class="w-full md:w-auto h-full flex items-center md:items-start flex-col gap-y-1">
        <h2 class="text-3xl font-semibold">Autho</h2>

        <div class="border-t border-slate-600 w-full"></div>

        <a href="mailto:support@example.com" target="_blank" class="text-slate-700 center gap-x-3">support@example.com <iconify-icon
                icon="ph:arrow-right-light"></iconify-icon></a>
    </div>

    <div class="w-full h-full hidden md:flex justify-end items-center gap-x-8">
        <a wire:navigate href="{{route('auth.reg')}}" class="capitalize">Login</a>
        <a wire:navigate href="{{route('auth.reg')}}" class="capitalize px-3 py-2 bg-[#EF5A6F] rounded-md text-white">Sign Up</a>
    </div>
</div>
