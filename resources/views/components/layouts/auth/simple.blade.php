<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-[#f5f7fb] font-sans text-[#2d3748] antialiased" style="--color-accent: #7c8db5; --color-accent-content: #7c8db5; --color-accent-foreground: #ffffff;">
        <div class="flex min-h-svh flex-col items-center justify-center px-6 py-8">
            <div class="w-full max-w-[420px]">
                <a href="{{ route('home') }}" class="mb-6 flex flex-col items-center gap-3 text-center" wire:navigate>
                    <span class="flex size-16 items-center justify-center rounded-full bg-[#7c8db5] text-2xl font-bold text-white shadow-sm">
                        ST
                    </span>
                    <span class="space-y-1">
                        <span class="block text-xl font-semibold text-[#2d3748]">Student Task Management System</span>
                        <span class="block text-sm text-[#718096]">Laravel MVC Project</span>
                    </span>
                </a>
                <div class="rounded-2xl bg-white p-7 shadow-[0_2px_10px_rgba(0,0,0,0.05)]">
                    {{ $slot }}
                </div>
            </div>
        </div>
        @fluxScripts
    </body>
</html>
