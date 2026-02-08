<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $page_title ?? 'BAQC'; ?></title>
    <meta name="description" content="<?php echo $page_description ?? 'Bangladesh Aspiring QA Community'; ?>" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
      @theme {
        --color-baqc-green: #006a4e;
        --color-baqc-red: #d9253a;
        --color-baqc-dark: #0f172a;
        --font-sans: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
    </style>
</head>
<body class="font-sans antialiased text-slate-800 bg-gray-50">

    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white border-b border-gray-200">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
                 <a href="index.php" class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-baqc-green rounded-full flex items-center justify-center text-white font-bold text-lg border-2 border-baqc-red">B</div>
                    <span class="font-bold text-xl tracking-tighter text-baqc-green">BAQC<span class="text-baqc-red">.bd</span></span>
                </a>
                <a href="index.php" class="text-sm font-medium text-gray-600 hover:text-baqc-green transition-colors">
                    &larr; Back to Home
                </a>
            </div>
        </header>
